<?php

use Illuminate\Http\Request;

// Route::get('BotYoVip', 'MessengerController@receive')->middleware("verifyAccessTokenFacebookBot");
// Route::post('BotYoVip', 'MessengerController@receive');


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
