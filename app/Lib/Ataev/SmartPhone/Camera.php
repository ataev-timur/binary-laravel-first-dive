<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 09.07.2015
 * Time: 21:02
 */

namespace App\Lib\Ataev\SmartPhone;


class Camera {
    use MagicGetTrait;

    protected $mpixels;

    public function __construct($mpixels)
    {
        $this->mpixels = $mpixels;
    }
} 