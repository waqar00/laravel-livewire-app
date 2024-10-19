<?php

use App\Livewire\About;
use App\Livewire\Article;
use App\Livewire\ArticleDetails;
use App\Livewire\Contact;
use App\Livewire\Faq;
use App\Livewire\Home;
use App\Livewire\ShowSerive;
use App\Livewire\ShowSerivePage;
use App\Livewire\Team;
use Illuminate\Support\Facades\Route;


Route::get('/', Home::class);
Route::get('/services', ShowSerivePage::class)->name('services');
Route::get('/services/{id}', ShowSerive::class)->name('servicePage');
Route::get('/teams', Team::class)->name('teams');
Route::get('/articles', Article::class)->name('articles');
Route::get('/article/{id}', ArticleDetails::class)->name('articleDetails');
Route::get('/faqs', Faq::class)->name('faqs');
Route::get('/contacts', Contact::class)->name('contacts');
Route::get('/page/{id}', About::class)->name('page');
