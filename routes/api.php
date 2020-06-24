<?php

use Illuminate\Http\Request;

    /**
     * Buyers
     */

    Route::resource('buyers', 'Buyer\BuyerController',['only'=>['show','index']]);

    /**
     * Sellers
     */

    Route::resource('sellers', 'Seller\SellerController',['only'=>['show','index']]);
    /**
     * Categories
     */

    Route::resource('categories', 'Category\CategoryController',['except'=>['create','edit']]);
    /**
     * Transactions
    */
    
    Route::resource('tranasctions', 'Transaction\TransactionController',['only'=>['show','index']]);
    /**
     * Products
     */
        Route::resource('products', 'Product\ProductController',['only'=>['show','index']]);

    /**
     * Users
     */

    Route::resource('users', 'User\UserController',['except'=>['create','edit']]);