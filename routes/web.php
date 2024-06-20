<?php

use App\Http\Controllers\ContactController;
use App\Http\Livewire\ContactForm;
use App\Livewire\About;
use App\Livewire\Blog;
use App\Livewire\Contact;
use App\Livewire\Developers;
use App\Livewire\Home;
use App\Livewire\NewsDetails;
use App\Livewire\Services\FreshTilapia;
use Illuminate\Support\Facades\Route;
use App\Livewire\Products;
use App\Livewire\Services\Eviscerated;
use App\Livewire\Services\FrozenTilapia;
use App\Livewire\Services\IceSale;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;


Route::middleware(['lang'])->group(function () {

    Auth::routes();

    Route::get('lang/{lang}', function ($lang) {
        session(['lang' => $lang]);
        return Redirect::back();
    })->where(['lang' => 'es|en']);

    Route::get('/', Home::class)->name('velamar.sas.home');
    Route::get('/about', About::class)->name('velamar.sas.about');

    // SERVICES AND PRODUCTS
    Route::get('/products', Products::class)->name('velamar.sas.products');
    Route::get('/eviscerated', Eviscerated::class)->name('velamar.sas.eviscerated');
    Route::get('/frozen_tilapia', FrozenTilapia::class)->name('velamar.sas.frozen_tilapia');
    Route::get('/Fresh Tilapia', FreshTilapia::class)->name('velamar.sas.bones');
    Route::get('/ice_sale', IceSale::class)->name('velamar.sas.ice_sale');

    Route::get('/blog', Blog::class)->name('velamar.sas.blog');
    Route::get('/news/details', NewsDetails::class)->name('velamar.sas.news');
    Route::get('/contact', Contact::class)->name('velamar.sas.contact');
    Route::get('/developers', Developers::class)->name('velamar.sas.developers');

    Route::get('/contactform', [ContactController::class, 'showForm'])->name('velamar.contact.show');
    Route::post('/contacts', [ContactController::class, 'submitForm'])->name('velamar.contact.submit');
});
