<div class="my-6 max-w-5xl mx-auto min-h-screen">
    
    <h1 class="text-center text-2xl lg:text-3xl font-bold">SUSUNAN PENGURUS HISFARSI NTB <br> PERIODE 2023 – 2024</h1>

    @foreach ($penguruses as $pengurus)
        <div class="pengurus-item mt-6">
            <h2 class="p-4 bg-gray-100 rounded-2xl text-green-600 text-xl lg:text-2xl font-semibold">{{ $pengurus->nama_bidang }}</h2>
            <div class="flex overflow-x-auto p-4 space-x-6 pb-16 scrollbar-hide">
                @foreach ($pengurus->anggota as $item)
                <!-- Team Member Card -->
                <div wire:click="selectAnggota({{ $item->id }})" class="shrink-0 cursor-pointer bg-white rounded-3xl p-4 text-center lg:w-56 w-40 hover:scale-105 transition-transform duration-300">
                  <img src="{{ Storage::url($item->photo) ?: 'https://via.placeholder.com/150' }}" alt="{{ $item->name }}" class="lg:w-32 lg:h-32 w-24 h-24 rounded-full object-cover mx-auto mb-4 transition-transform duration-300 hover:scale-110">
                    <h3 class="text-lg font-semibold text-gray-800">{{ $item->name }}</h3>
                    <p class="text-gray-500 text-sm uppercase">{{ $item->jabatan ?? 'Role not assigned' }}</p>
                </div>
                @endforeach
              </div>
        </div>
    @endforeach
      <!-- Modal -->
      <x-modal wire:model="myModal1" class="backdrop-blur w-full">
        @if($selectedAnggota)
            @php
                $anggota = App\Models\Anggota::find($selectedAnggota);
            @endphp
            <div class="text-center">
                <h3 class="text-xl font-semibold">{{ $anggota->name }}</h3>
                <p class="text-gray-500">{{ $anggota->jabatan ?? 'Role not assigned' }}</p>
                <img src="{{ Storage::url($anggota->photo) ?: 'https://via.placeholder.com/150' }}" alt="{{ $anggota->name }} Image" class="w-full h-auto rounded-lg mx-auto my-4 object-cover">
      
                <!-- Navigation Buttons -->
                <div class="flex justify-between mt-4">
                    <x-button label="<" wire:click="previousAnggota" class="mr-2" />
                    <x-button label=">" wire:click="nextAnggota" class="ml-2" />
                </div>
            </div>
        @endif
      </x-modal>
</div>
