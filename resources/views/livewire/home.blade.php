<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    <x-layouts.navigation />

    <main class="container px-5 mx-auto">
        <div class="w-full py-11 space-y-10">
            <div class="max-w-4xl mx-auto space-y-7">
                <div class="w-full">
                    <div class="max-w-full">
                        <h2 class="text-2xl font-medium text-black">Menus</h2>
                    </div>
                    <div class="my-6 justify-between gap-2 xs:flex md:mt-10">
                        <div class="flex gap-2">
                            <div class="mb-2 xs:mb-0 md:!w-auto">
                                <div class="w-full">
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
                            </div>
                            <div class="mb-2 xs:mb-0 md:!w-auto">
                                <div class="w-full">
                                    <button
                                        class="btn rounded-full text-black bg-white border border-sand hover:border-chalk hover:bg-chalk active:border-chalk active:bg-chalk"
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
                    </div>
                    <div class="space-y-5">
                        @foreach ($categories as $category)
                            <livewire:components.cards.category-card :key="$category->id" :category="$category" />
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- You can open the modal using ID.showModal() method -->
    <livewire:components.modals.category-modal key="{{ $categories->count() }}" />
    <livewire:components.modals.product-modal key="{{ $categories->count() + 2 }}" />

    <script>
        document.addEventListener('livewire:initialized', () => {
            Livewire.on('category-edit', (event) => {
                document.getElementById('category').showModal()
            });

            Livewire.on('category-show-modal', (event) => {
                document.getElementById('category').showModal()
            });

            Livewire.on('product-show-modal', (event) => {
                document.getElementById('product').showModal()
            });
        });
    </script>
</div>
