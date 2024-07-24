<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="max-w-full mb-6">
        <h2 class="text-lg font-semibold">Informação do Perfil</h2>
        <p class="mt-2 text-concrete text-sm">Atualize as informações de perfil e endereço de e-mail da sua conta.</p>
    </div>
    <form wire:submit="update">
        @csrf
        <div class="w-full mb-2">
            <input type="text" placeholder="Nome" wire:model="name" name="name"
                class="input input-bordered w-full bg-white text-black focus:outline-none focus:border-black focus:ring-black focus:ring-1" />
            <div>
                @error('name')
                    <span class="error text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full mb-2">
            <input type="text" placeholder="Nome de usuário" wire:model="username" name="username"
                class="input input-bordered w-full bg-white text-black focus:outline-none focus:border-black focus:ring-black focus:ring-1" />
            <div>
                @error('username')
                    <span class="error text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full mb-2">
            <input type="email" placeholder="Email" wire:model="email" name="email"
                class="input input-bordered w-full bg-white text-black focus:outline-none focus:border-black focus:ring-black focus:ring-1" />
            <div>
                @error('email')
                    <span class="error text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full mb-6">
            <input type="text" placeholder="Bio" wire:model="bio" name="bio"
                class="input input-bordered w-full bg-white text-black focus:outline-none focus:border-black focus:ring-black focus:ring-1" />
            <div>
                @error('bio')
                    <span class="error text-red-600">{{ $message }}</span>
                @enderror
            </div>
        </div>
        <div class="w-full">
            <button type="submit"
                class="btn bg-white hover:bg-amber-100 text-[#ffbc0d] border-2 border-[#ffbc0d] hover:border-[#ffbc0d] rounded-full px-md outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased md:!w-auto md:px-8">Salvar</button>
        </div>
    </form>
</div>
