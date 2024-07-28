<?php

use App\Mail\ContactanosMailable;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', HomeController::class)->name('home');

Route::resource('cursos', CursoController::class);

Route::view('nosotros', 'nosotros')->name('nosotros');

Route::get('contactanos', function () {

    Mail::to('eapaso18@gmail.com')->send(new ContactanosMailable);

    return "Mensaje enviado";

})->name('contactanos');

//Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos');

/*Route::get('cursos', [CursoController::class, 'index'])->name('cursos.index');
Route::get('cursos/create', [CursoController::class, 'create'])->name('cursos.create');

Route::post('cursos', [CursoController::class,'store'])->name('cursos.store');

Route::get('cursos/{curso}', [CursoController::class, 'show'])->name('cursos.show');

Route::get('cursos/{curso}/edit', [CursoController::class,'edit'])->name('cursos.edit');

Route::put('cursos/{curso}', [CursoController::class,'update'])->name('cursos.update');

Route::delete('cursos/{curso}', [CursoController::class,  'destroy'])->name('cursos.destroy');
*/

/*
route::controller(CursoController::class)->group(function(){

Route::get('cursos', 'index');
Route::get('cursos/create', 'create');
Route::get('cursos/{curso}', 'show');

});

Route::get('cursos/{curso}/{categoria?}', function ($curso, $categoria = null) {
    if ($categoria) {
        return "Bienvenido al curso $curso, de la categoria $categoria";
    }else {
        return "Bienvenido al curso: $curso";
    }
});*/