<?php

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
    $data=['a'=>'zaid','b'=>"reta"];
     return view('welcome')->with('data',$data);
    
    //return view('welcome')->with(['name'=>'aya12','id'=>'27']);
});

Route::get('/test1', function () {
    return 'welcome ';
});

Route::get('/test2/{id}', function ($id) {
    return  $id ;
});


Route::get('/test3/{id?}', function () {
    return  'welcome' ;
});
 Route::get('/show-number/{id}',function($id){
      return view('index');
 })-> name('a');


Route::get('/show-string/{id?}',function(){
      return 'welcome';
 })-> name('b');
Route::view('aya','index');
Route::get('zaid','Hameed@index');
Route::namespace('Front')->group(function(){
    
    Route::get('users','UserController@showadmin');
});
Route::get('second','Front\FirstContoller@show');

Route::resource('news','NesController');
Route::get('landing',function(){
    return view('landing');
});
Route::get('about',function(){
    return view('about');
});
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Route::resource('products','ProductController');
Route::get('product/soft/delete/{id}','ProductController@softDelete')->name('soft.delete');
Route::get('product/trash','ProductController@trashed')->name('product.trash');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
