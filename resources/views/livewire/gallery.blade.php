<div class="min-h-screen my-6">
    <div class="max-w-3xl mx-auto flex flex-col gap-2 mb-10">
        <h3 class="text-2xl lg:text-3xl font-semibold text-center text-green-600">Gallery HISFARSI NTB</h3>
        <p class="text-lg text-gray-600 text-center">Yuk, lihat keseruan kegiatan kita! Klik gambar untuk melihat lebih dekat dan temukan momen-momen seru di setiap foto.</p>
    </div>


    @if (count($gallery) > 0)
    <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
        <!-- Kolom 1 -->
        <div class="grid gap-4">
            @foreach($gallery as $index => $item)
                @if($loop->iteration % 4 == 1)
                    <div>
                        <img 
                            src="{{ Storage::url($item->foto) }}" 
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
            @foreach($gallery as $index => $item)
                @if($loop->iteration % 4 == 2)
                    <div>
                        <img 
                            src="{{ Storage::url($item->foto) }}" 
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
            @foreach($gallery as $index => $item)
                @if($loop->iteration % 4 == 3)
                    <div>
                        <img 
                            src="{{ Storage::url($item->foto) }}" 
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
            @foreach($gallery as $index => $item)
                @if($loop->iteration % 4 == 0)
                    <div>
                        <img 
                            src="{{ Storage::url($item->foto) }}" 
                            alt="Dokumentasi Kegiatan"
                            class="h-auto max-w-full rounded-lg hover:scale-105 transition-transform duration-300 cursor-pointer"
                            wire:click="openModal({{ $index }})"
                        >
                    </div>
                @endif
            @endforeach
        </div>
     </div>

    <x-modal wire:model="myModal1" class="backdrop-blur w-full">
        <div class="relative">
            <div class="flex flex-col gap-2">
                <img src="{{ Storage::url($gallery[$currentIndex]->foto) }}" class="w-full h-full object-cover rounded-2xl">
                <p class="text-center bg-[#e4e9f2] p-2 rounded-2xl">{{ $gallery[$currentIndex]->deskripsi }}</p>
            </div>
            <div class="absolute top-1/2 left-0 transform -translate-y-1/2 px-4">
                <button wire:click="prevImage" class="bg-gray-800 text-white p-1 px-3 rounded-full">
                    &lt;
                </button>
            </div>
            <div class="absolute top-1/2 right-0 transform -translate-y-1/2 px-4">
                <button wire:click="nextImage" class="bg-gray-800 text-white p-1 px-3 rounded-full">
                    &gt;
                </button>
            </div>
        </div>
    </x-modal>
    @else
        <p class="text-center">Tidak ada data</p>
    @endif
    
</div>
