<div class="flex-col flex gap-x-4 lg:flex-row my-6">
    <div class="col-span-1 md:col-span-2 flex flex-col lg:gap-y-2 justify-center lg:w-1/3 place-content-center">
        <h2 class="text-2xl lg:text-4xl font-bold text-green-600">Event HISFARSI NTB</h2>
        <p class="text-gray-600 mt-2">
            Ayo, Berpartisipasi di Event HISFARSI Terbaru!
        </p>
        <div class="flex items-center">

            <a href="/event" class="inline-block mt-4 bg-blue-500 text-white px-4 py-2 rounded-full text-sm font-semibold hover:bg-blue-600 transition">
                Lihat Semua &rarr;
            </a>
        </div>
    </div>
    <div class="grid grid-flow-col mt-6 grid-cols-[fit-content] gap-x-4 p-4 overflow-x-auto lg:w-2/3 scrollbar-hide">
        @foreach ($events as $event)
            <livewire:event-item :event="$event" :key="$event->id" />
        @endforeach
    </div>  
</div>

