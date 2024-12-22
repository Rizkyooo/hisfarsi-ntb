<div class="container mx-auto py-4">
    <div class=" rounded-3xl p-6 max-w-3xl mx-auto">
        <!-- Event Title -->
        <h2 class="text-3xl font-bold mb-4">{{ $event->nama_event }}</h2>

        <!-- Social Media Share Buttons -->

        <x-dropdown>
            <x-slot:trigger class="flex justify-center items-center animate-bounce">
                <p class="font-medium">Share</p>
                <x-button icon="o-share" class=" btn-ghost" />
            </x-slot:trigger>
         
            <x-menu-item target="_blank"  href="https://wa.me/?text={{ urlencode($event->nama_event . ' - ' . url()->current()) }}" title="WhatsApp" />
                <x-menu-item target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" title="Facebook" />
                    <x-menu-item target="_blank"  href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($event->nama_event) }}" title="Twitter" />
        </x-dropdown>


        <div class="flex justify-center items-center my-6">
            <img class="rounded-2xl max-w-full h-auto" src="{{ Storage::url($event->banner) }}" alt="">
        </div>

        <!-- Event Description -->
        <p class="text-lg text-gray-600 mt-4">{!! $event->deskripsi !!}</p>

        

        <!-- Event Location -->
        <div class="flex items-center text-gray-500 text-sm mt-4">
            <x-heroicon-o-map-pin class="w-4 h-4 mr-1" />
            <span>{{ $event->lokasi }}</span>
        </div>

        <!-- Event Date and Time -->
        <div class="text-gray-500 text-sm mt-4 mb-6">
            <p><strong>Dari</strong> {{ \Carbon\Carbon::parse($event->tanggal_mulai)->format('F j, Y, g:i A') }}</p>
            <p><strong>Sampai</strong> {{ \Carbon\Carbon::parse($event->tanggal_selesai)->format('F j, Y, g:i A') }}</p>
        </div>

        

        <!-- Registration Form -->
        @if($isRegistered)
            <p class="text-green-500 mt-4">Berhasil Mendaftar! <br> Terima kasih telah mendaftar di event ini!</p>
        @else

        <x-collapse wire:model="show" separator class="my-2 border-none bg-white {{ $event->status =='Aktif' ? '' :'btn-disabled' }} ">
            <x-slot:heading ><p class="font-semibold"> {{ $event->status =='Aktif' ? 'Yuk Daftar Sekarang!' :'Event Telah Ditutup' }}  </p></x-slot:heading>
            <x-slot:content>
                <div class="mt-6">
                    <label for="nama_lengkap" class="block text-sm font-semibold">Full Name:</label>
                    <input wire:model="nama_lengkap" id="nama_lengkap" type="text" class="w-full p-2 mt-2 border border-gray-300 rounded-2xl" required>
    
                    <label for="email" class="block text-sm font-semibold mt-4">Email:</label>
                    <input wire:model="email" id="email" type="email" class="w-full p-2 mt-2 border border-gray-300 rounded-2xl" required>
    
                    <label for="no_hp" class="block text-sm font-semibold mt-4">Phone Number:</label>
                    <input wire:model="no_hp" id="no_hp" type="text" class="w-full p-2 mt-2 border border-gray-300 rounded-2xl" required>
    
                    <label for="organisasi" class="block text-sm font-semibold mt-4">Organization (Optional):</label>
                    <input wire:model="organisasi" id="organisasi" type="text" class="w-full p-2 mt-2 border border-gray-300 rounded-2xl">
    
                    {{-- <x-button wire:click="register" class="mt-6 px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
                        Register for this event
                    </x-button> --}}
                    <x-button wire:click="register" label="Daftar Sekarang" class="btn-primary text-white bg-blue-500 mt-4 rounded-2xl" />
                </div>
            </x-slot:content>
        </x-collapse>
            
        @endif
    </div>
</div>
