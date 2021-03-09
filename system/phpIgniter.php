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
 *  phpIgniter.php File
 *
 *  This file contains core system of phpIgniter.
 *
 *  @file         phpIgniter.php
 *  @package      phpIgniter Core
 *  @author       Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @link         https://smsk.me/phpigniter/docs/phpIgniter.php
 *
 * ------------------------------------------------------------------------
 ******************************************************************************/
defined('DIRECT_ACCESS') or exit('No direct script access allowed - phpIgniter v' . phpIgniter_VERSION);

function phpIgniter()
{
    define("DIRECTORY_SEPARATOR", "/");


    global $config;

    // Includes
    require(SYSTEM_DIR . 'Core/Registry.php');
    require(SYSTEM_DIR . 'Core/Commons.php');
    require(SYSTEM_DIR . 'Core/Model.php');
    require(SYSTEM_DIR . 'Core/Loader.php');
    require(SYSTEM_DIR . 'Core/Controller.php');

    function &get_instance()
    {
        return Controller::get_instance();
    }

    // Set our defaults
    $controller = $config['default_controller'];
    $action = 'index';
    $url = '';

    // Get request url and script url
    $request_url = (isset($_SERVER['REQUEST_URI'])) ? $_SERVER['REQUEST_URI'] : '';
    $script_url = (isset($_SERVER['PHP_SELF'])) ? $_SERVER['PHP_SELF'] : '';

    // Get our url path and trim the / of the left and the right
    if ($request_url != $script_url) $url = trim(preg_replace('/' . str_replace('/', '\/', str_replace('index.php', '', $script_url)) . '/', '', $request_url, 1), '/');

    // Split the url into segments
    $segments = explode('/', $url);

    // Do our default checks
    if (isset($segments[0]) && $segments[0] != '') $controller = $segments[0];
    if (isset($segments[1]) && $segments[1] != '') $action = $segments[1];

    // Get our controller file
    $path = APP_DIR . 'controllers/' . $controller . '.php';
    if (file_exists($path)) {
        require_once($path);
    } else {
        $controller = $config['error_controller'];
        require_once(APP_DIR . 'controllers/' . $controller . '.php');
    }

    // Check the action exists
    if (!method_exists($controller, $action)) {
        $controller = $config['error_controller'];
        require_once(APP_DIR . 'controllers/' . $controller . '.php');
        $action = 'index';
    }

    // Create object and call method
    $obj = new $controller;
    die(call_user_func_array(array($obj, $action), array_slice($segments, 2)));
}

