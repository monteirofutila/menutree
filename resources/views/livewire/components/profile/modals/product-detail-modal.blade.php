<dialog wire:ignore.self id="productDetails" class="modal" role="dialog">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="modal-box p-0 max-w-80 bg-white">
        <form method="dialog" class="modal-backdrop">
            <button wire:click="$dispatch('close-details')"
                class="btn btn-sm btn-circle bg-white text-sm absolute right-2 top-2">✕</button>
        </form>
        <img class="object-cover object-center h-80 w-full"
            src="{{ $product?->photo_url ? asset('storage/' . $product?->photo_url) : 'http://placehold.it/100x100' }}"
            alt="avatar">
        <div class="p-5">
            <h1 class="text-base font-medium text-black">{{ $product?->name }}</h1>
            {{-- <div class="py-1">
                <span class="badge bg-gray-100 border-none text-green-700">Badge</span>
            </div> --}}
            <p class="py-2 text-sm text-gray-700">{{ $product?->description }}</p>

            <div class="flex items-center justify-end text-black">
                <h1 class="text-base text-black font-medium">{{ $product?->price }}</h1>
            </div>
        </div>
    </div>
</dialog>
