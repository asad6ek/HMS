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

        Route::resource('index','MainController')->names('admin.index');
        Route::resource('register','UserRegController')->names('admin.user');

});

});

Route::group(['middleware' => ['status_user','auth']], function () {

    $groupData=
        [
            'namespace' => 'Blog\User',
        ];
    Route::group($groupData, function () {
        Route::resource('/home','HomeController')->names('home');
        Route::resource('/patient','PatientController')->names('patient');


        Route::get('/kassa', function () {
            return view('Blog.User.kassa');
        })->name('kassa');

   Route::get('/harj', function () {
            return view('blog.user.harj');
        })->name('harj');

   Route::get('/servis', function () {
            return view('Blog.User.servis');
        })->name('servis');


//
    });

});
Route::get('user/index','Blog\User\MainController@index');
