<?php

use App\Http\Controllers\Categories\CategoryController;
use App\Http\Controllers\Categories\MainCategoryController;
use App\Http\Controllers\Dashboard\DashboardController;
use App\Http\Controllers\Offer\OfferController;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Profiles\ProfileAdminController;
use App\Models\MainCategory;
use Illuminate\Support\Facades\Route;

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


Route::prefix('admin')->name('admin.')->group(function () {

    Route::middleware('AuthAdmin')->group(function () {

        Route::prefix('dashboard')->group(function () {

            Route::get('/', function () {
                $paginator = MainCategory::paginate(5);
                return view('Admin.Categories.MainCategory.main-category', compact('paginator'));
            })->name('dashboard');


            //OFFER
            Route::get('calendar', [OfferController::class, 'showCalendar'])->name('calendar');
            Route::get('add/sub-offer', [OfferController::class, 'createForSubCategory'])->name('create-offer-sub');
            Route::resource('/offer', OfferController::class);

            //Dashboard
            Route::get('Analytics-dashboard', [DashboardController::class, 'Analytics'])->name('Analytics');
            Route::get('crm-dashboard', [DashboardController::class, 'CRM'])->name('crm');
            Route::get('eCommerce-dashboard', [DashboardController::class, 'eCommerce'])->name('eCommerce');

            //MAIN CATEGORY
            Route::get('verify-delete/{userId}/{categoryId}/{token}', [MainCategoryController::class, 'verifyDelete']);
            Route::get('main-category/search', [MainCategoryController::class, 'SearchHandle'])->name('searchMainCategory');
            Route::get('updateActive/main-category/{id}', [MainCategoryController::class, 'UpdateActive'])->name('MainupdateActive');
            Route::resource('main-category', MainCategoryController::class);

            //SUB CATEGORY
            Route::get('verify-delete/sub/{userId}/{categoryId}/{token}', [CategoryController::class, 'verifyDelete']);
            Route::get('sub-category/search', [CategoryController::class, 'SearchHandle'])->name('searchSubCategory');
            Route::get('updateActive/sub-category/{id}', [CategoryController::class, 'UpdateActive'])->name('SubupdateActive');
            Route::resource('sub-category', CategoryController::class);


            //Products
            Route::get('product/search', [ProductController::class, 'SearchHandle'])->name('searchProducts');
            Route::get('product/api-show/{id}', [ProductController::class, 'apiShow'])->name('apiShowProduct');
            Route::resource('product', ProductController::class);
        });


        Route::get('/profile', [ProfileAdminController::class, 'edit'])->name('profile.edit');
        Route::patch('/profile', [ProfileAdminController::class, 'update'])->name('profile.update');
        Route::delete('/profile', [ProfileAdminController::class, 'destroy'])->name('profile.destroy');
    });
    require __DIR__ . '/auth-admin.php';
});