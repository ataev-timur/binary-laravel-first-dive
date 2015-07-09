<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 09.07.2015
 * Time: 21:02
 */

namespace App\Lib\Ataev\SmartPhone;


class Display {
    use MagicGetTrait;

    protected $resolution;

    public function __construct($resolution)
    {
        $this->resolution = $resolution;
    }
} 