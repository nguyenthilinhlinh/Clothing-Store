<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\Auth\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Feedback;
use App\Models\User;
use App\Models\VisitorCount;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

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
    
    Route::group([],function(){
        Route::get('/', [HomeController::class,'index']);
        Route::get('/index', [HomeController::class,'index']);
        Route::get('gallery/{cname}',[HomeController::class,'getProductByCategoryId']);
        Route::get('/about', [HomeController::class,'aboutus']);
        Route::get('/contact', [HomeController::class,'contactus']);
        Route::get('/signin', [HomeController::class,'signin'])->name('signin.customer');
        Route::get('/signup',[HomeController::class,'signup'])->name('signup.customer');
        Route::get('/signups',[HomeController::class,'signupnew']);
        Route::post('/logout',[HomeController::class,'logout'])->name('logout.customer');
        Route::get('/company', [HomeController::class,'company']);
        Route::get('/sitemap', [HomeController::class,'sitemap']);
        Route::get('/feedback', [HomeController::class,'feedback']);
        Route::get('/blog', [HomeController::class,'blog']);
        Route::get('/blogdetail', [HomeController::class,'blogdetail']);
        Route::put('/feedbackcustomer', [HomeController::class,'feedbackcustomer']);
        Route::put('/contactform', [HomeController::class,'contactform']);
        Route::get('/details/{id}', [HomeController::class,'detailsGallery']);
        Route::get('/main/gallery', [HomeController::class, 'gallery']);

Route::group([], function () {
    Route::get('', [HomeController::class, 'index']);
    Route::get('/index', [HomeController::class, 'index']);
    Route::get('gallery/{cname}', [HomeController::class, 'getProductByCategoryId']);
    Route::get('/about', [HomeController::class, 'aboutus']);
    Route::get('/contact', [HomeController::class, 'contactus']);
    Route::get('/signin', [HomeController::class, 'signin'])->name('signin.customer');
    Route::get('/signup', [HomeController::class, 'signup'])->name('signup.customer');
    Route::post('/logout', [HomeController::class, 'logout'])->name('logout.customer');
    Route::get('/company', [HomeController::class, 'company']);
    Route::get('/sitemap', [HomeController::class, 'sitemap']);
    Route::get('/feedback', [HomeController::class, 'feedback']);
    Route::get('/blog', [HomeController::class, 'blog']);
    Route::get('/blogdetail', [HomeController::class, 'blogdetail']);
    Route::put('/feedbackcustomer', [HomeController::class, 'feedbackcustomer']);
    Route::put('/contactform', [HomeController::class, 'contactform']);
    Route::get('/details/{id}', [HomeController::class, 'detailsGallery']);
    Route::get('/', [HomeController::class, 'index']);
    Route::get('/search', [CategoryController::class, 'search'])->name('search');
    
});




/*------------------------------------------

--------------------------------------------

All Normal Users Routes List

--------------------------------------------

--------------------------------------------*/
Route::group([], function () {
    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/home', [HomeController::class, 'index'])->name('home');
    Route::middleware(['auth', 'user-access:user'])->group(function () {        
    });
});

    /*------------------------------------------

--------------------------------------------

All Admin Routes List

--------------------------------------------

--------------------------------------------*/

    Route::group(['prefix' => 'admin'], function () {
        Auth::routes();
        Route::get('signin', function () {
            if (Auth::check()) {
                return redirect('home');
            }
            return view('admin/login');
        })->name('admin.signin');
        //Route::get('signin', function(){return view('admin/login');})->name('admin.signin');
        Route::middleware(['auth', 'user-access:admin'])->group(function () {
            Route::get('dashboard', [AdminController::class, 'adminHome'])->name('admin.dashboard');
            Route::get('product', [AdminController::class, 'showProduct'])->name('admin.product');
            Route::get('category', [AdminController::class, 'showCategory'])->name('admin.category');

            //////ACCOUNT MANAGE//////    
            Route::get('signup', [AdminController::class, 'signupAdmin'])->name('admin.signup');
            Route::post('createAccount', [AdminController::class, 'createAdminAccount'])->name('createAccount');
            Route::get('/accounts', [AdminController::class, 'showAccountList'])->name('accounts');

            //////PRODUCT MANAGE//////
            Route::post('createProduct', [ProductController::class, 'createProduct'])->name('createProduct');
            Route::post('updateProduct', [ProductController::class, 'updateProduct'])->name('updateProduct');
            Route::post('updateImage', [ProductController::class, 'updateImage'])->name('updateImage');
            Route::post('deleteImage/{imgid}', [ProductController::class, 'deleteImage'])->name('deleteImage');
            Route::get('deleteProduct/{id}', [ProductController::class, 'deleteProduct'])->name('deleteProduct');

            //////CATEGORY MANAGE//////
            Route::post('createCategory', [CategoryController::class, 'createCategory'])->name('createCategory');
            Route::post('updateCategory', [CategoryController::class, 'updateCategory'])->name('updateCategory');
            Route::get('deleteCategory/{id}', [CategoryController::class, 'deleteCategory'])->name('deleteCategory');
            Route::get('selectedCat/{id}', function ($id) {
                $selected = [
                    Category::where('id', '=', $id)->get()
                ];
                return response()->json($selected);
            })->name('selected');
        });
        ///////////////CONTACT//////////
        Route::get('/contact', [AdminController::class, 'contact']);
        Route::get('/updateContact', [AdminController::class, 'updateContact'])->name('updateContact');
        Route::get('/feedback', [AdminController::class, 'demofeedback']);
        Route::post('/deletect', [AdminController::class, 'deletect']);

        ////// AJAX'S REQUEST ///////
        Route::get('selected/{id}', function ($id) {
            $selected = [
                Product::where('id', '=', $id)->get(),
                DB::table('category')->crossJoin('product')->select('category_id')->where('category.id', '=', DB::raw('product.category_id'))->where('product.id', '=', $id)->get(),
                DB::table('image_gallery')->where('product_id', '=', $id)->where('status','!=',0)->get(),
            ];
            return response()->json($selected);
        });
        Route::get('prd', function () {
            $prd = [
                Product::select(DB::raw('id, product_name, category_id, price, quantity, status, created_date, updated_date'))->get(),
            ];
            return response()->json($prd);
        });
        Route::get('cat', function () {
            $cat = [
                Category::select(DB::raw('id, category_name, status, created_date'))->get(),
            ];
            return response()->json($cat);
        });
        Route::get('fb', function () {
            $fb = [
                Feedback::get(),
            ];
            return response()->json($fb);
        });
        Route::get('cont', function () {
            $ct = [
                Contact::get(),
            ];
            return response()->json($ct);
        });
        Route::get('selectedfb/{id}', function ($id) {
            $selected = [
                Feedback::find($id)->get(),
            ];
            return response()->json($selected);
        });
        Route::get('selectedct/{id}', function ($id) {
            $ct = [
                Contact::find($id)->get(),
            ];
            return response()->json($ct);
        });
        Route::get('getvisitregis', function () {
            // Get the start of the current week
            $startOfWeek = Carbon::now()->subDays(6);
            // Get the end of the current week
            $endOfWeek = Carbon::now();

            // Generate an array of dates for each day in the week
            $dates = [];
            for ($date = $startOfWeek; $date->lte($endOfWeek); $date->addDay()) {
                $dates[] = $date->toDateString();
            }

            // Query your database for data that matches each date in the array
            foreach ($dates as $date) {
                $visitdata[] = VisitorCount::whereDate('created_at', $date)->count();
                $regisdata[] = User::where('type','=',0)->whereDate('created_at', $date)->count();
                              
            }
            $data[] = $visitdata;
            $data[] = $regisdata;  
            return response()->json($data);
        });
    });
});
