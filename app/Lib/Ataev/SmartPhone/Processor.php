<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 09.07.2015
 * Time: 21:01
 */

namespace App\Lib\Ataev\SmartPhone;


class Processor {
    use MagicGetTrait;

    protected $vendor;
    protected $cores;

    public function __construct($vendor, $cores)
    {
        $this->vendor   = $vendor;
        $this->cores    = $cores;
    }
} 