<?php
use App\ServiceCategory;
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
    $categories=ServiceCategory::get()->all();
    return view('front.pages.index',compact('categories'));
});
Auth::routes();
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
Route::get('/lang/{lang}','LanguageController@switchLang');
Route::resource('service','ServiceCategoryController');

Route::resource('blog','BlogController');

Route::group(['middleware' => ['auth']], function () {
 Route::get('/admin','AdminHomeController@index');
 Route::get('/contact_edit','AdminHomeController@contact')->name('contact_edit');
 Route::post('/contact_edit','AdminHomeController@store')->name('contact_store');
 Route::get('/promotion','ProductPromotionController@index');
 Route::resource('product','ProductController');

 Route::get('promotion/{id}', [
    'as'     => 'promotion.store',
    'uses' => 'ProductPromotionController@store',
]);
Route::get('promotion/destroy/{id}', [
    'as'     => 'promotion.destroy',
    'uses' => 'ProductPromotionController@destroy',
]);
Route::get('product/image/delete/{id}','ProductController@deletePhotos');

});