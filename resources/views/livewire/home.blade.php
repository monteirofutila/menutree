<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <x-layouts.navigation />

    <main class="container px-5 mx-auto bg-white">
        <div class="w-full py-11 space-y-10">
            <div class="max-w-4xl mx-auto space-y-7">
                <div class="w-full">
                    <div class="max-w-full">
                        <div class="py-3 px-4 text-md shadow-inner-bottom-light rounded-3xl md:flex-row bg-amber-100">
                            <div class="flex gap-4 xl:items-center">
                                <div class="flex-1 flex flex-col gap-4 md:flex-row items-center">
                                    <div class="grow flex flex-col gap-1 xl:flex-row xl:justify-between">
                                        <p>
                                            <span class="font-semibold">🔥 Seu Menutree está no ar: </span>
                                            <a class="underline" href="https://menutr.ee/{{ auth()->user()->username }}"
                                                target="_blank">menutr.ee/{{ auth()->user()->username }}</a>
                                        </p>
                                    </div>
                                    <div>
                                        <button
                                            class="btn bg-white px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-black md:px-8">
                                            <span class="text-base">Copie o URL do Menutree</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="my-6 justify-between gap-2 xs:flex md:mt-10">
                        <div class="flex gap-2 mb-2">
                            @if ($categories->count())
                                <div class="xs:mb-0 md:!w-auto">
                                    <button
                                        class="btn bg-amber-600 px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-white md:!w-auto md:px-8"
                                        wire:click="$dispatch('product-show-modal')">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 16 16"
                                            fill="none" stroke="currentColor">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M7.5 8.5V16H8.5V8.5H16V7.5H8.5V0H7.5V7.5H0V8.5H7.5Z"></path>
                                        </svg>
                                        <span class="text-base">Produtos</span>
                                    </button>
                                </div>
                            @endif
                            <div class="xs:mb-0 md:!w-auto">
                                <button
                                    class="btn px-md rounded-full text-black bg-white border border-sand hover:border-chalk hover:bg-chalk active:border-chalk active:bg-chalk md:!w-auto md:px-8"
                                    wire:click="$dispatch('category-show-modal')">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 16 16"
                                        fill="none" stroke="currentColor">
                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                            d="M7.5 8.5V16H8.5V8.5H16V7.5H8.5V0H7.5V7.5H0V8.5H7.5Z"></path>
                                    </svg>
                                    <span class="text-base">Categorias</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="space-y-5">
                        @foreach ($categories as $category)
                            <livewire:components.cards.category-card :key="$category->id" :category_id="$category->id" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- You can open the modal using ID.showModal() method -->
    <livewire:components.modals.category-modal key="{{ $categories->count() }}" />
    <livewire:components.modals.product-modal key="{{ $products->count() }}" />

    @push('js')
        <script>
            document.addEventListener('livewire:initialized', () => {
                Livewire.on('category-edit', (event) => {
                    document.getElementById('category').showModal()
                });

                Livewire.on('category-show-modal', (event) => {
                    document.getElementById('category').showModal()
                });

                Livewire.on('category-close-modal', (event) => {
                    document.getElementById('category').close()
                });

                Livewire.on('product-show-modal', (event) => {
                    document.getElementById('product').showModal()
                });
            });
        </script>
    @endpush

</div>
