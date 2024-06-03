<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <main class="container px-5 mx-auto bg-white">
        <div class="w-full py-11 space-y-10">
            <div class="px-5 text-center w-full md:max-w-md mx-auto">
                <div class="mb-4 relative mx-auto h-32 w-32">
                    <img src="{{ $user->photo_url ? asset('storage/' . $user->photo_url) : 'http://placehold.it/100x100' }}"
                        alt="" class="rounded-full mx-auto size-32 object-cover">
                </div>

                <div class="mx-3 max-w-full flex items-center justify-center">
                    <h2 class="text-2xl font-bold text-black">{{ $user->name }}</h2>
                </div>
                <p class="text-base text-black mt-[2px]">{{ $user->bio }}</p>
            </div>
            <div class="max-w-5xl mx-auto space-y-7">
                @foreach ($user->categories as $category)
                    <div class="w-full">
                        <div class="max-w-full">
                            <h2 class="text-2xl font-medium text-black">{{ $category->name }}</h2>
                            {{-- <p class="text-sm text-black">Software Engineer at MTDHOUSE</p> --}}
                        </div>
                        <div class="flex overflow-x-auto space-x-5 py-4">

                            @foreach ($category->products as $product)
                                <div class="card flex-none max-w-60 bg-white shadow-lg overflow-hidden"
                                    onclick="modal.showModal()">
                                    <img class="object-cover object-center w-full h-48 mx-auto"
                                        src="{{ asset('storage/' . $product->photo_url) }}" alt="avatar">
                                    <div class="p-3">
                                        <h1 class="text-base font-medium text-black">{{ $product->name }}</h1>

                                        <p class="py-2 text-xs text-gray-700">{{ $product->description }}</p>

                                        <div class="flex items-center justify-end text-black">
                                            <h1 class="text-sm text-black font-medium">{{ $product->price }} Kz</h1>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </main>

    <!-- You can open the modal using ID.showModal() method -->
    <dialog id="modal" class="modal" role="dialog">
        <div class="modal-box p-0 max-w-80 bg-white">
            <form method="dialog" class="modal-backdrop">
                <button class="btn btn-xs btn-circle bg-white text-xs absolute right-2 top-2">✕</button>
            </form>
            <img class="object-cover object-center h-80 w-full"
                src="https://i.pinimg.com/736x/b7/1c/d7/b71cd74d32541264c0a6a228dd658c82.jpg" alt="avatar">
            <div class="p-5">
                <h1 class="text-base font-medium text-black">Pizza with Arugula and
                    Prosciutto</h1>
                <div class="py-1">
                    <span class="badge bg-gray-100 border-none text-green-700">Badge</span>
                </div>
                <p class="py-2 text-sm text-gray-700">Full Stack maker & UI / UX
                    Designer ,
                    love hip hop music...</p>

                <div class="flex items-center justify-end text-black">
                    <h1 class="text-base text-black font-medium">4.000,00Kz</h1>
                </div>
            </div>
        </div>
    </dialog>
</div>
