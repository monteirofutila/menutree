{{-- In work, do what you enjoy. --}}
<main class="container px-5 mx-auto h-screen flex items-center bg-white">
    <div class="w-full py-11">
        <div class="max-w-xl mx-auto">
            <div class="w-full">
                <div class="max-w-full mb-12">
                    <h2
                        class="text-black text-[45px] font-extrabold leading-heading tracking-[-1px] lg:tracking-[-2px] text-center">
                        Junte-se ao Menutree</h2>
                    <p class="text-concrete text-md text-center">Cadastre-se gratuitamente!</p>
                </div>
                <form wire:submit="register">
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
                        <input type="email" placeholder="Email" wire:model="email"
                            class="input input-bordered w-full" />
                        <div>
                            @error('email')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full mb-2">
                        <input type="password" placeholder="Senha" wire:model="password"
                            class="input input-bordered w-full" />
                        <div>
                            @error('password')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full mb-2">
                        <input type="password" placeholder="Confirme sua senha" wire:model="password_confirmation"
                            class="input input-bordered w-full" />
                        <div>
                            @error('password_confirmation')
                                <span class="error">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full mt-10">
                        <button type="submit"
                            class="btn btn-block bg-amber-600 rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-white">
                            <span class="text-base">Criar uma conta</span>
                        </button>
                    </div>
                    <div class="w-full mt-6 text-center">
                        <p class="text-concrete text-md">Já tem uma conta?
                            <a href="{{ route('login') }}" wire:navigate
                                class="undefined text-sm text-primary inline-flex focus-visible:outline focus-visible:outline-2 focus-visible:outline-black focus-visible:outline-offset-2 underline">Conecte-se</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
