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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/HomePage', function () {
    return view("welcome");
});

Route::get('/Main', function () {
    return view("HomePage");
});


//designs
Route::get('/HomePageForDesigns', function () {
    return view("DesignPages.HomePageForDesigns");
});

Route::get('/Design1', function () {
    return view("DesignPages.Design1");
});

Route::get('/Design2', function () {
    return view("DesignPages.Design2");
});

Route::get('/Design3', function () {
    return view("DesignPages.Design3");
});

//designs full pages
Route::get('/Design4', function () {
    return view("DesignPages.Design4");
});

Route::get('/Design5', function () {
    return view("DesignPages.Design5");
});

Route::get('/Design6', function () {
    return view("DesignPages.Design6");
});

Route::get('/Design7', function () {
    return view("DesignPages.Design7");
});

Route::get('/Design8', function () {
    return view("DesignPages.Design8");
});

//functionality
Route::get('/HomePageForFunctionality', function () {
    return view("FunctionalityPages.HomePageForFunctionality");
});

//database without api

Route::get('/DatabaseFunctionality', "IdeasToImplementController@ShowData");

//API Page
Route::get('/APIUsagePage', function () {
    return view("FunctionalityPages.APIUsagePage");
});

Route::post('/AddIdeasToImplement', "IdeasToImplementController@AddIdea");

Route::delete('/DeleteIdea/{Idea}', "IdeasToImplementController@DeleteIdea");

Route::put('/UpdateIdea/{Idea}', "IdeasToImplementController@UpdateIdea");

//Tasks
Route::get('/TasksFunctionality', function () {
    return view("FunctionalityPages.TasksFunctionality");
});

Route::post('/UploadImage', "TasksController@showimage");

Route::get('/AjaxRequest', 'TasksController@AjaxRequest');

//here log in starts
Route::get('/LoginFunctionality', function () {
    return view("FunctionalityPages.LoginFunctionality");
});

//login

Route::get('/home', 'HomeController@index')->name('home');


Route::prefix('admin')->group(function () {
    Route::get('/login', 'Auth\AdminLoginController@ShowLoginForm')->name('Admin.Login.Show');;
    Route::post('/login', 'Auth\AdminLoginController@Login')->name('Admin.Login.Submit');;
    Route::get('/', 'AdminController@index')->name('Admin.Dashboard');

    //pass reset for admin
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('Admin.password.email');
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('Admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('Admin.password.reset');
});


//auto generated for authentication by laravel
Auth::routes();


// social logins

Route::get('auth/{provider}', 'Auth\LoginController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\LoginController@handleProviderCallback');

//Ideas
Route::get('/HomePageForIdeas', function () {
    return view("IdeasPages.HomePageForIdeas");
});

Route::get('/VueApp', function () {
    $datapassed = [
        ['Name' => 'World Of Warcraft', 'Genre' => 'Open World', 'Price' => '25'],
        ['Name' => 'Final Fantasy', 'Genre' => 'RPG', 'Price' => '20'],
        ['Name' => 'Dota 2', 'Genre' => 'Online', 'Price' => '15']
    ];
    return view("IdeasPages.VueApp")->with('datapassed',json_encode($datapassed));
});
