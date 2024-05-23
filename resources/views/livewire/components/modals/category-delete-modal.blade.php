<dialog id="category-delete" class="modal" role="dialog">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="modal-box w-11/12 max-w-md">
        <form method="dialog" class="modal-backdrop">
            <button class="btn btn-sm btn-circle bg-white text-sm absolute right-2 top-2">✕</button>
        </form>
        <div class="mt-10">
            <div>
                <p class="text-concrete text-base">Tem certeza de que deseja excluir esta categoria? Essa ação não pode
                    ser desfeita.</p>
            </div>
            <div class="modal-action">
                <div class="flex justify-center gap-2 w-full">
                    <button
                        class="btn md:w-1/2 px-md rounded-full text-black font-semibold bg-white border border-sand hover:border-chalk hover:bg-chalk active:border-chalk active:bg-chalk">
                        <span class="text-base">Cancelar</span>
                    </button>
                    <button wire:click="$dispatch('category-destroy', {category_id: '{{ $category_id }}'})"
                        class="btn md:w-1/2 bg-red-700 px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-white">
                        <span class="text-base">Excluir Categoria</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</dialog>
