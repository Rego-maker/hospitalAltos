<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactanosController;

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

Route::get('/', [HomeController::class, '__invoke'])->name('home');

/*Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');

Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

// Para mandar informacion que sea importante, se usa el metodo post
// El metodo get manda informacion por la url, es menos segura
Route::post('cursos', [CursoController::class, 'store'])->name('cursos.store');

Route::get('cursos/{id}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class, 'edit'])->name('cursos.edit');

// Para actualizar, es mejor usar el metodo put

Route::put('cursos/{curso}', [CursoController::class, 'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursoController::class, 'distroy'])->name('cursos.distroy');*/

/* Con la palabra reservada Route::resource, debo darla la url que comparten las clases,
en este caso Curso, y el nombre del controlador que se encarga de ellos, CursoController::class
asi se evita hacer 1 ruta para cada accion posible, pero en cada controlador debe detallarse
los pasos a seguir*/
/*Si se cambia el nombre de la URL (cursos) para evitar error se le agg el metodo
->names() y dentro se coloca el nombre anterior, asi no altera a las rutas */

Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', [ContactanosController::class,'index'])->name('contactanos.index');

Route::post('contactanos', [ContactanosController::class,'store'])->name('contactanos.store');
