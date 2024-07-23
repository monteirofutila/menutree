{{-- Nothing in the world is as soft and yielding as water. --}}
<dialog wire:ignore.self id="qrcode" class="modal" role="dialog">
    <div class="modal-box w-11/12 max-w-sm">
        <form method="dialog" class="modal-backdrop">
            <button class="btn btn-sm btn-circle bg-white text-sm absolute right-2 top-2">✕</button>
        </form>
        <div class="mt-10 w-full space-y-5">
            <div>
                <p class="text-concrete text-base">Aqui está o seu código QR Menutree exclusivo que direcionará as
                    pessoas para o seu Menutree quando digitalizado.</p>
            </div>
            <div class="w-full flex items-center justify-center">
                {!! QrCode::size(180)->generate(route('profile', auth()->user()->username)) !!}
            </div>
            <div class="w-full flex justify-center items-center">
                <p class="text-black text-md block truncate">
                    <font style="vertical-align: inherit;">
                        <font style="vertical-align: inherit;">menutr.ee/{{ auth()->user()->username }}</font>
                    </font>
                </p>
            </div>
            <div class="modal-action">
                <div class="w-full flex items-center justify-center">
                    <button wire:click="download"
                        class="btn bg-white hover:bg-amber-100 text-[#ffbc0d] border-2 border-[#ffbc0d] hover:border-[#ffbc0d] rounded-full px-md outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased md:!w-auto md:px-8">
                        <span class="text-base">Download</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</dialog>
