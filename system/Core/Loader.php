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
 *  Loader.php File
 *
 *  This class contains functions to load classes, files, plugins, libraries and drivers
 *
 *  @file         Loader.php
 *  @package      phpIgniter Core
 *  @author       Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @link         https://smsk.me/phpigniter/docs/Loader.php
 *
 * ------------------------------------------------------------------------
 ******************************************************************************/
defined('DIRECT_ACCESS') or exit('No direct script access allowed - phpIgniter v' . phpIgniter_VERSION);

class Loader
{
    /*
	 * ------------------------------------------------------
	 *  Load Model
	 * ------------------------------------------------------
	 */
    public function model($classes)
    {
        if (!class_exists('Model'))
            require_once(SYSTEM_DIR . 'core/Model.php');

        $pI = Controller::get_instance();
        if (is_array($classes)) {
            foreach ($classes as $class)
                $pI->$class =& load_class($class . '_model', 'models');
        } else
            $pI->$classes =& load_class($classes . '_model', 'models');
    }

    /*
     * ------------------------------------------------------
     *  Load View
     * ------------------------------------------------------
     */
    public function view($viewFile, $data = array())
    {
        if (!empty($data))
            extract((array) $data, EXTR_SKIP);
        ob_start();
        if (file_exists(APP_DIR . 'views/' . $viewFile . '.php'))
            /*
             * ! is_php('5.4')
             */
            if ( ! ini_get('short_open_tag') && config_item('rewrite_short_tags') === TRUE)
            {
                echo eval('?>'.preg_replace('/;*\s*\?>/', '; ?>', str_replace('<?=', '<?php echo ', file_get_contents(APP_DIR . 'views/' . $viewFile . '.php'))));
            }
            else
            {
                include(APP_DIR . 'views/' . $viewFile . '.php'); // include() vs include_once() allows for multiple views with the same name
            }

        else
            show_404('404 Not Found', $viewFile . ' view file was not found.');
        echo ob_get_clean();
    }

    /*
     * ------------------------------------------------------
     *  Load Helpers
     * ------------------------------------------------------
     */
    public function helper($helper)
    {
        if (is_array($helper)) {
            foreach (array(APP_DIR . 'helpers', SYSTEM_DIR . 'helpers') as $dir) {
                foreach ($helper as $hlpr) {
                    if (file_exists($dir . DIRECTORY_SEPARATOR . $hlpr . '_helper.php')) {
                        require_once $dir . DIRECTORY_SEPARATOR . $hlpr . '_helper.php';
                    }
                }
            }
        } else {
            foreach (array(APP_DIR . 'helpers', SYSTEM_DIR . 'helpers') as $dir) {
                if (file_exists($dir . DIRECTORY_SEPARATOR . $helper . '_helper.php')) {
                    require_once $dir . DIRECTORY_SEPARATOR . $helper . '_helper.php';
                }
            }
        }
    }

    /*
     * ------------------------------------------------------
     *  Load Library
     * ------------------------------------------------------
     */
    public function library($classes, $params = array())
    {
        $pI = Controller::get_instance();
        if (is_array($classes)) {
            foreach ($classes as $class) {
                if ($class == 'database') {
                    $database =& load_class('database', 'database');
                    $pI->db = $database::get_instance();
                }
                $pI->$class =& load_class($class, 'libraries', $params);
            }
        } else {
            if ($classes == 'database') {
                $database =& load_class('database', 'database');
                $pI->db = $database::get_instance();
            }
            $pI->$classes =& load_class($classes, 'libraries', $params);
        }
    }

    /*
     * ------------------------------------------------------
     *  Load Plugin
     * ------------------------------------------------------
     */
    public function plugin($classes, $params = array())
    {
        $pI = Controller::get_instance();
        if (is_array($classes)) {
            foreach ($classes as $class) {
                $pI->$class =& load_class($class, 'plugins', $params);
            }
        } else {
            $pI->$classes =& load_class($classes, 'plugins', $params);
        }
    }

    /*
     * ------------------------------------------------------
     *  Load Drivers
     * ------------------------------------------------------
     */
    public function driver($classes, $path = "", $params = array())
    {
        $pI = Controller::get_instance();

        if (is_array($classes)) {
            foreach ($classes as $class) {
                if ($class == 'database') {
                    $database =& load_driver('database', 'database');
                    $pI->db = $database::get_instance();
                }
                $pI->$class =& load_driver($class, $path, $params);
            }
        } else {
            if ($classes == 'database') {
                $database =& load_driver('database', 'database');
                $pI->db = $database::get_instance();
            }
            $pI->$classes =& load_driver($classes, $path, $params);
        }
    }

    /*
     * ------------------------------------------------------
     *  Load Database
     * ------------------------------------------------------
     */
    public function database()
    {
        $pI =& Controller::get_instance();
        $database =& load_driver('database', 'database');
        $pI->db = $database::get_instance();
    }

    /**
     * ------------------------------------------------------
     *  Check if Class is loaded
     * -----------------------------------------------------
     */
    public function is_loaded($class)
    {
        return array_search(ucfirst($class), is_loaded(), TRUE);
    }
}