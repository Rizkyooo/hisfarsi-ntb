<div class="min-h-screen">
    <x-input 
    wire:model.live="search" 
    placeholder="Cari Artikel" 
    type="search" 
    class="border-none bg-[#e5e9f2]"
>
    </x-input>

    <div class="my-8">
        <h3 class="text-xl font-semibold lg:text-3xl text-green-600">Artikel Terbaru HISFARSI NTB</h3>
        <p class="">Ayo, Temukan Artikel HISFARSI NTB Terbaru!</p>
        <div class="flex flex-col gap-4 my-8">
            @forelse ($posts as $post)
                <livewire:artikel-item :post="$post" :key="$post->id" />
            @empty
                <p>Tidak ada event ditemukan.</p>
            @endforelse
        </div>
    </div>
</div>
