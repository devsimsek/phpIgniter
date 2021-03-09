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
 *  url_helper.php File
 *
 *  This helper contains functions that can help with url functions
 *
 *  @file         url_helper.php
 *  @package      phpIgniter Core
 *  @author       Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @link         https://smsk.me/phpigniter/docs/url_helper.php
 *
 * ------------------------------------------------------------------------
 ******************************************************************************/
defined('DIRECT_ACCESS') or exit('No direct script access allowed - phpIgniter v' . phpIgniter_VERSION);

if (!function_exists('base_url')) {
    function base_url()
    {
        global $config;
        return $config['base_url'];
    }
}
if (!function_exists('segment')) {
    function segment($seg)
    {
        if (!is_int($seg)) return false;

        $parts = explode('/', $_SERVER['REQUEST_URI']);
        return isset($parts[$seg]) ? $parts[$seg] : false;
    }
}
if (!function_exists('redirect')) {

    function redirect($loc)
    {
        global $config;

        header('Location: ' . $config['base_url'] . $loc);
    }
}