<?php

use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Models\Product;

/*
|--------------------------------------------------------------------------
| Console Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of your Closure based console
| commands. Each Closure is bound to a command instance allowing a
| simple approach to interacting with each command's IO methods.
|
*/

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

Artisan::command('say:hello {name}', function ($name) {
    $headers = ['Name', 'Email'];
    $users1 = Array(
        [
            'name'=>'john',
            'email'=>'john@gmail.com'
        ],

        [
            'name' => 'tarun',
            'email' => 'tarun@gmail.com'
        ],

        [
            'name' => 'umesh',
            'email' => 'umesh@gmail.com'
        ],

        [
            'name' => 'rakesh',
            'email' => 'rakesh @gmail.com'
        ],

        [
            'name' => 'rafiq',
            'email' => 'rafiq@gmail.com'
        ],

        [
            'name' => 'jonita',
            'email' => 'jonita@gmail.com'
        ],

        [
            'name' => 'faizan',
            'email' => 'faizan@gmail.com'
        ]
    );
    $arr1 = array();
    foreach($users1 as $k=>$lons){
        $findme = $name;
        $pos = strpos($lons['name'], $findme);
        if ($pos === 0) {
            array_push($arr1, $lons);
        }else {
            continue;
        }
    }

    $this->table($headers, $arr1);
});

Artisan::command('say:signup', function () {
    $headers = ['Name', 'Email'];
    $name = $this->ask('Enter Name');
    $email = $this->ask('Enter your email');
    $users1 = Product::select('name', 'detail')->get()->toArray();
    array_push($users1, [$name, $email]);
    $this->table($headers, $users1);
});
