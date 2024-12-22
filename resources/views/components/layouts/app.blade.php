<!DOCTYPE html>
<html data-theme="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, viewport-fit=cover">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ isset($title) ? $title.' - '.config('app.name') : config('app.name') }}</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link class="bg-white" rel="icon" type="image/x-icon" href="{{ asset('HISFARSI-min.png') }}">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
    <body class="bg-[#f6f8fd]">
        <x-nav sticky full-width>
 
            <x-slot:brand>
                {{-- Brand --}}
                {{-- <x-button label="HISFARSI NTB " link="/" class="btn-lg btn-ghost " responsive /> --}}
                <a href="/" class="flex items-center gap-1 transform transition-all duration-300 hover:scale-105 hover:text-blue-600">
                    <img src="{{ asset('/HISFARSI-min.png') }}" alt="logo hisfarsi NTB" class="h-10 w-10 transition-transform duration-300 hover:rotate-12 hover:scale-110">
                    <h2 class="font-semibold text-md cursor-pointer transition-all duration-300 hover:text-green-600">HISFARSI NTB</h2>
                </a>
                
                
        </x-slot:brand>
            {{-- Right side actions --}}
            <x-slot:actions class="hidden lg:block">
                <x-button label="Home" icon="o-home" link="/" class=" btn-ghost btn-sm" responsive />
                <x-button label="Event" icon="o-calendar-days" link="/event" class=" btn-ghost btn-sm" responsive />
                <x-dropdown  label="Organisasi" class="btn-ghost btn-sm">
                    <x-menu-item title="Pengurus" link="/pengurus" class="font-semibold" />
                    <x-menu-item title="Visi & Misi" link="/visi-misi" class="font-semibold" />
                </x-dropdown>
                <x-button label="Galery" icon="o-camera" link="/gallery" class=" btn-ghost btn-sm" responsive />
                <x-button label="Artikel" icon="o-newspaper" link="/artikel" class=" btn-ghost btn-sm" responsive />
            </x-slot:actions>
        </x-nav>
        {{-- Main content section --}}
        <x-main fullwidth>
            <x-slot:content>
                {{ $slot }}
            </x-slot:content>
        </x-main>
        <livewire:bottom-nav />
        <livewire:footer />
    </body>
</html>
