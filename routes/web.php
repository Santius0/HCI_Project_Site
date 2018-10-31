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
Route::get('/', 'HomeController@index')->name('home');

Route::get('/home', function (){
    return redirect('/');
});

// Authentication
Route::namespace('Auth')->group(function () {
    // Sessions
    Route::get('login', 'LoginController@showLoginForm')->name('login');
    Route::post('login', 'LoginController@login')->name('login.post');
    Route::get('logout', 'LoginController@logout')->name('logout');

    // Registration
    Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
    Route::get('register-non-github', 'RegisterController@showRegistrationFormNoSocial')->name('register.no-github');
    Route::post('register', 'RegisterController@register')->name('register.post');

//    // Password reset
    Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.forgot');
    Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.forgot.post');
    Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'ResetPasswordController@reset')->name('password.reset.post');
//
//    // Email address confirmation
//    Route::get('email-confirmation', 'EmailConfirmationController@send')->name('email.send_confirmation');
//    Route::get('email-confirmation/{email_address}/{code}', 'EmailConfirmationController@confirm')
//        ->name('email.confirm');
//
//    // Social authentication
    Route::get('login/github', 'GithubController@redirectToProvider')->name('login.github');
    Route::get('auth/github', 'GithubController@handleProviderCallback');
});

Route::prefix('/updates')->namespace('Updates')->group(function (){
    Route::get('/', 'ThreadsController@index')->name('threads');
    Route::get('/thread/{id}', 'ThreadsController@show')->name('thread.show');

    Route::get('/create', 'ThreadsController@create')->name('thread.create');
    Route::post('/create', 'ThreadsController@store')->name('thread.store');

    Route::get('/edit/{id}', 'ThreadsController@edit')->name('thread.edit');
    Route::put('/edit/{id}', 'ThreadsController@update')->name('thread.update');

    Route::delete('/delete/{id}', 'ThreadsController@destroy')->name('thread.destroy');

    Route::get('/tag/{id}', 'ThreadsController@index')->name('threads.tag');

    Route::post('/comments', 'CommentsController@store')->name('comment.store');
    Route::get('/comments/edit/{id}', 'CommentsController@edit')->name('comment.edit');
    Route::put('/comments/edit/{id}', 'CommentsController@update')->name('comment.update');
    Route::delete('/comments/{id}', 'CommentsController@destroy')->name('comment.delete');
});

Route::prefix('/team')->namespace('Team')->group(function (){
   Route::get('/', 'TeamController@index')->name('team');
   Route::get('/{name}', 'TeamController@show')->name('team.show');
});

Route::prefix('/subjects')->namespace('Subjects')->group(function (){
   Route::get('/', 'SubjectsController@index')->name('subjects');
   Route::get('/{name}', 'SubjectsController@show')->name('subjects.show');
});

Route::prefix('/profile')->namespace('Profile')->group(function (){
   Route::get('/', 'ProfileController@index')->name('profile');
    Route::get('dashboard', 'DashboardController@show')->name('dashboard');
    Route::get('avatar/{username}', 'ProfileController@avatar')->name('avatar');
});

