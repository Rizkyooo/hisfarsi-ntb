{{-- <div class="flex-col flex gap-x-4 ">
    <div class="col-span-1 md:col-span-2 flex flex-col justify-center items-center">
        <h2 class="text-xl lg:text-3xl font-bold text-green-600">Kegiatan Kami</h2>
        <p class="text-gray-600 mt-2">
            Yuk, Ikuti Kegiatan Terbaru dari HISFARSI! 
        </p>
    </div>
    <div class=" grid grid-flow-col mt-6 grid-cols-[fit-content] gap-x-4  overflow-x-auto p-4 scrollbar-hide">

        <a href="#" class="bg-white rounded-3xl overflow-hidden w-[200px] lg:w-[250px] hover:scale-105 transition-transform duration-300">
            <img src="https://picsum.photos/500/200" alt="Event Image" class="w-full h-44 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold">test</h3>
                <p class="text-gray-600 text-sm mb-2 line-clamp-3">
                    velit, numquam cumque similique laborum delectus suscipit nemo ipsa ducimus. Repudiandae, eveniet. Quod facere esse culpa unde!
                </p>
                <div class="flex items-center text-gray-500 text-sm">
                    <x-heroicon-o-map-pin class="w-4 h-4 mr-1" />
                    <span> Quod facere esse culpa unde!</span>
                </div>
            </div>
        </a>

        <a href="#" class="bg-white rounded-3xl overflow-hidden w-[250px] lg:w-[300px] hover:scale-105 transition-transform duration-300">
            <img src="https://picsum.photos/500/200" alt="Event Image" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold">test</h3>
                <p class="text-gray-600 text-sm mb-2 line-clamp-3">
                    velit, numquam cumque similique laborum delectus suscipit nemo ipsa ducimus. Repudiandae, eveniet. Quod facere esse culpa unde!
                </p>
                <div class="flex items-center text-gray-500 text-sm">
                    <x-heroicon-o-map-pin class="w-4 h-4 mr-1" />
                    <span> Quod facere esse culpa unde!</span>
                </div>
            </div>
        </a>
        <a href="#" class="bg-white rounded-3xl overflow-hidden w-[250px] lg:w-[300px] hover:scale-105 transition-transform duration-300">
            <img src="https://picsum.photos/500/200" alt="Event Image" class="w-full h-48 object-cover">
            <div class="p-4">
                <h3 class="text-lg font-bold">test</h3>
                <p class="text-gray-600 text-sm mb-2 line-clamp-3">
                    velit, numquam cumque similique laborum delectus suscipit nemo ipsa ducimus. Repudiandae, eveniet. Quod facere esse culpa unde!
                </p>
                <div class="flex items-center text-gray-500 text-sm">
                    <x-heroicon-o-map-pin class="w-4 h-4 mr-1" />
                    <span> Quod facere esse culpa unde!</span>
                </div>
            </div>
        </a>
    </div>
    <div class="flex items-center justify-center">
        <a href="#" class="inline-block bg-blue-500 text-white px-8 py-2 rounded-full text-sm font-semibold hover:bg-blue-600 transition">
            Lihat Semua &rarr;
        </a>
    </div>
</div> --}}


<div class="bg-white rounded-3xl overflow-hidden w-[200px] lg:w-[250px] hover:scale-105 transition-transform duration-300"
     wire:click="redirectToKegiatanDetail('{{ $kegiatan->id }}')" style="cursor: pointer; position: relative;">
    <!-- Label Status -->
    {{-- <div class="absolute top-2 right-2 px-3 py-1 rounded-lg text-xs font-semibold text-white"
         style="
            background-color: 
                {{ $event->status === 'Aktif' ? '#4CAF50' : ($event->status === 'Ditutup' ? '#FFA500' : '#F44336') }}">
        {{ $event->status === 'Aktif' ? 'Daftar Sekarang!' : ($event->status === 'Ditutup' ? 'Ditutup' : 'Selesai') }}
    </div> --}}
    
    <!-- Banner Image -->
    <img src="{{ Storage::url($kegiatan->media) }}" alt="Event Image" class="w-full h-44 object-cover">
    
    <!-- Event Details -->
    <div class="p-4">
        <h3 class="text-lg font-bold line-clamp-2">{{ $kegiatan->judul }}</h3>
        <p class="text-gray-600 text-sm mb-2 line-clamp-3">
            {!! \Illuminate\Support\Str::limit(strip_tags($kegiatan->deskripsi), 150, '...') !!}
        </p>
        </p>
        <div class="flex items-center text-gray-500 text-sm">
            <x-heroicon-o-map-pin class="w-4 h-4 mr-1" />
            <span> {{ $kegiatan->alamat }}</span>
        </div>
    </div>
</div>
