<?php
/*
 *  This File Is A Part Of The phpIgniter Project.
 *  Maintained By Metin Şimşek.
 *  Do Not Distribute Without The License And Author's Name.
 *  @copyright Copyright (c) 2021 Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>.
 *  @author Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @version 0.0.1
 *  @link https://smsk.me/phpigniter
 *  @created 8.03.2021 21:52
 *  @edited 8.03.2021 21:52
 * ------------------------------------------------------------------------
 *  Commons.php File
 *
 *  This file contains functions that phpIgniter will use generally.
 *
 *  @file         Commons.php
 *  @package      phpIgniter Core
 *  @author       Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @link         https://smsk.me/phpigniter/docs/Commons.php
 *
 * ------------------------------------------------------------------------
 ******************************************************************************/
defined('DIRECT_ACCESS') or exit('No direct script access allowed - phpIgniter v' . phpIgniter_VERSION);

if (!function_exists('show_error')) {
    /**
     * Show error for debugging
     * @param string $heading
     * @param string $message
     * @param string $template
     * @param string $error_code
     * @return string
     */
    function show_error($heading, $message, $error_code)
    {
        global $config;
        $config = $config;
        get_config();
        $data = new stdClass();
        $data->heading = $heading;
        $data->message = $message;
        $data->error_code = $error_code;
        $data->config = $config;

        if (!empty($data))
            extract((array)$data, EXTR_SKIP);
        ob_start();
        include(APP_DIR . 'views/' . $config['error_dir'] . '/' . $config['error_view'] . '.php');
        echo ob_get_clean();
        die();
    }
}

if (!function_exists('load_class')) {
    function &load_class($class, $directory = '', $params = NULL)
    {

        $pI = Registry::get_instance();
        $className = ucfirst(strtolower($class));

        if ($pI->getObject($className) != NULL) {
            $object = $pI->getObject($className);
            return $object;
        }

        foreach (array(APP_DIR, SYSTEM_DIR) as $path) {
            $fullPathName = $path . $directory . DIRECTORY_SEPARATOR . $className . '.php';

            if (file_exists($fullPathName)) {
                if (!class_exists($className, FALSE)) {
                    require_once $fullPathName;
                }
            }
        }

        is_loaded($class);
        $pI->storeObject($className, isset($params) ? new $className($params) : new $className());
        $object = $pI->getObject($className);
        return $object;
    }
}

if (!function_exists('load_driver')) {
    function &load_driver($driver, $directory = '', $params = NULL)
    {
        $pI = Registry::get_instance();
        $className = ucfirst(strtolower($driver));

        if ($pI->getObject($className) != NULL) {
            $object = $pI->getObject($className);
            return $object;
        }

        foreach (array(SYSTEM_DIR) as $path) {
            $fullPathName = $path . "Drivers" . DIRECTORY_SEPARATOR . $directory . DIRECTORY_SEPARATOR . $className . '.php';

            if (file_exists($fullPathName)) {
                if (!class_exists($className, FALSE)) {
                    require_once $fullPathName;
                }
            }
        }

        is_loaded($driver);
        $pI->storeObject($className, isset($params) ? new $className($params) : new $className());
        $object = $pI->getObject($className);
        return $object;
    }
}

if (!function_exists('is_loaded')) {
    /**
     * Keeps track of which libraries have been loaded. This function is
     * called by the load_class() function above
     *
     * @param string
     * @return    array
     */
    function &is_loaded($class = '')
    {
        static $_is_loaded = array();

        if ($class !== '') {
            $_is_loaded[$class] = ucfirst(strtolower($class));
        }

        return $_is_loaded;
    }
}

if (!function_exists('get_config')) {
    /*
     * ------------------------------------------------------
     * Loads the main config.php file
     * ------------------------------------------------------
     */
    function &get_config()
    {
        static $config;

        if (file_exists(APP_DIR . 'config/config.php')) {
            require_once APP_DIR . 'config/config.php';

            if (isset($config) or is_array($config)) {
                foreach ($config as $key => $val) {
                    $config[$key] = $val;
                }

                return $config;
            }
        } else
            show_404('404 Not Found', 'The configuration file does not exist');
    }
}

if (!function_exists('config_item')) {
    /*
     * ------------------------------------------------------
     * Config Item
     * ------------------------------------------------------
     */
    function config_item($item)
    {
        static $_config;

        if (empty($_config)) {
            // references cannot be directly assigned to static variables, so we use an array
            $_config[0] =& get_config();
        }

        return isset($_config[0][$item]) ? $_config[0][$item] : NULL;
    }
}

if (!function_exists('html_escape')) {
    /**
     * Returns HTML escaped variable.
     *
     * @param mixed $var The input string or array of strings to be escaped.
     * @param bool $double_encode $double_encode set to FALSE prevents escaping twice.
     * @return    mixed            The escaped string or array of strings as a result.
     */
    function html_escape($var, $double_encode = TRUE)
    {
        if (empty($var)) {
            return $var;
        }

        if (is_array($var)) {
            foreach (array_keys($var) as $key) {
                $var[$key] = html_escape($var[$key], $double_encode);
            }

            return $var;
        }

        return htmlspecialchars($var, ENT_QUOTES, config_item('charset'), $double_encode);
    }
}