<?php
//Pagina Principal para las rutas
use Illuminate\Support\Facades\Route;
//------------------------------------------------------------------------------------------

//Route::middleware('auth')->group(function (){

Route::prefix('M0V1E_F0R_A11')->group(function () {     
Route::get('categorias','WelcomeController@categorias')->name('/categorias');
//Route::post('/categorias','WelcomeController@refresh'); El post lo que hace es que crea un recurso,el cual lo podemos ver cuando ponemos el verbo get

Route::get('despedida','WelcomeController@despedida')->name('/despedida');
//Route::post('/despedida','WelcomeController@refresh2'); El post lo que hace es que crea un recurso,el cual lo podemos ver cuando ponemos el verbo get

Route::get('alcance','WelcomeController@alcance')->name('/alcance');

Route::get('necesidad','WelcomeController@necesidad')->name('/necesidad');

Route::get('objetivo','WelcomeController@objetivo')->name('/objetivo');

Route::get('futuro','WelcomeController@futuro')->name('/futuro');

Route::get('welcome','WelcomeController@welcome')->name('/welcome');

Route::get('prueba','WelcomeController@prueba')->name('/prueba');

});

//Route::get('login', function () {
//    return 'Login de la pagina';       --> Este es el login de auth que por el momento no estoy implementando
//})->name('login');

//----------------------------------------------------------------------------------------------
Route::fallback(function() {
    return view('information.fallback');
});


