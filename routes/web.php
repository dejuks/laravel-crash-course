<?php

use App\Http\Controllers\NoteController;
use Illuminate\Support\Facades\Route;


Route::get('/',[NoteController::class,'index'])->name('note.index');
Route::get('/create',[NoteController::class,'create'])->name('note.create');
Route::post('save',[NoteController::class,'store'])->name('save.create');
Route::get('/edit/{id}',[NoteController::class,'edit'])->name('note.edit');
Route::put('/update/{id}',[NoteController::class,'update'])->name('note.update');
Route::get('/show/{id}',[NoteController::class,'show'])->name('note.show');
Route::delete('/delete/{id}',[NoteController::class,'destroy'])->name('note.delete');
