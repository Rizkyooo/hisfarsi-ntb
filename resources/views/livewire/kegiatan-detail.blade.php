<div class="container mx-auto py-4">
    <div class=" rounded-3xl p-6 max-w-3xl mx-auto">
        <!-- Event Title -->
        <h2 class="text-3xl font-bold mb-4">{{ $kegiatan->judul }}</h2>

        <!-- Social Media Share Buttons -->

        <x-dropdown>
            <x-slot:trigger class="flex justify-center items-center animate-bounce">
                <p class="font-medium">Share</p>
                <x-button icon="o-share" class=" btn-ghost" />
            </x-slot:trigger>
         
            <x-menu-item target="_blank"  href="https://wa.me/?text={{ urlencode($kegiatan->judul . ' - ' . url()->current()) }}" title="WhatsApp" />
                <x-menu-item target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" title="Facebook" />
                    <x-menu-item target="_blank"  href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($kegiatan->judul) }}" title="Twitter" />
        </x-dropdown>


        <div class="flex justify-center items-center my-6">
            <img class="rounded-2xl max-w-full h-auto" src="{{ Storage::url($kegiatan->media) }}" alt="">
        </div>

        <!-- kegiatan Description -->
        <p class="text-lg text-gray-600 mt-4">{!! $kegiatan->deskripsi !!}</p>

        

        <!-- kegiatan Location -->
        <div class="flex items-center text-gray-500 text-sm mt-4">
            <x-heroicon-o-map-pin class="w-4 h-4 mr-1" />
            <span>{{ $kegiatan->alamat }}</span>
        </div>

        <!-- kegiatan Date and Time -->
        <div class="text-gray-500 text-sm mt-4 mb-6">
            <p><strong>Dari</strong> {{ \Carbon\Carbon::parse($kegiatan->tanggal_mulai)->format('F j, Y, g:i A') }}</p>
            <p><strong>Sampai</strong> {{ \Carbon\Carbon::parse($kegiatan->tanggal_selesai)->format('F j, Y, g:i A') }}</p>
        </div>

        <div>
            <h3 class="text-xl lg:text-2xl font-semibold mb-6">Dokumentasi Kegiatan</h3>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <!-- Kolom 1 -->
                <div class="grid gap-4">
                    @foreach($kegiatan->dokumentasi as $index => $image)
                        @if($loop->iteration % 4 == 1)
                            <div>
                                <img 
                                    src="{{ asset($image) }}" 
                                    alt="Dokumentasi Kegiatan"
                                    class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer"
                                    wire:click="openModal({{ $index }})"
                                >
                            </div>
                        @endif
                    @endforeach
                </div>
        
                <!-- Kolom 2 -->
                <div class="grid gap-4">
                    @foreach($kegiatan->dokumentasi as $index => $image)
                        @if($loop->iteration % 4 == 2)
                            <div>
                                <img 
                                    src="{{ asset($image) }}" 
                                    alt="Dokumentasi Kegiatan"
                                    class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer"
                                    wire:click="openModal({{ $index }})"
                                >
                            </div>
                        @endif
                    @endforeach
                </div>
        
                <!-- Kolom 3 -->
                <div class="grid gap-4">
                    @foreach($kegiatan->dokumentasi as $index => $image)
                        @if($loop->iteration % 4 == 3)
                            <div>
                                <img 
                                    src="{{ asset($image) }}" 
                                    alt="Dokumentasi Kegiatan"
                                    class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer"
                                    wire:click="openModal({{ $index }})"
                                >
                            </div>
                        @endif
                    @endforeach
                </div>
        
                <!-- Kolom 4 -->
                <div class="grid gap-4">
                    @foreach($kegiatan->dokumentasi as $index => $image)
                        @if($loop->iteration % 4 == 0)
                            <div>
                                <img 
                                    src="{{ asset($image) }}" 
                                    alt="Dokumentasi Kegiatan"
                                    class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer"
                                    wire:click="openModal({{ $index }})"
                                >
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
       
        
        <x-modal wire:model="myModal1" class="backdrop-blur w-full">
            <div class="relative ">
                <img src="{{ asset($kegiatan->dokumentasi[$selectedImageIndex]) }}" alt="Preview Image" class="w-full h-full object-cover rounded-2xl">
                
                <button wire:click="prevImage" class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-1 px-3 rounded-full">
                    &lt;
                </button>
                <button wire:click="nextImage" class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-gray-800 text-white p-1 px-3 rounded-full">
                    &gt;
                </button>
                
            </div>
        </x-modal>
        

    </div>
</div>
