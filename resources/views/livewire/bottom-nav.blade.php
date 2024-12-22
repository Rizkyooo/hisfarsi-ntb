<div class="fixed bottom-0 left-0 right-0 bg-white shadow-lg z-10 lg:hidden">
    <div class="flex justify-around py-2">
        {{-- Home --}}
        <a href="/"  class="flex flex-col items-center {{ request()->is('/') ? 'text-blue-600' : 'text-gray-500 hover:text-blue-600' }}">
            <x-icon name="o-home" class="w-6 h-6" />
            <span class="text-xs">Home</span>
        </a>

        {{-- Program --}}
        <a href="/event" class="flex flex-col items-center {{ request()->is('event') ? 'text-blue-600' : 'text-gray-500 hover:text-blue-600'}}">
            <x-icon name="o-calendar-days" class="w-6 h-6" />
            <span class="text-xs">Event</span>
        </a>

        {{-- Donasi Saya --}}
        <a href="/pengurus" class="flex flex-col items-center {{ request()->is('pengurus') ? 'text-blue-600' : 'text-gray-500 hover:text-blue-600'}}">
            <x-icon name="o-users" class="w-6 h-6" />
            <span class="text-xs">Pengurus</span>
        </a>

        {{-- Inbox --}}
        <a href="/artikel" class="flex flex-col items-center {{ request()->is('artikel') ? 'text-blue-600' : 'text-gray-500 hover:text-blue-600'}}">
            <x-icon name="o-newspaper" class="w-6 h-6" />
            <span class="text-xs">Artikel</span>
        </a>

        {{-- Akun --}}
        <a href="/gallery" class="flex flex-col items-center {{ request()->is('galery') ? 'text-blue-600' : 'text-gray-500 hover:text-blue-600'}}">
            <x-icon name="o-camera" class="w-6 h-6" />
            <span class="text-xs">Galery</span>
        </a>
    </div>
</div>
