<?php
/**
 * Created by PhpStorm.
 * User: serb
 * Date: 4/12/16
 * Time: 8:05 AM
 */

namespace App;


trait  Singleton
{

    protected static $instance;

    protected  function __construct()
    {
    }

    public static function instance()
    {
        if(null===static::$instance){
            static::$instance=new static;
        }
        return new static::$instance;
    }


}