<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/topics',"Api\TopicController@index");
Route::get('/topics/new',"Api\TopicController@getTopicLimit");

Route::post('/login', "Api\LoginController@login");
Route::get('/profile',"Api\LoginController@getUserByID");

Route::post('/register',"Api\RegisterController@register");

Route::post('/user/comment',"Api\TopicController@comment");
Route::get('/comments/{id}',"Api\TopicController@getCommentByIDTopic");
Route::delete('/comments/{id}',"Api\TopicController@destroyComment");
Route::delete('/comment/{id}',"Api\TopicController@destroy");
//Route::delete('/comment/{id}',"Api\TopicController@destroy");

Route::get('/vocabularies',"Api\VocabularyController@getVocabulary");
Route::get('/vocabularies/new',"Api\VocabularyController@getVocabularyLimit");

Route::get('/vocabularies/{id}',"Api\VocabularyController@getVocabularyDetail");

Route::get('/topics/{id}',"Api\VocabularyController@getVocabularyByTopicID");

