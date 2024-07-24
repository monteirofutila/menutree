<div>
    {{-- The best athlete wants his opponent at his best. --}}
    <div class="max-w-full mb-6">
        <h2 class="text-lg font-semibold">Atualizar senha</h2>
        <p class="mt-2 text-concrete text-sm">Certifique-se de que sua conta esteja usando uma senha longa e aleatória
            para permanecer segura.</p>
    </div>
    <form wire:submit="update">
        <div class="w-full mb-2">
            <input type="text" placeholder="Senha atual" wire:model="current_password"
                class="input input-bordered w-full bg-white text-black focus:outline-none focus:border-black focus:ring-black focus:ring-1" />
            <div>
                @error('current_password')
                    <span class="error text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full mb-2">
            <input type="password" placeholder="Nova senha" wire:model="password"
                class="input input-bordered w-full bg-white text-black focus:outline-none focus:border-black focus:ring-black focus:ring-1" />
            <div>
                @error('password')
                    <span class="error text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full mb-6">
            <input type="password" placeholder="Confirme sua senha" wire:model="password_confirmation"
                class="input input-bordered w-full bg-white text-black focus:outline-none focus:border-black focus:ring-black focus:ring-1" />
            <div>
                @error('password_confirmation')
                    <span class="error text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full">
            <button type="submit"
                class="btn bg-white hover:bg-amber-100 text-[#ffbc0d] border-2 border-[#ffbc0d] hover:border-[#ffbc0d] rounded-full px-md outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased md:!w-auto md:px-8">
                Salvar</button>
        </div>
    </form>
</div>
