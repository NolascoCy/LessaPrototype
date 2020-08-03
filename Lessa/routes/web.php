<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');

Route::group(['middleware' => 'auth'], function () {

	Route::get('ListaEstudiantes', function () {
		return view('pages.listaE');
	})->name('lista');

	Route::get('docentes-list', function () {
		return view('pages.docentesRegistro');
	})->name('docentes');

	Route::get('estudiantes_list', function () {
		return view('pages.estudianteRegistro');
	})->name('estudiantes');

	Route::get('usuarios_list', function () {
		return view('pages.usuarios-list');
	})->name('usuarios');

	Route::get('salon', function () {    
		return view('pages.salonVirtual');
	})->name('salon');

	Route::get('examenes', function () {
		return view('pages.examenes');
	})->name('examenes');

	Route::get('reporte', function () {
		return view('pages.reportes');
	})->name('reporte');

	Route::get('Historial', function () {
		return view('pages.historial');
	})->name('historial');

	Route::get('ayuda', function () {
		return view('pages.ayuda');
	})->name('ayuda');

	Route::get('upgrade', function () {
		return view('pages.upgrade');
	})->name('upgrade');

	Route::get('Salones Registrados', function () {
		return view('pages.salonesRegistrados');
	})->name('salonRegistrado');



});

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});

