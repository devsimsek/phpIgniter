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
 *  config.php File
 *
 *  This file contains configurations for phpIgniter
 *
 *  @file         config.php
 *  @package      phpIgniter Core
 *  @author       Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @link         https://smsk.me/phpigniter/docs/config.php
 *
 * ------------------------------------------------------------------------
 ******************************************************************************/
defined('DIRECT_ACCESS') or exit('No direct script access allowed - phpIgniter v' . phpIgniter_VERSION);

$config['base_url'] = ''; // Base URL including trailing slash (e.g. http://localhost/)

/*
| -------------------------------------------------------------------
| Controller Settings
| -------------------------------------------------------------------
| This section will contain the settings needed to access your views.
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['default_controller'] 		Default Controller to load.
|	['error_controller'] 	    Custom Error Controller.
*/

$config['default_controller'] = 'main'; // Default controller to load
$config['error_view'] = 'errors'; // no extensions! Main error view file.
$config['error_dir'] = 'errors'; // Error views directory used for displaying errors.

/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This section will contain the settings needed to access your database.
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['driver'] 		The driver of your database server.
|	['hostname'] 	The hostname of your database server.
|	['port'] 		The port used by your database server.
|	['username'] 	The username used to connect to the database
|	['password'] 	The password used to connect to the database
|	['database'] 	The name of the database you want to connect to
|	['charset']		The default character set
*/

$database['driver'] = ''; // Default mysql
$database['hostname'] = ''; // Default 127.0.0.1
$database['port'] = ''; // Default blank
$database['username'] = ''; // Default root
$database['password'] = ''; // Default blank
$database['database'] = '';
$database['charset'] = 'utf8'; // Default utf8