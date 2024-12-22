<div class="flex-col flex gap-x-4">
    <div class="col-span-1 md:col-span-2 flex flex-col justify-center items-center">
        <h2 class="text-2xl lg:text-4xl font-bold text-green-600">Artikel</h2>
        <p class="text-gray-600 mt-2">
            Temukan Artikel Terbaru dari HISFARSI NTB! 
        </p>
    </div>
    <div class="flex flex-col gap-4 mt-10">
        @foreach ($posts as $post)
        <livewire:artikel-item :post="$post" wire:key="post-{{ $post->id }}" />
        @endforeach
    </div>
       
</div>