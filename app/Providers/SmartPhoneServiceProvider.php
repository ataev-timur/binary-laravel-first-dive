<?php
/**
 * Created by PhpStorm.
 * User: TimmyKsu
 * Date: 09.07.2015
 * Time: 21:18
 */

namespace App\Providers;


use App\Lib\Ataev\SmartPhone\Battery;
use App\Lib\Ataev\SmartPhone\Camera;
use App\Lib\Ataev\SmartPhone\Display;
use App\Lib\Ataev\SmartPhone\Processor;
use App\Lib\Ataev\SmartPhone\SmartPhone;
use Illuminate\Support\ServiceProvider;

class SmartPhoneServiceProvider extends ServiceProvider {

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('Processor', function($app){
            return new Processor('MTK', 4);
        });

        $this->app->bind('Display', function($app){
            return new Display('1280x720');
        });

        $this->app->bind('Camera', function($app){
            return new Camera(8);
        });

        $this->app->bind('Battery', function($app){
            return new Battery('2200 mAh');
        });

        $this->app->bind('SmartPhone', function($app) {
            return new SmartPhone('UMI C1', app('Processor'), app('Display'), app('Camera'), app('Battery'));
        });
    }
}