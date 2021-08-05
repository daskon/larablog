<?php
Route::get('/', function () {
    return view('welcome');
})->name('dashboard');

//user route
Route::group(['middleware' => ['permission:manage_user'], 'prefix' => 'user', 'as' => 'user.'], function () {
    Route::get('/', User\Index::class)->name('index');
});

//manage role route
Route::group(['middleware' => ['permission:manage_role'], 'prefix' => 'role', 'as' => 'role.'], function () {
    Route::get('/', Role\Index::class)->name('index');
});

//add new post route
Route::group(['middleware' => ['permission:manage_post'], 'prefix' => 'post', 'as' => 'blog.'], function () {
    Route::get('/', Blog\Index::class)->name('index');
});

Route::group(['middleware' => ['permission:manage_permission'], 'prefix' => 'permission', 'as' => 'permission.'], function () {
    Route::get('/', Permission\Index::class)->name('index');
});