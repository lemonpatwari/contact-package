<?php

use Illuminate\Http\Request;
use lemonpatwari\Contact\Http\Controllers\ContactFormController;


Route::get('contact',[ContactFormController::class,'index'])->name('contact.index');

Route::post('contact',[ContactFormController::class,'store'])->name('contact.store');
