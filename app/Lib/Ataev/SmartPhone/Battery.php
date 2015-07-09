<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 09.07.2015
 * Time: 21:02
 */

namespace App\Lib\Ataev\SmartPhone;


class Battery {
    use MagicGetTrait;

    protected $capacity;

    public function __construct($capacity)
    {
        $this->capacity = $capacity;
    }
} 