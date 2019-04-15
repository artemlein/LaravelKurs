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
    return view('welcome');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');



Route::group(['namespace' => 'Blog', 'prefix' => 'blog'], function(){
    Route::resource('posts','PostController')->names('blog.posts');
});

Auth::routes();


//> Админка блога

//namespace - То где будет лежать контроллер App/Http/Blog/Admin
//prefix - путь url localhost:8000/admin/blog/...
$groupData = [
    'namespace' => 'Blog\Admin',
    'prefix'    => 'admin/blog',
];
//names - наименоание маршрута
Route::group($groupData, function() {
    $methods = ['index','edit','update','create','store'];
    Route::resource('categories','CategoryController')
        ->only($methods)
        ->names('blog.admin.categories');
});
