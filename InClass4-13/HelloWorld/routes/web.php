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
    return view('welcome');
})->name('home');

Route::get("/atest", function() {
    //return view('test');
    $name = request('name');
    return view('test',
    [
        'theName' => $name
    ]);
});

//wildcard query string 

Route::get('/blog/{ablog}', function($ablog) {
    $blogs =
    [
        'first' => "My first blog entry",
        'second' => "My second blog"
    ];

    if(!array_key_exists($ablog, $blogs))
    {
        abort('404', "Not in the array");
    }

    return view('blog', ['blogPost' => $blogs[$ablog]]);
    //return($ablog);
    //return view('blog');
})->name("theBlog");