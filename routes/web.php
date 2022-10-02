<?php

//use App\Http\livewire\admin\AdminDashboardComponent;
//use App\Http\livewire\user\UserDashboardComponent;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\ecommerce\AccueilEController;
use App\Http\Controllers\ecommerce\CartController;
use App\Http\Controllers\ecommerce\checkController;
use App\Http\Controllers\user\userController;
use App\Http\Controllers\contact\ContactController;

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

Route::get('/', function () {
    return view('first');
});
Route::get('/send', function () {
    return view('ecommerce');
});
/*Route::get('/cart', function () {
    return view('cart');
});*/
//Route::get('/',HomeCompoment::class);
/*Route::get('/shop',ShopComponent::class);
Route::get('/cart',CartCompoment::class);
Route::get('/checkout',CheckoutCompoment::class);
*/
Route::get('/admin', function () {
    return view('admin');
});
Route :: get('/add',function(){
    return view('add');

});
Route :: get('/admins',function(){
    return view('admins');

});
Route :: get('/product',function(){
    return view('product');

});
Route :: get('/edition',function(){
    return view('edition');

});
/*oute::get('/', [App\Http\Controllers\HomeController::class, 'accueil'])->name('home.userpage');

*/
/*Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
*/
//user or customer
/*Route :: middleware(['auth:sanctum','verified'])->group(function(){
    Route :: get('/user/dashboard',UserDashboardComponent :: class)->name('user.dashboard');

});
//admin
Route :: middleware(['auth:sanctum','verified','authadmin'])->group(function(){
Route :: get('/admin/dashboard',AdminDashboardComponent :: class)->name('admin.dashboard');
});*/
require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
*/
 //parti admin
 //ajout de produit
Route :: middleware(['auth','isAdmin'])->group(function (){
    Route :: get('/dashboard','Admin\FrontendController@admin');

 // produit
    Route :: get('clothes','Admin\CategoryController@admin');
    Route :: get('add_cat','Admin\CategoryController@add');
    Route :: post('insert-category','Admin\CategoryController@insert');
    Route :: get('editp/{id}',[CategoryController::class,'edit']);
    Route :: put('update-category/{id}',[CategoryController::class,'update']);
    Route :: get('delete-category/{id}',[CategoryController::class,'destroy']);
    //Route :: post('add_to_cart',[CategoryController::class,'panier']);

    //categori
    Route :: post('insert-cat','Admin\ProductController@insert');
    Route :: get('catego',[ProductController::class,'index']);
    Route :: get('editc/{id}',[ProductController::class,'edit']);
    Route :: get('categ',[ProductController::class,'admin']);
    Route :: put('update-cate/{id}',[ProductController::class,'update']);
    Route :: get('del/{id}',[ProductController::class,'destroy']);
    //Route :: get('ecommerce',[AccueilEController::class,'index']);


    //Route :: get('add_pro',[ProductController::class,'add']);
});

// affichage des produit sur la page d'accueil ecommerce
Route :: get('ecommerce',[AccueilEController::class,'index']);
Route :: get('category',[AccueilEController::class,'cat']);
Route :: get('voir_cat/{libelle}',[AccueilEController::class,'view_cat']);
Route :: get('voir_cat/{libelle}/{libellep}',[AccueilEController::class,'detailp']);
Route :: get('voir_detail/{libellep}',[AccueilEController::class,'detail']);
Route :: get('/p_search',[AccueilEController::class,'search_list'])->name('p_search');

//// ajouter des element au panier

Route :: post('add_to_cart',[CartController::class,'panier']);
Route :: get('cart',[CartController::class,'display']);
Route :: get('delete/{id}',[CartController::class,'delete']);
// processuuss de paiement
Route :: get('checkout',[checkController::class,'pay']);
Route :: post('livrer',[checkController::class,'ship']);
Route :: get('payment',[checkController::class,'order']);

Route :: get('/password/forget',[userController :: class, 'forget']);
// contact ecommerce
Route :: get('envoi',[ContactController::class,'envoi']);
Route :: post('send',[ContactController::class,'sendmail']);
//Route :: post('contact','ContactController@sendmail')->name('contact.submit');
/*Route::controller(ContactController::class)->group(function () {
    Route::get('/envoi', 'envoi')->name('envoi');

});*/


