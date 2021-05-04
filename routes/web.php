<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // Mail::raw('Hello world', function($message){
    //     $message
    //         ->to('foo@bar.com')
    //         ->from('admin@example.com')
    //         ->subject('Check This Out');
    // });
    // Mail::to('foo@bar.com')->send(new App\Mail\Goodbye);
    // return view('welcome');
    return "Hello, Jingoo!";
});
