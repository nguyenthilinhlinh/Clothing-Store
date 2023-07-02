<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Auth\Request;


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
    
// Route::group([],function(){
//     Route::get('/', [HomeController::class,'index']);
//     Route::get('/index', [HomeController::class,'index']);
//     Route::get('/about', [HomeController::class,'aboutus']);
//     Route::get('/contact', [HomeController::class,'contactus']);
//     Route::get('/company', [HomeController::class,'company']);
//     Route::get('/team', [HomeController::class,'team']);
//     // women
//     Route::get('/women', [HomeController::class,'women']);
//     Route::get('/shirts', [HomeController::class,'shirts']);
//     Route::get('/skirts', [HomeController::class,'skirts']);
//     Route::get('/frocks', [HomeController::class,'frocks']);
//     Route::get('/t_shirts', [HomeController::class,'t_shirts']);
//     Route::get('/pt_shorts', [HomeController::class,'pt_shorts']);
//     Route::get('/track_pants', [HomeController::class,'track_pants']);
//     Route::get('/belts', [HomeController::class,'belts']); 
//     Route::get('/ties', [HomeController::class,'ties']); 
//     Route::get('/logos', [HomeController::class,'logos']); 
//     Route::get('/socks', [HomeController::class,'socks']);
//     Route::get('/ptshorts', [HomeController::class,'ptshorts']);
//     // men
//     Route::get('/men', [HomeController::class,'men']);
//     Route::get('/shirts_men', [HomeController::class,'shirts_men']);
//     Route::get('/t_shirts_men', [HomeController::class,'t_shirts_men']);
//     Route::get('/track_pants_men', [HomeController::class,'track_pants_men']);
//     Route::get('/belts_men', [HomeController::class,'belts_men']); 
//     Route::get('/ties_men', [HomeController::class,'ties_men']); 
//     Route::get('/logos_men', [HomeController::class,'logos_men']); 
//     Route::get('/socks_men', [HomeController::class,'socks_men']);
//     Route::get('/pt_shorts_men', [HomeController::class,'pt_shorts_men']);

    
//     Route::group(['prefix' => 'admin'],function(){
//         Route::get('/dashboard', [AdminController::class,'index']);
//         Route::get('/login', [AdminController::class,'login']);
//         Route::get('/register', [AdminController::class,'register']);
//         Route::group(['prefix' => 'category'],function(){
//         Route::get('/', [CategoryController::class,'index']);
//         Route::get('/update/{id}', [CategoryController::class,'edit']);
//         Route::post('/save/{id}', [CategoryController::class,'update']);
//     });
//     });
// });
// Route::get('/', function () {
//     return view('main.index');
// });



Auth::routes();
/*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/
Route::get('admin/login', [AdminController::class,'login'])->name('admin.login');
Route::middleware(['auth', 'user-access:admin'])->group(function () {
    Route::get('admin/dashboard', [HomeController::class, 'adminHome'])->name('admin.dashboard');
    Route::get('/home', [HomeController::class, 'home'])->name('home');
    Route::get('/', [HomeController::class,'index']);
    Route::get('admin/login', [AdminController::class,'login']);

    Route::get('/about', [HomeController::class,'aboutus']);
    Route::get('/contact', [HomeController::class,'contactus']);
    Route::get('/company', [HomeController::class,'company']);
    Route::get('/team', [HomeController::class,'team']);
    // women
    Route::get('/women', [HomeController::class,'women']);
    Route::get('/shirts', [HomeController::class,'shirts']);
    Route::get('/skirts', [HomeController::class,'skirts']);
    Route::get('/frocks', [HomeController::class,'frocks']);
    Route::get('/t_shirts', [HomeController::class,'t_shirts']);
    Route::get('/pt_shorts', [HomeController::class,'pt_shorts']);
    Route::get('/track_pants', [HomeController::class,'track_pants']);
    Route::get('/belts', [HomeController::class,'belts']); 
    Route::get('/ties', [HomeController::class,'ties']); 
    Route::get('/logos', [HomeController::class,'logos']); 
    Route::get('/socks', [HomeController::class,'socks']);
    Route::get('/ptshorts', [HomeController::class,'ptshorts']);
    // men
    Route::get('/men', [HomeController::class,'men']);
    Route::get('/shirts_men', [HomeController::class,'shirts_men']);
    Route::get('/t_shirts_men', [HomeController::class,'t_shirts_men']);
    Route::get('/track_pants_men', [HomeController::class,'track_pants_men']);
    Route::get('/belts_men', [HomeController::class,'belts_men']); 
    Route::get('/ties_men', [HomeController::class,'ties_men']); 
    Route::get('/logos_men', [HomeController::class,'logos_men']); 
    Route::get('/socks_men', [HomeController::class,'socks_men']);
    Route::get('/pt_shorts_men', [HomeController::class,'pt_shorts_men']);


});

  
