<?php

use App\Livewire\Home;
use App\Livewire\ShowSerive;
use App\Livewire\ShowSerivePage;
use Illuminate\Support\Facades\Route;


Route::get('/',Home::class);
Route::get('/services',ShowSerivePage::class)->name('services');
Route::get('/services/{id}',ShowSerive::class)->name('servicePage');
