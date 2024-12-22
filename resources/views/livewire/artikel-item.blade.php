<article class="max-w-5xl rounded-3xl overflow-hidden transition-shadow duration-300">
    <div class="flex flex-col md:flex-row">
        <div class="md:w-2/5">
            <img 
                src="{{ $post->banner_url }}" 
                alt="Business Leader" 
                class="w-full h-44 md:h-52 object-cover hover:scale-105 transition duration-300"
            >
        </div>
        <div class="md:w-3/5 px-6 py-2">
            <h2 class="lg:text-2xl text-xl font-bold mb-2 text-gray-800 line-clamp-1">
                {{ $post->title }} <!-- Ubah dari artikel ke post -->
            </h2>
            <p class="text-gray-600 line-clamp-3">
                <p class="text-gray-600 mb-4 line-clamp-3">
                    {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 150, '...') }}
                </p>
                 <!-- Ubah dari artikel ke post -->
            </p>
            <button wire:click="redirectToArtikelDetail('{{ $post->id }}')" class="bg-blue-600 mt-2 text-white px-6 py-2 text-sm rounded-3xl tracking-wider hover:bg-gray-800 transition-colors duration-300">
                Selengkapnya
            </button>
        </div>
    </div>
</article>