<div class="min-h-screen">
    <h3 class="text-2xl lg:text-3xl font-semibold text-center mt-6 text-green-600">Visi & Misi HISFARSI NTB</h3>
    <div class="flex justify-center items-center mt-1">
        <hr class="p-[1px] w-1/5 bg-gray-600 opacity-65">
    </div>
    <div class="mt-10 max-w-4xl mx-auto">
        <h3 class="text-2xl  lg:text-3xl font-semibold">
            VISI
        </h3>
        <p class="mt-4">{!! $visimisi->visi ?? "Tidak ada data" !!}
        </p>
    </div>
    <div class="mt-6 max-w-4xl mx-auto">
        <h3 class="text-2xl lg:text-3xl font-semibold ">
            MISI
        </h3>
        <p class="mt-4 text-start">{!! $visimisi->misi ?? "Tidak ada data" !!}</p>
    </div>
</div>
