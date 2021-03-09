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
 *  session_helper.php File
 *
 *  This helper contains functions that can help process sessions.
 *
 *  @file         session_helper.php
 *  @package      phpIgniter Core
 *  @author       Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @link         https://smsk.me/phpigniter/docs/session_helper.php
 *
 * ------------------------------------------------------------------------
 ******************************************************************************/
defined('DIRECT_ACCESS') or exit('No direct script access allowed - phpIgniter v' . phpIgniter_VERSION);

function set($key, $val)
{
    $_SESSION["$key"] = $val;
}

function get($key)
{
    return $_SESSION["$key"];
}

function destroy()
{
    session_destroy();
}