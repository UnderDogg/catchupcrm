<?php

Route::group(['middleware' => 'web', 'prefix' => '', 'namespace' => 'Modules\Core\Http\Controllers'], function()
{
    Route::get('/', 'FrontendController@index');
});
