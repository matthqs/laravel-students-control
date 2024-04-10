<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\AlunoController;
use App\Http\Controllers\MatriculaController;
 
Route::get('/', function () {
    return view('auth/login');
});
 
Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
  
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
  
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
  
Route::middleware('auth')->group(function () {

    Route::get('/home', function () {
        $user = Auth::user();
        return view('home', ['user' => $user]);
    })->name('home');

    Route::controller(CursoController::class)->prefix('cursos')->group(function () {
        Route::get('', 'index')->name('cursos');
        Route::get('create', 'create')->name('cursos.create');
        Route::post('store', 'store')->name('cursos.store');
        Route::get('show/{id}', 'show')->name('cursos.show');
        Route::get('edit/{id}', 'edit')->name('cursos.edit');
        Route::put('edit/{id}', 'update')->name('cursos.update');
        Route::delete('destroy/{id}', 'destroy')->name('cursos.destroy');
    });

    Route::controller(AlunoController::class)->prefix('alunos')->group(function () {
        Route::get('', 'index')->name('alunos');
        Route::get('create', 'create')->name('alunos.create');
        Route::post('store', 'store')->name('alunos.store');
        Route::get('show/{id}', 'show')->name('alunos.show');
        Route::get('edit/{id}', 'edit')->name('alunos.edit');
        Route::put('edit/{id}', 'update')->name('alunos.update');
        Route::delete('destroy/{id}', 'destroy')->name('alunos.destroy');
    });

    Route::controller(MatriculaController::class)->prefix('matriculas')->group(function () {
        Route::get('', 'index')->name('matriculas');
        Route::get('create', 'create')->name('matriculas.create');
        Route::post('store', 'store')->name('matriculas.store');
        Route::get('show/{id}', 'show')->name('matriculas.show');
        Route::get('edit/{id}', 'edit')->name('matriculas.edit');
        Route::put('edit/{id}', 'update')->name('matriculas.update');
        Route::delete('destroy/{id}', 'destroy')->name('matriculas.destroy');
    });
 
    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});