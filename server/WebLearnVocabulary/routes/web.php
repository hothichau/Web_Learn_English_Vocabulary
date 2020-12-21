<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('admin.dashboard');
});
//-----------------------------Topic--------------------------------//
Route::get('/admin/topic/create', 'Admin\TopicController@createTopic');
Route::get('/admin/topics', 'Admin\TopicController@index')->name('admin.topics.index');
Route::post('/admin/topics','Admin\TopicController@storeTopic');
Route::get('/admin/topic/{id}/edit','Admin\TopicController@editTopic');
Route::patch('/admin/topic/{id}','Admin\TopicController@updateTopic');
Route::delete('/admin/topic/{id}','Admin\TopicController@destroyTopic');

//------------------------------Admin/Users--------------------------//
Route::get('/admin/users','Admin\UserController@index')->name('admin.users.index'); 
Route::delete('/admin/user/{id}','AdminUserController@destroyUser');
Route::get('/admin/comments','Admin\UserController@showComments')->name('admin.comments.index'); 

//-----------------------------Vocabulary--------------------------------//
Route::get('/admin/vocabulary/create', 'Admin\VocabularyController@createVocabulary');
Route::get('/admin/vocabularies', 'Admin\VocabularyController@index')->name('admin.vocabularies.index');
Route::post('/admin/vocabularies','Admin\VocabularyController@storeVocabulary');
Route::get('/admin/vocabulary/{id}/edit','Admin\VocabularyController@editVocabulary');
Route::patch('/admin/vocabulary/{id}','Admin\VocabularyController@updateVocabulary');
Route::delete('/admin/vocabulary/{id}','Admin\VocabularyController@destroyVocabulary');


//---------------------//
Route::get('/admin/dashboard','Admin\DashboardController@index');