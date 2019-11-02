<?php



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
    return view('page.products.products');
});
Route::get('/unit', function () {
    return view('page.unit.unit');
});
Route::get('/products', function () {
    return view('page.products.products');
});
Route::get('/vendor', function () {
    return view('page.vendor.vendor');
});
Route::get('/login', function () {
    return view('page.login.login');
});

Route::get('register', function () {
    return view('page.register.register');
});
Route::get('login1', function () {
    return view('page.login.login');
});

Route::get('/register', function () {
    return view('page.register.register');
});
Route::get('promotion', function () {
    return view('page.promotion.promotion');


});
Route::get('/products_type', function () {
    return view('page.products_type.products_type');
});



//// them xoa sua import export search

Route::get('display','UserController@index')->name('userIndex');
Route::get('insert', 'UserController@get_role')->name('userCreate');
Route::post('store', 'UserController@store')->name('userStore');
Route::get( 'edit/{id_user}', 'UserController@edit')->name('userEdit');
Route::post( 'save/{id_user}', 'UserController@update')->name('userUpdate');
Route::get( 'delete/{id_user}', 'UserController@destroy')-> name('userDestroy');
Route::get('users/export','UserController@export');
Route::post('import', 'UserController@import')->name('import');
Route::get('search','UserController@search')->name('search');

// catalog


// Route::get('insert_cata', 'CatalogController@create')->name('catalogCreate');  //  thêm mới
// Route::post('store_cata', 'CatalogController@store')->name('catalogStore');  //  lưu
// Route::get( 'edit_cata/{id_cata}', 'CatalogController@edit')->name('catalogEdit');  //  update
// Route::put( 'save_cata/{id}', 'CatalogController@update')->name('catalogUpdate');  //  lưu cập nhật
// Route::post('cataadd', 'CatalogController@them'); // store
// Route::put('editCata/{id}','CatalogController@up'); // update

Route::get('products_type','CatalogController@index')->name('catalogIndex');  // show
Route::get( 'delete_cata/{id_cata}', 'CatalogController@destroy')-> name('catalogDestroy');  //  xóa
Route::get('products_type/export','CatalogController@export_catalog')->name('export_catalog');  //  export
Route::post('import_cata', 'CatalogController@import_catalog')->name('import_catalog');  //  import
Route::get('search_cata','CatalogController@search_catalog')->name('search_catalog');  //  search
Route::post('cataadd', 'CatalogController@store'); // store insert
Route::put('editCata/{id}','CatalogController@update'); // update
Route::get('catalog/export','CatalogController@export');
Route::post('importCatalog','CatalogController@import')->name('importCatalog');


// products
Route::get('display','UserController@index')->name('userIndex');
Route::get('insert_pro', 'ProductController@get_catalog')->name('proCreate');
Route::post('store', 'UserController@store')->name('userStore');
Route::get( 'edit/{id_user}', 'UserController@edit')->name('userEdit');
Route::post( 'save/{id_user}', 'UserController@update')->name('userUpdate');
Route::get( 'delete/{id_user}', 'UserController@destroy')-> name('userDestroy');
Route::get('users/export','UserController@export');
Route::post('import', 'UserController@import')->name('import');
Route::get('search','UserController@search')->name('search');

Route::get('products','ProductController@index')->name('productIndex');  // show
Route::get( 'delete_pro/{id_pro}', 'ProductController@destroy')-> name('productDestroy');  //  xóa
Route::get('products/export','ProductController@export_product')->name('export_product');  //  export
Route::post('import_pro', 'ProductController@import_product')->name('import_product');  //  import
Route::get('search_pro','ProductController@search_product')->name('search_product');  //  search
Route::post('proadd', 'ProductController@store'); // store insert
Route::put('editPro/{id}','ProductController@update'); // update



// unit

Route::get('unit','UnitController@index')->name('unitIndex');  // show
Route::get( 'delete_unit/{id_unit}', 'UnitController@destroy')-> name('unitDestroy');  //  xóa
Route::get('unit/export','UnitController@export_unit')->name('export_unit');  //  export
Route::post('import_unit', 'UnitController@import_unit')->name('import_unit');  //  import
Route::get('search_unit','UnitController@search_unit')->name('search_unit');  //  search
Route::post('unitadd', 'UnitController@store'); // store insert
Route::put('editUnit/{id}','UnitController@update'); // update
Route::get('unit/export','UnitController@export');
Route::post('importUnit','UnitController@import')->name('importUnit');


// vendor


Route::get('vendor','VendorController@index')->name('vendorIndex');  // show
Route::get( 'delete_vendor/{id_vendor}', 'VendorController@destroy')-> name('vendorDestroy');  //  xóa
Route::get('vendor/export','VendorController@export_vendor')->name('export_vendor');  //  export
Route::post('import_vendor', 'VendorController@import_vendor')->name('import_vendor');  //  import
Route::get('search_vendor','VendorController@search_vendor')->name('search_vendor');  //  search
Route::post('vendoradd', 'VendorController@store'); // store insert
Route::put('editVendor/{id}','VendorController@update'); // update
Route::get('vendor/export','VendorController@export');
Route::post('importVendor','VendorController@import')->name('importVendor');

// promotion


Route::get('promotion','PromotionController@index')->name('promotionIndex');  // show
Route::get( 'delete_promotion/{id_promotion}', 'PromotionController@destroy')-> name('promotionDestroy');  //  xóa
Route::get('promotion/export','PromotionController@export_promotion')->name('export_promotion');  //  export
Route::post('import_promotion', 'PromotionController@import_promotion')->name('import_promotion');  //  import
Route::get('search_promotion','PromotionController@search_promotion')->name('search_promotion');  //  search
Route::post('promotionadd', 'PromotionController@store'); // store insert
Route::put('editPromotion/{id}','PromotionController@update'); // update
Route::get('promotion/export','UnitController@export');
Route::post('importPromotion','UnitController@import')->name('importPromotion');


///
Route::get('/reset', function () {
    return view('page.reset_password.reset_password');
});


Route::get('/datatable', function () {
    return view('page.products_type.products_type');
});

Route::get('/datatable/list','CatalogController@cata_list');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
