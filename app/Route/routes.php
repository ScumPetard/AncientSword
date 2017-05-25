<?php


Route::group(['namespace' => 'Home'], function () {
    Route::get('/','IndexController@index');
    Route::get('/about/about','AboutController@about');
    Route::get('/about/honor','AboutController@honor');
    Route::get('/about/news','AboutController@news');
    Route::get('/product','ProductController@index');
    Route::get('/about/sales','AboutController@sales');
    Route::get('/research/base','ResearchController@base');
    Route::get('/research/culture','ResearchController@culture');
    Route::get('/interactive/video','InteractiveController@video');
    Route::get('/interactive/work','InteractiveController@work');
    Route::get('/interactive/contact','InteractiveController@contact');
});

