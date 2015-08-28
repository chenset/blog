<?php

Route::group(['domain' => 'flysay.com'], function () {
    Route::get('{all}', function () {
        return Redirect::away('http://www.flysay.com' . ltrim(\Illuminate\Support\Facades\Request::path(), '/'), 301); // Change to 302 in case of temporarily
    })->where('all', '.*');
});

Route::get('/', ['as' => 'index', 'uses' => 'IndexController@getIndex']);
Route::get('article/image/{datePath}/{fileName}', ['as' => 'article.image.upload.get', 'uses' => 'ArticleController@getImage']);//article image
Route::resource('article', 'ArticleController', ['only' => ['show']]);//article

Route::get('topic', ['as' => 'topic.index', 'uses' => 'ArticleController@getTopicIndex']);

Route::get('topic/{id}', ['as' => 'topic.show', 'uses' => 'ArticleController@show']);

//login to access
Route::group(['middleware' => ['auth']], function () {
    //article image upload
    Route::post('admin/article/image/upload', ['as' => 'admin.article.image.upload.post', 'uses' => 'Admin\ArticleController@postImage']);//article image

    Route::resource('admin/article', 'Admin\ArticleController', ['only' => ['index', 'create', 'store', 'edit', 'update']]);//article

    Route::get('admin', ['as' => 'admin.index', 'uses' => 'Admin\IndexController@getIndex']); //admin index
});

//auth
Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);

if (ENV('APP_DEBUG')) {
    Route::any('test', 'TestController@test');
}