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
                class="input input-bordered w-full" />
            <div>
                @error('current_password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full mb-2">
            <input type="password" placeholder="Nova senha" wire:model="password" class="input input-bordered w-full" />
            <div>
                @error('password')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full mb-6">
            <input type="password" placeholder="Confirme sua senha" wire:model="password_confirmation"
                class="input input-bordered w-full" />
            <div>
                @error('password_confirmation')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full">
            <button type="submit"
                class="btn bg-white rounded-full text-amber-600 border-2 border-amber-600 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased">
                Salvar</button>
        </div>
    </form>
</div>
