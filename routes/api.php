<?php

use Illuminate\Http\Request;

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

/**
 * Buyers
 */

\Illuminate\Support\Facades\Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);

/**
 * Sellers
 */

\Illuminate\Support\Facades\Route::resource('sellers', 'Seller\SellerController', ['only' => ['index', 'show']]);

/**
 * product
 */

\Illuminate\Support\Facades\Route::resource('product', 'Product\ProductController', ['only' => ['index', 'show']]);

/**
 * Category
 */

\Illuminate\Support\Facades\Route::resource('category', 'Category\CategoryController', ['except' => ['create', 'edit']]);

/**
 * Transaction
 */

\Illuminate\Support\Facades\Route::resource('buyers', 'Buyer\BuyerController', ['only' => ['index', 'show']]);

/**
 * User
 */

\Illuminate\Support\Facades\Route::resource('users', 'User\UserController', ['except' => ['create', 'edit']]);



\Illuminate\Support\Facades\Route::resource('test', 'test', ['except' => ['create', 'edit']]);
