<dialog id="productDetails" class="modal" role="dialog">
    {{-- Because she competes with no one, no one can compete with her. --}}
    <div class="modal-box p-0 max-w-80 bg-white">
        <form method="dialog" class="modal-backdrop">
            <button class="btn btn-xs btn-circle bg-white text-xs absolute right-2 top-2">✕</button>
        </form>
        <img class="object-cover object-center h-80 w-full"
            src="https://i.pinimg.com/736x/b7/1c/d7/b71cd74d32541264c0a6a228dd658c82.jpg" alt="avatar">
        <div class="p-5">
            <h1 class="text-base font-medium text-black">{{ $name }}</h1>
            <div class="py-1">
                <span class="badge bg-gray-100 border-none text-green-700">Badge</span>
            </div>
            <p class="py-2 text-sm text-gray-700">Full Stack maker & UI / UX
                Designer ,
                love hip hop music...</p>

            <div class="flex items-center justify-end text-black">
                <h1 class="text-base text-black font-medium">{{ $price }}</h1>
            </div>
        </div>
    </div>
</dialog>
