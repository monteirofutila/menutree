<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <div class="max-w-full mb-6">
        <h2 class="text-lg font-semibold">Foto de perfil</h2>
        <p class="mt-2 text-concrete text-sm">Carregue uma foto de perfil para personalizar sua conta.</p>
    </div>

    <div
        class="relative mb-4 flex aspect-[1/1.2] w-28 h-28 cursor-pointer items-center rounded-full bg-marble hover:ring-2 hover:ring-sand">
        <button wire:click="$dispatch('image-preview')" class="relative flex h-full w-full grow items-center">
            <input id="uploadInput" wire:model="photo" type="file" class="hidden" accept="image/*" />
            @if ($photo)
                <img class="absolute inset-x-0 inset-y-0 h-full w-full rounded-full object-cover"
                    src="{{ $photo->temporaryUrl() }}">
            @else
                <img class="absolute inset-x-0 inset-y-0 h-full w-full rounded-full object-cover"
                    src="{{ $photo_url ? asset('storage/' . $photo_url) : 'http://placehold.it/100x100' }}">
            @endif
        </button>
        <div
            class="pointer-events-none absolute bottom-2 right-2 z-10 flex h-10 w-10 items-center justify-center rounded-full border border-solid bg-black/30 text-white backdrop-blur-sm">
            <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg"
                class=" " role="img" aria-hidden="false" aria-labelledby="ltclid206_title ">
                <title id="ltclid206_title">Edit</title>
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M2 14V11.7071L9.5 4.20708L11.7929 6.49998L4.29289 14H2ZM12.5 5.79287L13.7929 4.49998L11.5 2.20708L10.2071 3.49998L12.5 5.79287ZM11.1464 1.14642L1.14645 11.1464L1 11.5V14.5L1.5 15H4.5L4.85355 14.8535L14.8536 4.85353V4.14642L11.8536 1.14642H11.1464Z"
                    fill="currentColor"></path>
            </svg>
        </div>
    </div>
    <div>
        <button wire:click="update"
            class="btn bg-white text-amber-600 border-2 border-amber-600 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased">Upload</button>
    </div>
</div>

@push('js')
    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('image-preview', (event) => {
                document.getElementById('uploadInput').click()
            });
        });
    </script>
@endpush
