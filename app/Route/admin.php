<?php


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {

    Route::post('/api/upload','IndexController@upload');
    /** 登录 */
    Route::any('/', 'IndexController@login')->name('admin.login');

    /** 登出 */
    Route::get('/logout', 'IndexController@logout')->name('admin.logout');

    Route::group(['middleware' => 'must.admin'], function () {

        /** 首页 */
        Route::get('/index','IndexController@index')->name('admin.index');


        /* --------------- 管理员管理 --------------- */

        /* 管理员管理 */
        Route::get('/admin','AdminController@index')->name('admin.admin.index');

        /** 添加管理员 */
        Route::post('/admin/create','AdminController@create')->name('admin.admin.create');

        /* 编辑管理员 */
        Route::post('/admin/edit/{id}','AdminController@edit')->name('admin.admin.edit');

        /* 删除管理员 */
        Route::get('/admin/destroy/{id}','AdminController@destroy')->name('admin.admin.destroy');




        /* --------------- 权限管理 --------------- */

        /* 权限管理首页 */
        Route::get('/permission','PermissionController@index')->name('admin.permission.index');

        /* 添加权限 */
        Route::post('/permission/create','PermissionController@create')->name('admin.permission.create');

        /* 编辑权限 */
        Route::post('/permission/edit/{id}','PermissionController@edit')->name('admin.permission.edit');

        /* 删除权限 */
        Route::get('/permission/destroy/{id}','PermissionController@destroy')->name('admin.permission.destroy');


        /* --------------- 轮播图管理 ------------- */

        /* 轮播图管理 */
        Route::get('/banner','BannerController@index')->name('admin.banner.index');

        /** 添加轮播图 */
        Route::post('/banner/create','BannerController@create')->name('admin.banner.create');

        /* 编辑轮播图 */
        Route::post('/banner/edit/{id}','BannerController@edit')->name('admin.banner.edit');

        /* 删除轮播图 */
        Route::get('/banner/destroy/{id}','BannerController@destroy')->name('admin.banner.destroy');

        /* --------------- 企业荣誉管理 ------------- */

        /* 企业荣誉管理 */
        Route::get('/honor','HonorController@index')->name('admin.honor.index');

        /** 添加企业荣誉 */
        Route::post('/honor/create','HonorController@create')->name('admin.honor.create');

        /* 编辑企业荣誉 */
        Route::post('/honor/edit/{id}','HonorController@edit')->name('admin.honor.edit');

        /* 删除企业荣誉 */
        Route::get('/honor/destroy/{id}','HonorController@destroy')->name('admin.honor.destroy');

        /* --------------- 新闻管理 ------------- */

        /* 新闻管理 */
        Route::get('/news','NewsController@index')->name('admin.news.index');

        /** 添加新闻 */
        Route::any('/news/create','NewsController@create')->name('admin.news.create');

        /* 编辑新闻 */
        Route::any('/news/edit/{id}','NewsController@edit')->name('admin.news.edit');

        /* 删除新闻 */
        Route::get('/news/destroy/{id}','NewsController@destroy')->name('admin.news.destroy');


        /* --------------- 产品管理 ------------- */

        /* 产品管理 */
        Route::get('/product','ProductController@index')->name('admin.product.index');

        /** 添加产品 */
        Route::post('/product/create','ProductController@create')->name('admin.product.create');

        /* 编辑产品 */
        Route::post('/product/edit/{id}','ProductController@edit')->name('admin.product.edit');

        /* 删除产品 */
        Route::get('/product/destroy/{id}','ProductController@destroy')->name('admin.product.destroy');

        /* --------------- 招聘信息管理 ------------- */

        /* 招聘信息管理 */
        Route::get('/work','WorkController@index')->name('admin.work.index');

        /** 添加招聘信息 */
        Route::post('/work/create','WorkController@create')->name('admin.work.create');

        /* 编辑招聘信息 */
        Route::post('/work/edit/{id}','WorkController@edit')->name('admin.work.edit');

        /* 删除招聘信息 */
        Route::get('/work/destroy/{id}','WorkController@destroy')->name('admin.work.destroy');
    });

});

