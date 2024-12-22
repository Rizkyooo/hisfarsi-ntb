<?php

namespace App\Filament\Pages;

use Filament\Pages\Page;

class Dashboard extends Page
{
    protected static ?string $navigationIcon = 'heroicon-o-home';

    protected static string $view = 'filament.pages.dashboard'; // View untuk halaman dashboard

    // Tambahkan properti ini jika ingin menyembunyikan dari sidebar:
    protected static ?string $navigationGroup = null;
    // protected static ?string $slug = '/admin'; // Set slug menjadi root


}
