# **ROUTES**

> Create Routes For The API in `routes\api.php`

```php


\Illuminate\Support\Facades\Route::resource('buyers','Buyer\BuyerController',['only'=>['index','show']]);

/**
 * Sellers
 */

\Illuminate\Support\Facades\Route::resource('sellers','Seller\SellerController',['only'=>['index','show']]);

/**
 * product
 */

\Illuminate\Support\Facades\Route::resource('product','Product\ProductController',['only'=>['index','show']]);

/**
 * Category
 */

\Illuminate\Support\Facades\Route::resource('category','Category\CategoryController',['except'=>['create','edit']]);

/**
 * Transaction
 */

\Illuminate\Support\Facades\Route::resource('buyers','Buyer\BuyerController',['only'=>['index','show']]);

/**
 * User
 */

\Illuminate\Support\Facades\Route::resource('users','User\UserController',['except'=>['create','edit']]);



\Illuminate\Support\Facades\Route::resource('test','test',['except'=>['create','edit']]);


```

---

> Route List

```bash
wchamara@DESKTOP-44CNAP9 MINGW64 /c/xampp/htdocs/rest api/restapi (master)
$ php artisan  route:list
+--------+-----------+---------------------+------------------+----------------------------------------------------------+------------+
| Domain | Method    | URI                 | Name             | Action                                                   | Middleware |
+--------+-----------+---------------------+------------------+----------------------------------------------------------+------------+
|        | GET|HEAD  | /                   |                  | Closure                                                  | web        |
|        | GET|HEAD  | buyers              | buyers.index     | App\Http\Controllers\Buyer\BuyerController@index         | api        |
|        | GET|HEAD  | buyers/{buyer}      | buyers.show      | App\Http\Controllers\Buyer\BuyerController@show          | api        |
|        | GET|HEAD  | category            | category.index   | App\Http\Controllers\Category\CategoryController@index   | api        |
|        | POST      | category            | category.store   | App\Http\Controllers\Category\CategoryController@store   | api        |
|        | GET|HEAD  | category/{category} | category.show    | App\Http\Controllers\Category\CategoryController@show    | api        |
|        | PUT|PATCH | category/{category} | category.update  | App\Http\Controllers\Category\CategoryController@update  | api        |
|        | DELETE    | category/{category} | category.destroy | App\Http\Controllers\Category\CategoryController@destroy | api        |
|        | GET|HEAD  | product             | product.index    | App\Http\Controllers\Product\ProductController@index     | api        |
|        | GET|HEAD  | product/{product}   | product.show     | App\Http\Controllers\Product\ProductController@show      | api        |
|        | GET|HEAD  | sellers             | sellers.index    | App\Http\Controllers\Seller\SellerController@index       | api        |
|        | GET|HEAD  | sellers/{seller}    | sellers.show     | App\Http\Controllers\Seller\SellerController@show        | api        |
|        | POST      | test                | test.store       | App\Http\Controllers\test@store                          | api        |
|        | GET|HEAD  | test                | test.index       | App\Http\Controllers\test@index                          | api        |
|        | DELETE    | test/{test}         | test.destroy     | App\Http\Controllers\test@destroy                        | api        |
|        | PUT|PATCH | test/{test}         | test.update      | App\Http\Controllers\test@update                         | api        |
|        | GET|HEAD  | test/{test}         | test.show        | App\Http\Controllers\test@show                           | api        |
|        | POST      | users               | users.store      | App\Http\Controllers\User\UserController@store           | api        |
|        | GET|HEAD  | users               | users.index      | App\Http\Controllers\User\UserController@index           | api        |
|        | DELETE    | users/{user}        | users.destroy    | App\Http\Controllers\User\UserController@destroy         | api        |
|        | PUT|PATCH | users/{user}        | users.update     | App\Http\Controllers\User\UserController@update          | api        |
|        | GET|HEAD  | users/{user}        | users.show       | App\Http\Controllers\User\UserController@show            | api        |
+--------+-----------+---------------------+------------------+----------------------------------------------------------+------------+
```
