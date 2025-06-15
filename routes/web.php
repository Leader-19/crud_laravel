<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\DemoController;
use App\Http\Controllers\CategoryController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});

Route::get('/article', function () {
    return view('article');
});

Route::get('/blog', function () {
    return view('blog');
});


/**
 * 
 * This is tage route. It show tage page when you access to it.
 * 
 */

// Route::get("/tage", function() {
//     return ("This is tage page");
// });

Route::get("/tage", [DemoController::class, 'tage']);


/**
 * This is category route. It show category page when you access to this route.
 */


// Route::get("/category", function() {
//     return ("This is category page");
// });

Route::get("/category", [DemoController::class, 'category']);

/**
 * This is blog route. It show blog page when you access to this route.
 */

// Route::get("/blog", function() {
//     return ("This is blog page");
// });

Route::get("/blog", [DemoController::class, 'blog']);



Route::get("/admin/category", [CategoryController::class, 'index'])->name("admin.category.index");
Route::get("/admin/category/create", [CategoryController::class, 'createTemplate']);
Route::post("/admin/category/store", [CategoryController::class, 'store']);
Route::get("/admin/category/{id} ", [CategoryController::class, 'edit'])->name('admin.category.edit');
Route::put("/admin/category/{id} ", [CategoryController::class, 'update'])->name('admin.category.update');
Route::delete("/admin/category/{id} ", [CategoryController::class, 'destroy'])->name('admin.category.destroy');