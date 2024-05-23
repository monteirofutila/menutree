{{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
<dialog wire:ignore.self id="product" class="modal" role="dialog">
    <div class="modal-box w-11/12 max-w-xl">
        <form method="dialog" class="modal-backdrop">
            <button class="btn btn-sm btn-circle bg-white text-sm absolute right-2 top-2">✕</button>
        </form>
        <div class="mt-10">
            <div class="pt-4">
                <div class="text-center">
                    @error('photo')
                        <span class="error">{{ $message }}</span>
                    @enderror
                </div>
                <div
                    class="relative m-auto mb-4 flex aspect-[1/1.2] w-40 cursor-pointer items-center justify-center rounded-[30px] bg-marble hover:ring-2 hover:ring-sand">
                    <button wire:click="$dispatch('image-preview')"
                        class="relative flex h-full w-full grow items-center">
                        <input id="uploadInput" wire:model="photo" type="file" class="hidden" accept="image/*" />
                        <img class="absolute inset-x-0 inset-y-0 h-full w-full rounded-[30px] object-cover"
                            src="{{ $photo ? $photo->temporaryUrl() : 'http://placehold.it/100x100' }}" alt="">
                    </button>
                    <div
                        class="pointer-events-none absolute bottom-2 right-2 z-10 flex h-10 w-10 items-center justify-center rounded-full border border-solid bg-black/30 text-white backdrop-blur-sm">
                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg" class=" " role="img" aria-hidden="false"
                            aria-labelledby="ltclid206_title ">
                            <title id="ltclid206_title">Edit</title>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M2 14V11.7071L9.5 4.20708L11.7929 6.49998L4.29289 14H2ZM12.5 5.79287L13.7929 4.49998L11.5 2.20708L10.2071 3.49998L12.5 5.79287ZM11.1464 1.14642L1.14645 11.1464L1 11.5V14.5L1.5 15H4.5L4.85355 14.8535L14.8536 4.85353V4.14642L11.8536 1.14642H11.1464Z"
                                fill="currentColor"></path>
                        </svg>
                    </div>
                </div>
                <div class="space-y-8">
                    <div class="space-y-2">
                        <div class="mb-2">
                            <input type="text" placeholder="Nome do produto" wire:model="name"
                                class="input input-bordered w-full" />
                            <div>
                                @error('name')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-2">
                            <input type="text" placeholder="Descrição" wire:model="description"
                                class="input input-bordered w-full" />
                            <div>
                                @error('description')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-0">
                            <input type="number" wire:model.number="price" placeholder="Preço"
                                class="input input-bordered">
                            <div>
                                @error('price')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <label class="group w-fit flex justify-center gap-3 align-center text-sm cursor-pointer">
                        <input type="checkbox" wire:model="is_stock" class="toggle" />
                        <span class="text-black ml-md self-center">Está em estoque?</span>
                        <div>
                            @error('is_stock')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </label>
                    <div class="space-y-4">
                        <h2 class="text-black text-md font-semibold leading-heading mb-2">Selecione categoria</h2>
                        <div class="flex flex-col gap-4">
                            @foreach (auth()->user()->categories as $value)
                                <label for="{{ $value->id }}"
                                    class="group w-fit flex justify-center gap-3 align-center text-sm cursor-pointer">
                                    <input type="radio" wire:model="category_id" value="{{ $value->id }}"
                                        class="radio" />
                                    <span class="text-black">{{ $value->name }}</span>
                                </label>
                            @endforeach
                            <div>
                                @error('category_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-action">
                <div class="mt-4 flex gap-2">
                    <div class="w-full">
                        <button
                            class="btn btn-block bg-amber-600 w-full px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-white"
                            wire:click="store">
                            <span class="text-base">Adicionar produto</span>
                        </button>
                    </div>
                    {{-- <div>
                            <button
                                class="btn px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-black bg-white border border-sand w-fit"
                                type="button"><span class="flex items-center justify-center"><span class="block"><svg
                                            width="16" height="16" viewBox="0 0 16 16" fill="none"
                                            xmlns="http://www.w3.org/2000/svg" class=" " role="img"
                                            aria-hidden="true" aria-labelledby=" ">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.83341 -0.000488281L6.47986 0.145958L5.14653 1.47929L5.00008 1.83284V3H0.5H0V4H0.5H2.00002L2.00008 15.4995L2.50008 15.9995H13.5001L14.0001 15.4995L14 4H15.5H16V3H15.5H11.0001V1.83284L10.8536 1.47929L9.5203 0.145958L9.16675 -0.000488281H6.83341ZM10.0001 3V2.03995L8.95964 0.999512H7.04052L6.00008 2.03995V3H10.0001ZM5.00008 4H3.00002L3.00008 14.9995H13.0001L13 4H11.0001H10.0001H6.00008H5.00008ZM7 7V7.5V11.5V12H6V11.5V7.5V7H7ZM10 7.5V7H9V7.5V11.5V12H10V11.5V7.5Z"
                                                fill="currentColor"></path>
                                        </svg></span><span class="block text-md font-semibold sr-only">Delete
                                        collection</span></span>
                            </button>
                        </div> --}}
                </div>
            </div>
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

</dialog>
