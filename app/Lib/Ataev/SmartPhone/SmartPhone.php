<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 09.07.2015
 * Time: 20:47
 */

namespace App\Lib\Ataev\SmartPhone;


class SmartPhone {
    use MagicGetTrait;

    protected $name;
    protected $processor;
    protected $display;
    protected $camera;
    protected $battery;

    public function __construct($name, Processor $processor, Display $display, Camera $camera, Battery $battery)
    {
        $this->name         = $name;
        $this->processor    = $processor;
        $this->display      = $display;
        $this->camera       = $camera;
        $this->battery      = $battery;
    }

    public function getInfo()
    {
        return $this->name . ', ' . $this->processor->vendor . ' ' . $this->processor->cores .' cores, ' . $this->display->resolution . ' display, ' . $this->camera->mpixels . ' megapixels camera, battery capacity ' . $this->battery->capacity . '.';
    }
} 