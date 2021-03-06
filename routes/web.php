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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/gate_test/instruction', ['as' => 'gate_instruction' , function () {
    return view('gateTest.instruction');
}]);

Route::get('auth/{provider}', 'Auth\SocialiteController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\SocialiteController@handleProviderCallback');

Route::post('auth/socialite', 'Auth\SocialiteController@numberRegister')->name('socialite');

Route::middleware('auth')->group(function () {
    Route::post('authentication/change_password', 'Auth\ChangePassword@changePassword')->name('change_password');
    Route::get('authentication/change_password', function () {
        return view('auth.passwords.change_password');
    })->name('get_change_password');
});
