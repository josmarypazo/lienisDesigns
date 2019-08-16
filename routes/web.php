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
Route::get("/index", function() {
return view('index');
});

//Ruta a la pagina de productos
Route::get("/productos", function() {
return view('productos');
});

//Ruta a la pagina de preguntas frecuentes
Route::get("/faq", function() {
  return view('faq');

});




//Ruta a la pagina de perfil usuario
Route::get("/", function() {

});

//Ruta a la pagina de detalle producto
Route::get("/", function() {

});
