<?php
/*
 *  This File Is A Part Of The phpIgniter Project.
 *  Maintained By Metin Şimşek.
 *  Do Not Distribute Without The License And Author's Name.
 *  @copyright Copyright (c) <date> Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>.
 *  @author Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @version 0.0.1
 *  @link https://smsk.me/phpigniter
 *  @created 9.03.2021 13:20
 *  @edited 9.03.2021 13:20
 * ------------------------------------------------------------------------
 *  errors.php File
 *
 *  This class contains functions that enable config files to be managed
 *
 *  @file         errors.php
 *  @package      phpIgniter Core
 *  @author       Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @link         https://smsk.me/phpigniter/docs/errors.php
 *
 * ------------------------------------------------------------------------
 ******************************************************************************/
/*
 * The show_error() function passes $heading, $message, $error_code and $config variables.
 */
// Todo: add $this-> support for view files.
if (isset($heading) && isset($message) && isset($error_code) && isset($config)) {
    include(APP_DIR . 'views/' . $config['error_dir'] . '/head.php');
    include(APP_DIR . 'views/' . $config['error_dir'] . '/content.php');
} else {
    print_r("FATAL ERROR: There is a problem with phpIgniter core. Please re-install phpIgniter error handler.");
}