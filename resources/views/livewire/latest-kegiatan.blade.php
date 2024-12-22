<div class="flex-col flex gap-x-4 ">
    <div class="col-span-1 md:col-span-2 flex flex-col justify-center items-center">
        <h2 class="text-2xl lg:text-4xl font-bold text-green-600">Kegiatan Kami</h2>
        <p class="text-gray-600 mt-2">
            Yuk, Ikuti Kegiatan Terbaru dari HISFARSI! 
        </p>
    </div>
    <div class="grid grid-flow-col mt-6 grid-cols-[fit-content] place-content-center gap-x-4 p-4 overflow-x-auto scrollbar-hide">
        @foreach ($kegiatan as $kegiatan)
            <livewire:kegiatan-item :kegiatan="$kegiatan" :key="$kegiatan->id" />
        @endforeach
    </div>  
</div>

