<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 09.07.2015
 * Time: 22:36
 */

namespace App\Lib\Ataev\SmartPhone;


trait MagicGetTrait {
    public function __get($name)
    {
        return $this->$name;
    }
} 