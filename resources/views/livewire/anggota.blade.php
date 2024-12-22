<section class="max-w-7xl mx-auto  py-6  rounded-3xl">
  <h2 class="text-2xl lg:text-4xl font-bold text-green-600 mb-2 text-center">
    Pengurus HISFARSI NTB
  </h2>
  <p class="text-gray-600 mb-8 text-center max-w-2xl mx-auto">
    Ayo, Temui Para Apoteker Hebat di HISFARSI NTB!
  </p>

  <!-- Scrollable Team Members -->
<div class="flex overflow-x-auto p-4 space-x-6 pb-4 scrollbar-hide">
  @foreach ($anggota as $item)
  <!-- Team Member Card -->
  <div wire:click="selectAnggota({{ $item->id }})" class="shrink-0 cursor-pointer bg-white rounded-3xl p-4 text-center w-56 hover:scale-105 transition-transform duration-300">
    <img src="{{ Storage::url($item->photo) ?: 'https://via.placeholder.com/150' }}" alt="{{ $item->name }}" class="w-32 h-32 rounded-full object-cover mx-auto mb-4 transition-transform duration-300 hover:scale-110">
      <h3 class="text-lg font-semibold text-gray-800">{{ $item->name }}</h3>
      <p class="text-gray-600 text-sm font-semibold">{{ $item->jabatan ?? 'Role not assigned' }}</p>
      <p class="text-gray-500 text-sm">{{ $item->pengurus->first()->nama_bidang ?? 'Role not assigned' }}</p>
  </div>
  @endforeach
</div>

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


</section>