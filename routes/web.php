<?php
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('bosh_panel/welcome');
});





Auth::routes();



Route::group(['middleware' => ['status_admin','auth']], function () {

    $groupData=
        [
           'namespace' => 'Blog\Admin',
            'prefix' => 'admin',
        ];
    Route::group($groupData, function () {

        Route::resource('index','MainController')->names('Blog.Admin.admin');
        Route::resource('register','UserRegController')->names('Blog.Admin.user_reg');

});

});

Route::group(['middleware' => ['status_user','auth']], function () {

    $groupData=
        [
            'namespace' => 'Blog\User',
        ];
    Route::group($groupData, function () {
        Route::resource('/home','PatientController')->names('home');

        Route::get('/reg_bemor', function () {
            return view('Blog.User.registratsiya');
        })->name('reg_bemor');

        Route::get('/kassa', function () {
            return view('Blog.User.kassa');
        })->name('kassa');

   Route::get('/harj', function () {
            return view('Blog.User.harj');
        })->name('harj');

   Route::get('/servis', function () {
            return view('Blog.User.servis');
        })->name('servis');


//        Route::resource('register','UserRegController')->names('Blog.Admin.user_reg');
    });

});
Route::get('user/index','Blog\User\MainController@index');
