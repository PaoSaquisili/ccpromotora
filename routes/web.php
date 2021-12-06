<?php

use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProjectController;
use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
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

// ['register' => false]

Auth::routes();

//RUTAS PARA LA PAGINA NORMAL
Route::get('/', [IndexController::class, 'redirectToHome'])->name('pages.home');

Route::get('/sobre-nosotros', [IndexController::class, 'redirectToAbout'])->name('pages.about');
Route::get('/contacto', [IndexController::class, 'redirectToContact'])->name('pages.contact');
Route::get('/socios', [IndexController::class, 'redirectToPartners'])->name('pages.partners');
Route::get('/proyectos', [IndexController::class, 'redirectToProjects'])->name('pages.projects');
Route::get('/blog', [IndexController::class, 'redirectToBlog'])->name('pages.news');
Route::get('/nuestro-equipo', function () {return view('pages.equipo');})->name('pages.equipo');

Route::get('/propiedades/{nombreProyecto}', [ProjectController::class, 'viewProject'])->name('projects.viewProject');

//Ruta para mostrar un blog en especifico - PRUEBA
Route::get('/noticias/blog', function(){return view('pages.blog');})->name('blogs.blog');

//RUTA PARA MOSTRAR LA PAGINA PARTNERS -> ARQUITECTOS
Route::get('/socios/construye', function(){return view('pages.construye');})->name('socios.construye');


//RUTA PARA ENVIAR EMAIL PRUEBA
Route::post('/contactanos', [IndexController::class, "store"])->name('contactanos.store');
