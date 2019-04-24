<?php namespace Test;

use Hyyppa\LaravelFluentFM\Facades\FluentFM;
use Hyyppa\LaravelFluentFM\Providers\LaravelFluentFMServiceProvider;

abstract class TestCase extends \Orchestra\Testbench\TestCase
{

    protected static $config = [
        'host' => '__hostname__',
        'file' => '__filemaker__',
        'user' => '__username__',
        'pass' => '__password__',
    ];

    protected $history      = [];
    protected $real_history = [];


    protected function getEnvironmentSetUp($app) : void
    {
        $app[ 'config' ]->set('fluent-fm', [
            'file' => static::$config[ 'file' ],
            'host' => static::$config[ 'host' ],
            'user' => static::$config[ 'user' ],
            'pass' => static::$config[ 'pass' ],
        ]);
    }


    protected function getPackageProviders($app) : array
    {
        return [LaravelFluentFMServiceProvider::class];
    }


    protected function getPackageAliases($app) : array
    {
        return ['FluentFM' => FluentFM::class];
    }

}
