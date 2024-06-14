<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\ProductController;


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

Route::view('/', 'index')->name('index');
Route::view('/about-us', 'about-us')->name('about-us');
Route::view('/blog-details', 'blog-details')->name('blog-details');
Route::view('/blog', 'blog')->name('blog');
Route::view('/cart', 'cart')->name('cart');
Route::view('/checkout', 'checkout')->name('checkout');
Route::view('/contact', 'contact')->name('contact');
Route::view('/our-services', 'our-services')->name('our-services');
Route::view('/wishlist', 'wishlist')->name('wishlist');
Route::view('/error-404', 'error-pages/error-404')->name('error-404');
Route::view('/error-500', 'error-pages/error-500')->name('error-500');

// Dashboard
Route::view('/accordions', 'dashboard/accordions')->name('accordions');
Route::view('/account-settings', 'dashboard/account-settings')->name('account-settings');
Route::view('/add-product', 'dashboard/add-product')->name('add-product');
Route::view('/alerts', 'dashboard/alerts')->name('alerts');
Route::view('/apex', 'dashboard/apex')->name('apex');
Route::view('/badges', 'dashboard/badges')->name('badges');
Route::view('/bs-select', 'dashboard/bs-select')->name('bs-select');
Route::view('/buttons', 'dashboard/buttons')->name('buttons');
Route::view('/calendar', 'dashboard/calendar')->name('calendar');
Route::view('/cards', 'dashboard/cards')->name('cards');
Route::view('/carousel', 'dashboard/carousel')->name('carousel');
Route::view('/checkout', 'dashboard/checkout')->name('checkout');
Route::view('/customers', 'dashboard/customers')->name('customers');
Route::view('/data-tables', 'dashboard/data-tables')->name('data-tables');
Route::view('/date-time-pickers', 'dashboard/date-time-pickers')->name('date-time-pickers');
Route::view('/dropdowns', 'dashboard/dropdowns')->name('dropdowns');
Route::view('/editor', 'dashboard/editor')->name('editor');
Route::view('/error', 'dashboard/error')->name('error');
Route::view('/forgot-password', 'dashboard/forgot-password')->name('forgot-password');
Route::view('/form-checkbox-radio', 'dashboard/form-checkbox-radio')->name('form-checkbox-radio');
Route::view('/form-file-input', 'dashboard/form-file-input')->name('form-file-input');
Route::view('/form-inputs', 'dashboard/form-inputs')->name('form-inputs');
Route::view('/form-layout1', 'dashboard/form-layout1')->name('form-layout1');
Route::view('/form-layout2', 'dashboard/form-layout2')->name('form-layout2');
Route::view('/form-layout3', 'dashboard/form-layout3')->name('form-layout3');
Route::view('/form-layout4', 'dashboard/form-layout4')->name('form-layout4');
Route::view('/form-validations', 'dashboard/form-validations')->name('form-validations');
Route::view('/graph-widgets', 'dashboard/graph-widgets')->name('graph-widgets');
Route::view('/icons', 'dashboard/icons')->name('icons');
Route::view('/index', 'dashboard/index')->name('index');
Route::view('/input-mask', 'dashboard/input-mask')->name('input-mask');
Route::view('/layout-grid', 'dashboard/layout-grid')->name('layout-grid');
Route::view('/layout-welcome', 'dashboard/layout-welcome')->name('layout-welcome');
Route::view('/layout', 'dashboard/layout')->name('layout');
Route::view('/login', 'dashboard/login')->name('login');
Route::view('/maintenance', 'dashboard/maintenance')->name('maintenance');
Route::view('/maps', 'dashboard/maps')->name('maps');
Route::view('/modals', 'dashboard/modals')->name('modals');
Route::view('/morris', 'dashboard/morris')->name('morris');
Route::view('/offcanvas', 'dashboard/offcanvas')->name('offcanvas');
Route::view('/orders', 'dashboard/orders')->name('orders');
Route::view('/products', 'dashboard/products')->name('products');
Route::view('/profile', 'dashboard/profile')->name('profile');
Route::view('/progress', 'dashboard/progress')->name('progress');
Route::view('/reports', 'dashboard/reports')->name('reports');
Route::view('/reviews', 'dashboard/reviews')->name('reviews');
Route::view('/signup', 'dashboard/signup')->name('signup');
Route::view('/spinners', 'dashboard/spinners')->name('spinners');
Route::view('/starter-page', 'dashboard/starter-page')->name('starter-page');
Route::view('/tables', 'dashboard/tables')->name('tables');
Route::view('/tabs', 'dashboard/tabs')->name('tabs');
Route::view('/tooltips', 'dashboard/tooltips')->name('tooltips');
Route::view('/typography', 'dashboard/typography')->name('typography');
Route::view('/view-cart', 'dashboard/view-cart')->name('view-cart');
Route::view('/widgets', 'dashboard/widgets')->name('widgets');




// Shop
Route::get('/shop', [ShopController::class, 'shopView'])->name('shop');
Route::get('/shop-details{id_product}', [ShopController::class, 'shopDetailsView'])->name('shop-details');

// Product
Route::get('/product', [ProductController::class, 'productView'])->name('product');
Route::get('/createProduct', [ProductController::class, 'createView'])->name('createProduct');
Route::get('/editProduct{id_product}', [ProductController::class, 'editView'])->name('editProduct');
Route::get('/searchProduct', [ProductController::class, 'createView'])->name('searchProduct');

Route::post('/addProduct', [ProductController::class, 'addProduct'])->name('addProduct');
Route::post('/editDataProduct', [ProductController::class, 'editDataProduct'])->name('editDataProduct');



