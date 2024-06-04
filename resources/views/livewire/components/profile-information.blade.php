<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="max-w-full mb-6">
        <h2 class="text-lg font-semibold">Informação do Perfil</h2>
        <p class="mt-2 text-concrete text-sm">Atualize as informações de perfil e endereço de e-mail da sua conta.</p>
    </div>
    <form wire:submit="update">
        <div class="w-full mb-2">
            <input type="text" placeholder="Nome" wire:model="name" class="input input-bordered w-full" />
            <div>
                @error('name')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full mb-2">
            <input type="text" placeholder="Nome de usuário" wire:model="username"
                class="input input-bordered w-full" />
            <div>
                @error('username')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full mb-2">
            <input type="email" placeholder="Email" wire:model="email" class="input input-bordered w-full" />
            <div>
                @error('email')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full mb-6">
            <input type="text" placeholder="Bio" wire:model="bio" class="input input-bordered w-full" />
            <div>
                @error('bio')
                    <span class="error">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full">
            <button
                class="btn rounded-full bg-white text-amber-600 border-2 border-amber-600 outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased">Salvar</button>
        </div>
    </form>
</div>
