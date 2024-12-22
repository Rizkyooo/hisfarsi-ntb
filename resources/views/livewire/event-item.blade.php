<div class="bg-white rounded-3xl overflow-hidden w-[200px] lg:w-[250px] hover:scale-105 transition-transform duration-300"
     wire:click="redirectToEventDetail('{{ $event->id }}')" style="cursor: pointer; position: relative;">
    <!-- Label Status -->
    <div class="absolute top-2 right-2 px-3 py-1 rounded-lg text-xs font-semibold text-white"
         style="
            background-color: 
                {{ $event->status === 'Aktif' ? '#4CAF50' : ($event->status === 'Ditutup' ? '#FFA500' : '#F44336') }}">
        {{ $event->status === 'Aktif' ? 'Daftar Sekarang!' : ($event->status === 'Ditutup' ? 'Ditutup' : 'Selesai') }}
    </div>
    
    <!-- Banner Image -->
    <img src="{{ Storage::url($event->banner) }}" alt="Event Image" class="w-full h-44 object-cover">
    
    <!-- Event Details -->
    <div class="p-4">
        <h3 class="text-lg font-bold line-clamp-2">{{ $event->nama_event }}</h3>
        <p class="text-gray-600 text-sm mb-2 line-clamp-3">
            {{-- {{ $event->deskripsi }} --}}
            {!! \Illuminate\Support\Str::limit(strip_tags($event->deskripsi), 150, '...') !!}
        </p>
        <div class="flex items-center text-gray-500 text-sm">
            <x-heroicon-o-map-pin class="w-4 h-4 mr-1" />
            <span> {{ $event->lokasi }}</span>
        </div>
    </div>
</div>
