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
 *  Registry.php File
 *
 *  This class contains functions that will help register classes.
 *
 *  @file         Registry.php
 *  @package      phpIgniter Core
 *  @author       Metin Şimşek (mtnsmsk) <mtnsmsk@smsk.me, smsk.me>
 *  @link         https://smsk.me/phpigniter/docs/Registry.php
 *
 * ------------------------------------------------------------------------
 ******************************************************************************/
defined('DIRECT_ACCESS') or exit('No direct script access allowed - phpIgniter v' . phpIgniter_VERSION);

class Registry
{
    private $_classes = array();
    private static $_instance;

    private function __construct()
    {
    }

    private function __clone()
    {
    }

    /*
    * ------------------------------------------------------
    *  Get Instance
    * ------------------------------------------------------
    */
    public static function get_instance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /*
    * ------------------------------------------------------
    *  Get Class
    * ------------------------------------------------------
    */
    protected function get($key)
    {

        if (isset($this->_classes[$key])) {
            return $this->_classes[$key];
        }
        return NULL;
    }

    /*
    * ------------------------------------------------------
    *  Set Class
    * ------------------------------------------------------
    */
    protected function set($key, $object)
    {
        $this->_classes[$key] = $object;
    }

    /*
    * ------------------------------------------------------
    *  Get Class Object
    * ------------------------------------------------------
    */
    static function getObject($key)
    {
        return self::get_instance()->get($key);
    }

    /*
    * ------------------------------------------------------
    *  Store Class Object
    * ------------------------------------------------------
    */
    static function storeObject($key, $object)
    {
        return self::get_instance()->set($key, $object);
    }
}

