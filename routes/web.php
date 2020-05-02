<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('bosh_panel/welcome');
});

Route::get('/reg', function () {
    return view('auth\register');
});
Route::get('/reg_bemor', function () {
    return view('auth\register');
})->name('reg_bemor');
Route::get('/kassa', function () {
    return view('auth\register');
})->name('kassa');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['status','auth']], function () {

    $groupData=
        [
           'namespace' => 'Blog\Admin',
            'prefix' => 'admin',
        ];
    Route::group($groupData, function () {

        Route::resource('index','MainController')->names('Blog.Admin.admin');
        Route::resource('register','MainController')->names('Blog.Admin.admin');

});

});

