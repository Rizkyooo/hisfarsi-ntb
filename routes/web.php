<?php

use App\Http\Livewire\RegisterEventForm;
use App\Livewire\Artikel;
use App\Livewire\ArtikelDetail;
use App\Livewire\Event;
use App\Livewire\EventDetail;
use App\Livewire\Gallery;
use App\Livewire\Kegiatan as LivewireKegiatan;
use App\Livewire\KegiatanDetail;
use App\Livewire\Pengurus;
use App\Livewire\RegisterEventForm as LivewireRegisterEventForm;
use App\Livewire\VisiMisi;
use App\Livewire\Welcome;
use App\Models\Kegiatan;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', Welcome::class);

Route::get('/event', Event::class);
Route::get('/kegiatan', LivewireKegiatan::class);
Route::get('/gallery', Gallery::class);
Route::get('/artikel', Artikel::class);
Route::get('/visi-misi', VisiMisi::class);
Route::get('/pengurus', Pengurus::class);

Route::get('/event/{id}', EventDetail::class)->name('event.detail');
Route::get('/kegiatan/{id}', KegiatanDetail::class)->name('kegiatan.detail');
Route::get('/artikel/{id}', ArtikelDetail::class)->name('artikel.detail');
