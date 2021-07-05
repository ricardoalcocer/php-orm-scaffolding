<?php
    require('vendor/autoload.php');

    use Illuminate\Database\Capsule\Manager as Capsule;

    $capsule = new Capsule;
    
    $capsule->addConnection([
        'driver'    => 'mysql',
        'host'      => 'localhost',
        'database'  => 'database',
        'username'  => 'root',
        'password'  => 'password',
        'charset'   => 'utf8',
        'collation' => 'utf8_unicode_ci',
        'prefix'    => '',
    ]);
    
    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    /*

    1. fill out your db details
    2. got to app/models/FirstModel and make it point to one of your tables
    3. uncomment line below
    */

    //print_r(FirstModel::all()->toArray();
