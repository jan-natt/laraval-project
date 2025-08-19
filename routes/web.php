<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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
});

Route::get('/test',function(){
    return"test Route"; 
});

//Route::post('$uri', $callback);

//Route::put('$uri', $callback);
//Route::delete('$uri', $callback);
//Route::patch('$uri', $callback);
//Route::options('$uri', $callback);
//Route::post('$uri', $callback);

Route::group(['prefix' => 'Training'],function(){
    

    Route::get('/aws', function () {
        echo 'aws traning';
    });

    Route::get('/laravel', function () {
        echo 'laravel traning';
    });

});

Route::get('/compact',function(){
    $articleName = ['article 1' ,'article 2'];
    $articlepublished = 'on my blog';

    return view('testview',compact('articleName','articlepublished'));
});


Route::get('/myarticle', [PageController::class, 'article']);
