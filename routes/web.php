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

//    // Social authentication
    Route::get('login/github', 'GithubController@redirectToProvider')->name('login.github');
    Route::get('auth/github', 'GithubController@handleProviderCallb ack');
    Route::get('register/username/change', 'GithubController@usernameChaange')->name('register.username.post');
});

Route::prefix('/updates')->namespace('Updates')->group(function (){
    Route::get('/', 'ThreadsController@index')->name('threads');
    Route::get('/thread/{id}', 'ThreadsController@show')->name('thread.show');

    Route::get('/create', 'ThreadsController@create')->name('thread.create');
    Route::post('/create', 'ThreadsController@store')->name('thread.store');

    Route::post('/create-feedback', 'ThreadsController@store_feedback')->name('thread.store_feedback');

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

Route::prefix('/proposal')->namespace('Content')->group(function(){
    Route::get('/', 'ContentController@index')->name('proposal');
    Route::get('/definition', 'ContentController@definition')->name('proposal.definition');
    Route::get('/concept', 'ContentController@concept')->name('proposal.concept');
    Route::get('/research', 'ContentController@research')->name('proposal.research');
    Route::get('/stakeholders', 'ContentController@users')->name('proposal.users');
});

Route::prefix('/research')->namespace('Content')->group(function(){
    Route::get('/', 'ContentController@research')->name('research');
    Route::get('/methods', 'ContentController@research_methods')->name('research.methods');
    Route::get('/results', 'ContentController@research_results')->name('research.results');
});

Route::prefix('/prototype')->namespace('Content')->group(function(){
    Route::get('/', 'ContentController@prototype')->name('prototype');
    Route::get('/timeline', 'ContentController@prototype_timeline')->name('prototype.timeline');
    Route::get('/user-testing', 'ContentController@user_testing')->name('prototype.testing');
    Route::get('/storyboard', 'ContentController@storyboard')->name('prototype.storyboard');
    Route::get('/sketches', 'ContentController@sketches')->name('prototype.sketches');
});

Route::prefix('/people')->namespace('Content')->group(function(){
    Route::get('/development-teams', 'ContentController@development_team')->name('people.devs');
    Route::get('/test-users', 'ContentController@test_users')->name('people.users');
});

Route::prefix('/hifi')->namespace('Content')->group(function(){
    Route::get('/prototype', 'ContentController@hifi')->name('hifi.demo');
    Route::get('/heuristic-evaluation', 'ContentController@heuristic_eval')->name('hifi.eval');
});

Route::prefix('/app-files')->namespace('Content')->group(function(){
    Route::get('/', 'ContentController@files')->name('files');
});

Route::prefix('/brainstorming')->namespace('Content')->group(function(){
    Route::get('/', 'ContentController@brainstorming')->name('brainstorming');
});
