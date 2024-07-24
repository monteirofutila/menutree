{{-- In work, do what you enjoy. --}}
<main class="container px-5 mx-auto h-screen flex items-center bg-white">
    <div class="w-full py-11">
        <div class="max-w-xl mx-auto">
            <div class="w-full">
                <div class="max-w-full mb-12">
                    <h2
                        class="text-black text-[45px] font-extrabold leading-heading tracking-[-1px] lg:tracking-[-2px] text-center">
                        Bem vindo de volta!</h2>
                    <p class="text-concrete text-md text-center">Faça login no seu oMenu</p>
                </div>
                <form wire:submit="login">
                    <div class="w-full mb-2">
                        <input type="text" placeholder="Email" wire:model="email"
                            class="input input-bordered w-full bg-white text-black focus:outline-none focus:border-black focus:ring-black focus:ring-1" />
                        <div>
                            @error('email')
                                <span class="error text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full mb-2">
                        <input type="password" placeholder="Senha" wire:model="password"
                            class="input input-bordered w-full bg-white text-black focus:outline-none focus:border-black focus:ring-black focus:ring-1" />
                        <div>
                            @error('password')
                                <span class="error text-red-600">{{ $message }}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="w-full mt-10">
                        <button type="submit"
                            class="btn btn-block bg-[#ffbc0d] hover:bg-yellow-600 active:bg-yellow-700 rounded-full outline-none focus-visible:ring-2 focus-visible:ring-offset-2 focus-visible:ring-black antialiased text-white">
                            <span class="text-base">Entrar</span>
                        </button>
                    </div>
                    <div class="w-full mt-6 text-center">
                        <p class="text-concrete text-md">Não tem uma conta?
                            <a href="{{ route('register') }}" wire:navigate
                                class="undefined text-sm text-primary inline-flex focus-visible:outline focus-visible:outline-2 focus-visible:outline-black focus-visible:outline-offset-2 underline">Inscreve-se</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>
