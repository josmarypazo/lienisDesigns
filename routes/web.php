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

//RUTA, CONTROLADOR VISTA
// Route::get('/', function () {
//     return view('welcome');
// });

//Ruta a la pagina de inicio
Route::get("/", function() {
return view('index');
});


//Ruta a la pagina de login
Route::get("/login", function() {
return view('login');
});



//Ruta a la pagina de preguntas frecuentes
Route::get("/faq", function() {
  return view('faq');
});

//Ruta a la pagina de quien soy
Route::get("/quiensoy", function() {
  return view('quiensoy');
});


//Ruta a la pagina de perfil usuario
Route::get("/perfil_usuario", function() {
  return view('perfil_usuario');
})->name('perfil_usuario')->middleware('auth');

//Ruta a la pagina de productos
Route::get("/products", "ProductsController@list");

Route::post("/products/purchase/{id}", "ProductsController@purchase");

//Ruta al buscador
Route::get("/products/search", "ProductsController@search");

//Ruta a la pagina de productos por categoría
Route::get("/products/category/{category_id}", "ProductsController@categoria");
///products/category/{id}"

//Ruta a la pagina de crear producto por get
Route::get("/products/create", "ProductsController@create")->middleware('auth', 'isAdmin');

//Ruta a la pagina de crear producto por post
Route::post("/products/create", "ProductsController@store");

//Ruta a la pagina del detalle de un producto
Route::get("/products/{id}", "ProductsController@detail");

//Ruta para borrar un producto
Route::delete("/products/{id}", "ProductsController@destroy")->middleware('auth', 'isAdmin');

//Ruta para editar un producto por get
Route::get("/products/edit/{id}", "ProductsController@edit")->middleware('auth', 'isAdmin');

//Ruta para editar un producto por put
Route::put("/products/edit/{id}", "ProductsController@update")->middleware('auth', 'isAdmin');

//Ruta a la pagina de la compra por post
Route::get("/products/purchase/{id}", "Product_shopping_CartController@purchase");

//Ruta para editar perfil usuario
Route::get("/perfil_usuario/edit/{id}", "ProfileController@edit");

//Ruta para editar perfil usuario
Route::put("/perfil_usuario/edit/{id}", "ProfileController@update");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
