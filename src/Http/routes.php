<?php

Route::group(['middleware' => ['web']], function () {
    Route::get('category/{slug?}', 'XTRO123\Productso\Http\Controllers\PrsoCategoryController@show');
});


