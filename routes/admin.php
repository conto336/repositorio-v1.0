<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DocumentController;
use App\Models\Document;
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

Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('',  [AdminController::class, 'index'])
    ->name('admin.home');

Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('show/users',  [AdminController::class, 'show'])
    ->name('admin.users-show');

/* Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('show/edit/user={id}',  [AdminController::class, 'edit'])
    ->name('admin.edit-user'); */

Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('register/users',  [AdminController::class, 'create'])
    ->name('admin.users-register');

Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('show/files/electronica',  [DocumentController::class, 'renderFilesElectronic'])
    ->name('admin.files-electronic');

Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('show/files/geologia',  [DocumentController::class, 'renderFilesGeology'])
    ->name('admin.files-geology');

Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('show/files/industrial',  [DocumentController::class, 'renderFilesIndustrial'])
    ->name('admin.files-industrial');

Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('upload/files',  [DocumentController::class, 'create'])
    ->name('admin.file-upload');

Route::middleware(['auth:sanctum', 'verified', 'admin'])->get('edit/files/id={id}&name={name}',  [DocumentController::class, 'edit'])
    ->name('admin.file-edit');

Route::put('update/file_={doc}', [DocumentController::class, 'update'])
    ->name('admin.update-file');

Route::post('upload_files/file', [DocumentController::class, 'store'])
    ->name('admin.upload');

Route::delete('delete/file/id={id}', [DocumentController::class, 'destroy'])
    ->name('admin.deleteFile');

Route::post('register/users', [AdminController::class, 'store'])
    ->name('admin.register-user');

Route::delete('delete/user/id={id}', [AdminController::class, 'destroy'])
    ->name('admin.delete-user');
