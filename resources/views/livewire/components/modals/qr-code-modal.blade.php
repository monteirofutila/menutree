{{-- Nothing in the world is as soft and yielding as water. --}}
<dialog wire:ignore.self id="qrcode" class="modal" role="dialog">
    <div class="modal-box w-11/12 max-w-md">
        <div class="w-full">
            <img loading="lazy" src="{{ asset('assets/pinkary_monteirofutila.png') }}" class="mx-auto w-full max-w-lg">
        </div>

        <div class="modal-action">
            <div class="flex justify-end gap-2 w-full">
                <button onclick="qrcode.close()"
                    class="btn rounded-full text-black font-semibold bg-white border border-sand hover:border-chalk hover:bg-chalk active:border-chalk active:bg-chalk">
                    Cancelar
                </button>

                <button
                    class="btn bg-white text-amber-600 rounded-full border-2 border-amber-600 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased">
                    Download
                </button>
            </div>
        </div>
    </div>
</dialog>
