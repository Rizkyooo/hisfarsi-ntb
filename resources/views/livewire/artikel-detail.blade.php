<div class="container mx-auto py-4 mb-10">
    <div class=" rounded-3xl p-6 max-w-3xl mx-auto">
        <!-- post Title -->
        <h2 class="text-3xl font-bold mb-4">{{ $post->title }}</h2>

        <!-- Social Media Share Buttons -->

        <x-dropdown>
            <x-slot:trigger class="flex justify-center items-center animate-bounce">
                <p class="font-medium">Share</p>
                <x-button icon="o-share" class=" btn-ghost" />
            </x-slot:trigger>
         
            <x-menu-item target="_blank"  href="https://wa.me/?text={{ urlencode($post->title . ' - ' . url()->current()) }}" title="WhatsApp" />
                <x-menu-item target="_blank"  href="https://www.facebook.com/sharer/sharer.php?u={{ urlencode(url()->current()) }}" title="Facebook" />
                    <x-menu-item target="_blank"  href="https://twitter.com/intent/tweet?url={{ urlencode(url()->current()) }}&text={{ urlencode($post->title) }}" title="Twitter" />
        </x-dropdown>


        <div class="flex justify-center items-center my-6">
            <img class="rounded-2xl max-w-full h-auto" src="{{ Storage::url($post->banner) }}" alt="">
        </div>

        <!-- post Description -->
        <p class="text-lg text-gray-600 mt-4">{!! $post->content !!}</p>        
    </div>
</div>
