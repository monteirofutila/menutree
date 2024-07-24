<dialog id="product_delete" class="modal" role="dialog">
    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
    <div class="modal-box w-11/12 max-w-md">
        <form method="dialog" class="modal-backdrop">
            <button class="btn btn-sm btn-circle bg-white text-sm absolute right-2 top-2">✕</button>
        </form>
        <div class="mt-10">
            <div>
                <p class="text-concrete text-base">Tem certeza de que deseja excluir este produto? O produto também será
                    removido de todas as coleções em que estiver atualmente.</p>
            </div>
            <div class="modal-action">
                <div class="flex items-center justify-center gap-2 w-full">
                    <button onclick="product_delete.close()"
                        class="btn w-1/2 px-md rounded-full text-black font-semibold bg-white border border-sand hover:border-chalk hover:bg-chalk active:border-chalk active:bg-chalk">
                        <span class="text-base">Cancelar</span>
                    </button>
                    <button wire:click="$dispatch('product-destroy')"
                        class="btn w-1/2 bg-red-600 hover:bg-red-900 px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-white">
                        <span class="text-base">Excluir produto</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</dialog>
