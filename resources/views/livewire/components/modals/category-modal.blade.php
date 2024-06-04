{{-- The Master doesn't talk, he acts. --}}
<dialog wire:ignore.self id="category" class="modal" role="dialog">
    <div class="modal-box w-11/12 max-w-4xl">
        <form method="dialog" class="modal-backdrop">
            <button wire:click="$dispatch('category-close-modal')"
                class="btn btn-sm btn-circle bg-white text-sm absolute right-2 top-2">✕</button>
        </form>
        <div class="mt-10">
            <div class="mb-10 w-full">
                <input type="text" placeholder="Nome da categoria" wire:model="name"
                    class="input input-bordered w-full" />
                <div>
                    @error('name')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            @if ($category)
                <div class="mb-10 w-full">
                    <button
                        class="btn px:md rounded-full outline-none text-black bg-white border border-sand hover:border-chalk hover:bg-chalk"
                        wire:click="$dispatch('product-show-modal', { category_id: '{{ $category->id }}' })">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 16 16" fill="none"
                            stroke="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.5 8.5V16H8.5V8.5H16V7.5H8.5V0H7.5V7.5H0V8.5H7.5Z"></path>
                        </svg>
                        <span class="text-base">Adicionar produtos</span>
                    </button>
                </div>

                @if ($category->products->count())
                    <div class="w-full">
                        <div class="max-w-full">
                            <h2 class="font-semibold text-black text-md leading-heading">Produtos
                                ({{ $category->products->count() }})</h2>
                        </div>
                        <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 py-3">
                            @foreach ($category->products as $product)
                                <livewire:components.cards.product-card :key="$product->id" :product="$product" />
                            @endforeach
                        </div>
                    </div>

                    <livewire:components.modals.product-delete-modal />
                @else
                    <div class="relative h-72 w-72">
                        <div
                            class="absolute -top-[16px] left-8 h-8 w-8 origin-center rotate-45 rounded-tl-[8px] border-l-[2px] border-t-[2px] border-dashed border-sand bg-white">
                        </div>
                        <div
                            class="flex h-72 w-72 max-w-full items-center justify-center rounded-[8px] border-[2px] border-dashed border-sand p-4 text-sm font-semibold text-concrete">
                            Adicione produtos e conteúdo</div>
                    </div>
                @endif

            @endif
            <div class="modal-action">
                <div class="flex gap-2">

                    @if ($category)
                        <button
                            class="btn px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-black bg-white border border-sand w-fit"
                            type="button" wire:click="$dispatch('category-delete-modal')">
                            <span class="flex items-center justify-center">
                                <span class="block">
                                    <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                        xmlns="http://www.w3.org/2000/svg" class=" " role="img"
                                        aria-hidden="true" aria-labelledby=" ">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M6.83341 -0.000488281L6.47986 0.145958L5.14653 1.47929L5.00008 1.83284V3H0.5H0V4H0.5H2.00002L2.00008 15.4995L2.50008 15.9995H13.5001L14.0001 15.4995L14 4H15.5H16V3H15.5H11.0001V1.83284L10.8536 1.47929L9.5203 0.145958L9.16675 -0.000488281H6.83341ZM10.0001 3V2.03995L8.95964 0.999512H7.04052L6.00008 2.03995V3H10.0001ZM5.00008 4H3.00002L3.00008 14.9995H13.0001L13 4H11.0001H10.0001H6.00008H5.00008ZM7 7V7.5V11.5V12H6V11.5V7.5V7H7ZM10 7.5V7H9V7.5V11.5V12H10V11.5V7.5Z"
                                            fill="currentColor"></path>
                                    </svg>
                                </span>
                                <span class="block text-md font-semibold sr-only">Deletecollection</span>
                            </span>
                        </button>

                        <livewire:components.modals.category-delete-modal :category_id="$category->id" />
                    @endif

                    <div class="w-full">
                        <button
                            class="btn bg-amber-600 px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-white md:!w-auto md:px-8"
                            wire:click="save">
                            <span class="text-base">Salvar</span>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</dialog>

@push('js')
    <script>
        document.addEventListener('livewire:initialized', () => {

            Livewire.on('category-delete-modal', (event) => {
                document.getElementById('category_delete').showModal()
            });

            Livewire.on('confirm-deletion', (event) => {
                document.getElementById('product_delete').showModal()
            });

            Livewire.on('product-destroy', (event) => {
                document.getElementById('product_delete').close()
            });

        });
    </script>
@endpush
