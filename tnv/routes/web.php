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
Route::get('/', 'WelcomeController@index')->name('home');
/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();

Route::get('/home', 'WelcomeController@index')->name('home');
Route::get('/getCriteres/{id}', 'CritereController@getCriteres');

/* Post routes */
Route::get('/posts',  'PostController@index');
Route::get('/getPosts',  'PostController@getPosts');
Route::post('/addPost',  'PostController@addPost');
Route::post('/addQuestion',  'PostController@addQuestion');
Route::put('/updatePost',  'PostController@updatePost');
Route::delete('/deletePost/{id}',  'PostController@deletePost');
/* Post routes */

/*Profile routes*/
Route::get('/settings',  'SettingController@index');
Route::get('/activities',  'ActivityController@index');
Route::get('/hobbies',  'HobbyController@index');
Route::get('/notifications',  'NotificationController@index');
Route::get('/profile',  'ProfileController@index');
Route::get('/reset',  'ResetController@index');
/*Profile routes*/


/* personnal info routes */
Route::get('/getProfile',  'ProfileController@getProfile');
Route::put('/updateProfile',  'ProfileController@updateProfile');
/* personna info routes */

/*Reset password*/
Route::post('/changePassword',  'ResetController@changePassword');

/*Reset password*/

/*Likes password*/
Route::post('/Like',  'LikeController@Like');
Route::post('/LikeComment',  'LikeController@LikeComment');

/*Likes password*/



/*Likes password*/
Route::post('/addComment',  'CommentController@addComment');

/*Likes password*/


/*Likes password*/
Route::get('/details/{id}',  'DetailController@index');
Route::get('/getPost/{id}',  'DetailController@getPost');

/*Likes password*/
