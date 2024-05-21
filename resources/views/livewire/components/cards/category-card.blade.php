<div class="card bg-base-100 shadow overflow-hidden">
    <div class="card-body p-4">
        <button class="group w-full hover:cursor-pointer"
            wire:click="$dispatch('category-edit', { category_id: '{{ $category->id }}' })">
            <div class="flex justify-center ">
                <div
                    class="flex h-36 w-full items-center justify-center rounded-xl bg-base-200 font-semibold text-concrete">
                    Add products to collection +</div>
            </div>
            <div class="px-4 pb-1 pt-4 text-center">
                <p class="text-black text-md line-clamp-1 font-semibold">{{ $category->name }}</p>
                <p class="text-concrete text-sm ">0 Products</p>
            </div>
        </button>
    </div>
</div>
