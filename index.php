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
 *  index.php File
 *
 *  This class contains functions that enable config files to be managed
 *
 *  @file         index.php
 *  @package      phpIgniter Core
 *  @author       Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @link         https://smsk.me/phpigniter/docs/index.php
 *
 * ------------------------------------------------------------------------
 ******************************************************************************/
define('DIRECT_ACCESS', TRUE); // Adding To Block Direct Access
/*
 * phpIgniter 0.0.1 DEVELOPMENT
 */

//Start the Session
session_start();
global $config;

// Startup Settings;
$config['application_dir'] = 'application'; // Application Directory. No Trailing Slash!!! (e.g. application)
$config['public_dir'] = 'static'; // Public Directory. No Trailing Slash!!! (e.g. static, public)
$config['system_dir'] = 'system'; // System Directory. No Trailing Slash!!! (e.g. system)


// Define Directories;
// Define Configuration

define('phpIgniter_VERSION', "0.0.1 DEVELOPMENT");
define('ROOT_DIR', realpath(dirname(__FILE__)) . '/');
define('APP_DIR', ROOT_DIR . $config['application_dir'] . '/');
define('SYSTEM_DIR', ROOT_DIR . $config['system_dir'] . '/');
define('PUBLIC_DIR', ROOT_DIR . $config['public_dir'] . '/');

require(APP_DIR . 'config/config.php');
define('BASE_URL', $config['base_url']);

// Include Required Files
require(ROOT_DIR . 'system/phpIgniter.php');

// Lets Ignite phpIgniter;
phpIgniter();
