<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::namespace('Web')->group(function () {
    Route::get('/', 'SiteController@index')->name('index');

    Route::prefix('/tasks')->group(function () {

        Route::get(
            '/',
            'TaskController@index'
        )->name('tasks.index');


        Route::get(
            '/add',
            'TaskController@add'
        )->name('tasks.add');


        Route::post(
            '/store',
            'TaskController@store'
        )->name('tasks.store');


        Route::get(
            '/{task}',
            'TaskController@show'
        )->name('tasks.show');

        Route::get(
            '/{task}/edit',
            'TaskController@edit'
        )->name('tasks.edit');

        Route::put(
            '/{task}',
            'TaskController@update'
        )->name('tasks.update');


        Route::delete(
            '/{task}',
            'TaskController@delete'
        )->name('tasks.delete');
    });
});
