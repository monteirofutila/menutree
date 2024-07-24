<div class="card bg-base-100 shadow overflow-hidden">
    <div class="card-body p-4">
        <button class="group w-full hover:cursor-pointer"
            wire:click="$dispatch('category-edit', { category_id: '{{ $category->id }}' })">
            <div class="flex justify-center ">

                @if ($category->products->count())
                    <div class="carousel rounded-box h-36">
                        @foreach ($category->products as $product)
                            <div class="carousel-item">
                                <img src="{{ asset('storage/' . $product->photo_url) }}" alt="Burger" />
                            </div>
                        @endforeach
                    </div>
                @else
                    <div
                        class="flex h-36 w-full items-center justify-center rounded-xl bg-base-200 font-semibold text-concrete">
                        Adicionar produtos à categoria +</div>
                @endif

            </div>
            <div class="px-4 pb-1 pt-4 text-center">
                <p class="text-black text-md line-clamp-1 font-semibold">{{ $category->name }}</p>
                <p class="text-concrete text-sm ">{{ $category->products()->count() }} Productos</p>
            </div>
        </button>
    </div>
</div>
