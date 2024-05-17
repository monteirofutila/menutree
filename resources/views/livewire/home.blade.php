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
                                        onclick="my_modal_1.showModal()">
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
                                        onclick="my_modal_2.showModal()">
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
                        <div class="card bg-base-100 shadow overflow-hidden">
                            <div class="card-body p-4">
                                <button class="group w-full hover:cursor-pointer" onclick="my_modal_2.showModal()">
                                    <div class="flex justify-center ">
                                        <div
                                            class="flex h-36 w-full items-center justify-center rounded-xl bg-base-200 font-semibold text-concrete">
                                            Add products to collection +</div>
                                    </div>
                                    <div class="px-4 pb-1 pt-4 text-center">
                                        <p class="text-black text-md line-clamp-1 font-semibold">New Collection</p>
                                        <p class="text-concrete text-sm ">0 Products</p>
                                    </div>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- You can open the modal using ID.showModal() method -->
    <dialog id="my_modal_2" class="modal" role="dialog">
        <div class="modal-box w-11/12 max-w-4xl">
            <form method="dialog" class="modal-backdrop">
                <button class="btn btn-sm btn-circle bg-white text-sm absolute right-2 top-2">✕</button>
            </form>
            <div class="mt-10">
                <div class="mb-10 w-full">
                    <input type="text" placeholder="Nome da categoria" class="input input-bordered w-full" />
                </div>
                <div class="mb-10 w-full">
                    <button
                        class="btn px:md rounded-full outline-none text-black bg-white border border-sand hover:border-chalk hover:bg-chalk">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" viewBox="0 0 16 16" fill="none"
                            stroke="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M7.5 8.5V16H8.5V8.5H16V7.5H8.5V0H7.5V7.5H0V8.5H7.5Z"></path>
                        </svg>
                        <span class="text-base">Add
                            products</span>
                    </button>
                </div>
                <div class="relative h-72 w-72">
                    <div
                        class="absolute -top-[16px] left-8 h-8 w-8 origin-center rotate-45 rounded-tl-[8px] border-l-[2px] border-t-[2px] border-dashed border-sand bg-white">
                    </div>
                    <div
                        class="flex h-72 w-72 max-w-full items-center justify-center rounded-[8px] border-[2px] border-dashed border-sand p-4 text-sm font-semibold text-concrete">
                        Add Products and Content</div>
                </div>
                <div class="modal-action">
                    <div class="flex gap-2">
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
                        <div class="w-full">
                            <button
                                class="btn bg-amber-600 px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-white md:!w-auto md:px-8"
                                type="submit">
                                <span class="text-base">Done</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </dialog>

    <!-- You can open the modal using ID.showModal() method -->
    <dialog id="my_modal_1" class="modal" role="dialog">
        <div class="modal-box w-11/12 max-w-xl">
            <form method="dialog" class="modal-backdrop">
                <button class="btn btn-sm btn-circle bg-white text-sm absolute right-2 top-2">✕</button>
            </form>
            <div class="mt-10">
                <form class="transition">
                    <div class="pt-4">
                        <div
                            class="relative m-auto mb-4 flex aspect-[1/1.2] w-40 cursor-pointer items-center justify-center rounded bg-marble hover:ring-2 hover:ring-sand">
                            <button type="button" class="relative flex h-full w-full grow items-center"><img
                                    class="absolute inset-x-0 inset-y-0 h-full w-full rounded object-cover"
                                    src="https://ugc.production.linktr.ee/72878c2e-f33a-4746-b71c-979ec0ded48e_442272662-2796424877163060-5458440463016674111-n.jpeg?io=true&amp;size=square-fit"
                                    alt=""></button>
                            <div
                                class="pointer-events-none absolute bottom-2 right-2 z-10 flex h-10 w-10 items-center justify-center rounded-md border border-solid bg-black/30 text-white backdrop-blur-sm">
                                <svg width="16" height="16" viewBox="0 0 16 16" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" class=" " role="img"
                                    aria-hidden="false" aria-labelledby="ltclid206_title ">
                                    <title id="ltclid206_title">Edit</title>
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M2 14V11.7071L9.5 4.20708L11.7929 6.49998L4.29289 14H2ZM12.5 5.79287L13.7929 4.49998L11.5 2.20708L10.2071 3.49998L12.5 5.79287ZM11.1464 1.14642L1.14645 11.1464L1 11.5V14.5L1.5 15H4.5L4.85355 14.8535L14.8536 4.85353V4.14642L11.8536 1.14642H11.1464Z"
                                        fill="currentColor"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="space-y-8">
                            <div class="space-y-2">
                                <input type="text" placeholder="Nome da categoria"
                                    class="input input-bordered w-full" />
                                <input type="text" placeholder="Nome da categoria"
                                    class="input input-bordered w-full" />
                                <input min="0.00" step="0.01" type="number" placeholder="Price (optional)"
                                    class="input input-bordered" value="10">
                            </div>
                            <label class="group w-fit flex justify-center gap-3 align-center text-sm cursor-pointer">
                                <input type="checkbox" class="toggle" checked />
                                <span class="text-black ml-md self-center">Visible on store</span>
                            </label>
                            <div class="space-y-4">
                                <h2 class="text-black text-md font-semibold leading-heading mb-2">Collection
                                    (optional)
                                </h2>
                                <div class="flex flex-col gap-4">
                                    <label
                                        class="group w-fit flex justify-center gap-3 align-center text-sm cursor-pointer">
                                        <input type="checkbox" class="checkbox" />
                                        <span class="text-black">New Collection</span>
                                    </label>
                                    <label
                                        class="group w-fit flex justify-center gap-3 align-center text-sm cursor-pointer">
                                        <input type="checkbox" class="checkbox" />
                                        <span class="text-black">New Collection</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-action">
                        <div class="mt-4 flex gap-2">
                            <div class="w-full">
                                <button
                                    class="btn btn-block bg-amber-600 w-full px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-white md:!w-auto md:px-8"
                                    type="submit">
                                    <span class="text-base">Save changes</span>
                                </button>
                            </div>
                            <div>
                                <button
                                    class="btn px-md rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-black bg-white border border-sand w-fit"
                                    type="button"><span class="flex items-center justify-center"><span
                                            class="block"><svg width="16" height="16" viewBox="0 0 16 16"
                                                fill="none" xmlns="http://www.w3.org/2000/svg" class=" "
                                                role="img" aria-hidden="true" aria-labelledby=" ">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6.83341 -0.000488281L6.47986 0.145958L5.14653 1.47929L5.00008 1.83284V3H0.5H0V4H0.5H2.00002L2.00008 15.4995L2.50008 15.9995H13.5001L14.0001 15.4995L14 4H15.5H16V3H15.5H11.0001V1.83284L10.8536 1.47929L9.5203 0.145958L9.16675 -0.000488281H6.83341ZM10.0001 3V2.03995L8.95964 0.999512H7.04052L6.00008 2.03995V3H10.0001ZM5.00008 4H3.00002L3.00008 14.9995H13.0001L13 4H11.0001H10.0001H6.00008H5.00008ZM7 7V7.5V11.5V12H6V11.5V7.5V7H7ZM10 7.5V7H9V7.5V11.5V12H10V11.5V7.5Z"
                                                    fill="currentColor"></path>
                                            </svg></span><span class="block text-md font-semibold sr-only">Delete
                                            collection</span></span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </dialog>
</div>
