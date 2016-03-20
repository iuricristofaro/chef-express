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
    return view('template');
});

Route::get('blog', ['as' => 'blog', 'uses' => 'PostsController@index']);

Route::get('blog/paginas/{id}', ['as' => 'blog.paginas', 'uses' => 'PostsController@paginas']);


Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

Route::group(['prefix'=>'admin', 'middleware'=>'auth'], function(){

    Route::group(['prefix' => 'posts'], function() {

        Route::get('', ['as' => 'admin.posts.index', 'uses' => 'PostsAdminController@index']);

        Route::get('cadastro', ['as' => 'admin.posts.cadastro', 'uses' => 'PostsAdminController@cadastro']);

        Route::post('store', ['as' => 'admin.posts.store', 'uses' => 'PostsAdminController@store']);

        Route::get('editar/{id}', ['as' => 'admin.posts.editar', 'uses' => 'PostsAdminController@editar']);

        Route::put('update/{id}', ['as' => 'admin.posts.update', 'uses' => 'PostsAdminController@update']);

        Route::get('delete/{id}', ['as' => 'admin.posts.destroy', 'uses' => 'PostsAdminController@destroy']);



    });


    Route::group(['prefix'=> 'usuarios'], function(){

        Route::get('', ['as' => 'admin.usuarios.index', 'uses' => 'AdminUsersController@index']);

        Route::get('cadastro', ['as' => 'admin.usuarios.cadastro', 'uses' => 'AdminUsersController@cadastro']);

        Route::post('store', ['as' => 'admin.usuarios.store', 'uses' => 'AdminUsersController@store']);

        Route::get('editar/{id}', ['as' => 'admin.usuarios.editar', 'uses' => 'AdminUsersController@editar']);

        Route::put('update/{id}', ['as' => 'admin.usuarios.update', 'uses' => 'AdminUsersController@update']);

        Route::get('delete/{id}', ['as' => 'admin.usuarios.destroy', 'uses' => 'AdminUsersController@destroy']);
    });


});

