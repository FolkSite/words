<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the controller to call when that URI is requested.
  |
 */

Route::get('/', function () {
  return view('welcome');
});

// Provide controller methods with object instead of ID
Route::model('words', 'Word');
Route::model('polls', 'Poll');

Route::bind('words', function($value, $route) {
  return App\Word::findOrFail($value);
});
Route::bind('polls', function($value, $route) {
  return App\Poll::findOrFail($value);
});

Route::resource('polls', 'PollsController');
Route::resource('polls.words', 'WordsController');
