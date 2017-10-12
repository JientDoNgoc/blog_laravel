<?php

Route::get('/', function () {
    return view('blog.index');
})->name('blog.index');

Route::get('post/{id}', function () {
    return view('blog.post');
})->name('blog.post');

Route::get('about', function () {
    return view('other.about');
})->name('other.about');

Route::group(['prefix' => 'admin'], function() {
	
	Route::get('', function () {
	    return view('admin.index');
	})->name('admin.index');

	Route::get('admin/create', function () {
	    return view('admin.create');
	})->name('admin.create');

	Route::post('admin/create', function () {
	    return "It works!!!";
	})->name('admin.create');

	Route::get('admin/edit/{id}', function () {
	    return view('admin.edit');
	})->name('admin.edit');

	Route::post('admin/update', function () {
	    return "It works!!!";
	})->name('admin.update');
});