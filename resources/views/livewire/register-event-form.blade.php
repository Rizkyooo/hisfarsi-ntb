<div class="container mx-auto p-4">
    <h2 class="text-2xl font-bold mb-4">Pendaftaran Event</h2>

    <!-- Menampilkan pesan sukses setelah pendaftaran -->
    @if (session('success'))
        <div class="mb-4 text-green-500">
            {{ session('success') }}
        </div>
    @endif

    <!-- Pilih Event -->
    <div class="mb-4">
        <label class="block text-sm font-medium">Pilih Event</label>
        <div class="space-y-2">
            @foreach ($events as $event)
                <button type="button" wire:click="selectEvent({{ $event->id }})" class="event-button px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                    Daftar untuk {{ $event->nama_event }}
                </button>
            @endforeach
        </div>
    </div>

    <!-- Jika event dipilih, tampilkan form pendaftaran -->
    @if ($selectedEvent)
        <div class="mt-4">
            <h3 class="text-xl font-bold">Form Pendaftaran untuk Event: {{ $events->firstWhere('id', $selectedEvent)->nama_event }}</h3>

            <form wire:submit.prevent="register">
                <div class="mb-4">
                    <label for="nama" class="block text-sm font-medium">Nama Lengkap</label>
                    <input type="text" wire:model="nama" id="nama" class="mt-1 p-2 w-full border rounded-md" required>
                    @error('nama') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="email" class="block text-sm font-medium">Email</label>
                    <input type="email" wire:model="email" id="email" class="mt-1 p-2 w-full border rounded-md" required>
                    @error('email') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="no_hp" class="block text-sm font-medium">Nomor HP</label>
                    <input type="text" wire:model="no_hp" id="no_hp" class="mt-1 p-2 w-full border rounded-md" required>
                    @error('no_hp') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                </div>

                <div class="mb-4">
                    <label for="keterangan" class="block text-sm font-medium">Keterangan Tambahan</label>
                    <textarea wire:model="keterangan" id="keterangan" class="mt-1 p-2 w-full border rounded-md"></textarea>
                </div>

                <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Daftar</button>
            </form>
        </div>
    @endif
</div>
