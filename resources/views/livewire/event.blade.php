<div class="min-h-screen">
    <x-input 
    wire:model.live="search" 
    placeholder="Cari Event" 
    type="search" 
    class="border-none bg-[#e5e9f2]"
>
    </x-input>

    <div class="my-8">
        <h3 class="text-xl font-semibold lg:text-3xl text-green-600">Event Terbaru HISFARSI NTB</h3>
        <p class="">Ayo, Berpartisipasi di Event HISFARSI NTB Terbaru!</p>
        <div class="grid grid-flow-col mt-6 grid-cols-[fit-content] gap-x-4 overflow-x-auto scrollbar-hide py-2 place-content-start">
            @forelse ($latestEvents as $event)
                <livewire:event-item :event="$event" :key="$event->id" />
            @empty
                <p>Tidak ada event ditemukan.</p>
            @endforelse
        </div>
    </div>

    <div class="my-8">
        <h3 class="text-xl font-semibold lg:text-3xl ">Event Yang Lalu</h3>
        <p class="">Lihat Keseruanan Event HISFARSI NTB!</p>
        <div class="grid grid-flow-col mt-6 grid-cols-[fit-content] gap-x-4 overflow-x-auto scrollbar-hide py-2 place-content-start">
            @forelse ($pastEvents as $event)
                <livewire:event-item :event="$event" :key="$event->id" />
            @empty
                <p>Tidak ada event ditemukan.</p>
            @endforelse
        </div>
    </div>
</div>
