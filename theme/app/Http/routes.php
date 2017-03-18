<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    $css = asset( '/css' );
    $js  = asset( '/js' );
    $img = asset( '/image' );
    $data = [ 'name'=>'Laravel', 'page'=>'Home', 'bootstrap'=>$css.'/bootstrap.min.css', 'style'=>$css.'/style.css' ];
    return view('home', $data);
});

Route::get('/about', function() {
    $css = asset( '/css' );
    $js  = asset( '/js' );
    $img = asset( '/image' );
    return view('about',['name'=>'Laravel', 'page'=> 'About', 'bootstrap'=>$css.'/bootstrap.min.css', 'style'=>$css.'/style.css' ]);
});

Route::get('/admin', function() {
    $css = asset( '/css' );
    $js  = asset( '/js' );
    $img = asset( '/image' );
    return View::make('admin',['name'=>'Laravel', 'page'=> 'Login', 'bootstrap'=>$css.'/bootstrap.min.css', 'style'=>$css.'/style.css' ]);
});

Route::any('/{pages}', function($pages) {  
    $pages = explode('/', $pages);
    var_dump( $pages ); 
});
