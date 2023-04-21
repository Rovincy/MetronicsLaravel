<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group( ['middleware' => 'auth' ], function()
{
    // Route::get('admin/index', 'AdminController@index');
    // Route::get('admin/ajuda', 'AdminController@ajuda');
    Route::get('/icons/svg', 'PagesController@svg');
    Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
    Route::get('/', 'PagesController@index');
});
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::get('/icons/svg', 'PagesController@svg');

// Route::group(['middleware' => 'auth:sanctum'], function(){
// });
//All secure URL's



// // Demo routes
// Route::get('/datatables', 'PagesController@datatables');
// Route::get('/ktdatatables', 'PagesController@ktDatatables');
// Route::get('/select2', 'PagesController@select2');
// Route::get('/jquerymask', 'PagesController@jQueryMask');
// Route::get('/icons/custom-icons', 'PagesController@customIcons');
// Route::get('/icons/flaticon', 'PagesController@flaticon');
// Route::get('/icons/fontawesome', 'PagesController@fontawesome');
// Route::get('/icons/lineawesome', 'PagesController@lineawesome');
// Route::get('/icons/socicons', 'PagesController@socicons');

// // Quick search dummy route to display html elements in search dropdown (header search)

// // Route::get("/login",[UserController::class,'index']);
Route::get('/login', function () {
    return view('login');
})->name('login');

Route::post('/login', [LoginController::class, 'authenticate']);
// Route::get('/', function () {
//     // //     // ...
//     // Route::get('/', 'PagesController@index');
//     // Route::get('/quick-search', 'PagesController@quickSearch')->name('quick-search');
// })->middleware("auth");



