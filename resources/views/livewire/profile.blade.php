<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    @auth
        <x-layouts.navigation />
    @endauth

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
                <a class="text-slate-400" href="{{ route('profile', $user->username) }}" wire:navigate="">
                    <p class="text-base"> {{ '@' . $user->username }}</p>
                </a>
                <p class="text-base text-black mt-[2px]">{{ $user->bio }}</p>
            </div>
            <div class="max-w-5xl mx-auto space-y-7">
                @foreach ($user->categories as $category)
                    <div class="w-full">
                        <div class="max-w-full">
                            <h2 class="text-xl text-black">{{ $category->name }}</h2>
                            {{-- <p class="text-sm text-black">Software Engineer at MTDHOUSE</p> --}}
                        </div>
                        <div class="flex overflow-x-auto space-x-5 py-4">
                            @foreach ($category->products as $value)
                                <div class="card flex-none w-full max-w-48 bg-white shadow-lg overflow-hidden relative"
                                    wire:click="$dispatch('show-details', { product_id: '{{ $value->id }}' })">
                                    <div class="h-full">
                                        <img class="object-cover object-center w-full h-48 mx-auto"
                                            src="{{ asset('storage/' . $value->photo_url) }}" alt="avatar">
                                        <div class="p-3">
                                            <h1 class="text-base font-medium text-black leading-heading">
                                                {{ $value->name }}</h1>
                                            <p class="mt-2 text-sm text-concrete text-gray-700">
                                                {{ $value->description }}</p>
                                        </div>
                                    </div>
                                    <div class="flex items-center p-3 self-end justify-end w-full">
                                        <h1 class="text-sm font-medium text-black">{{ $value->price }} Kz
                                        </h1>
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
    <livewire:components.profile.modals.product-detail-modal />

    @push('js')
        <script>
            document.addEventListener('livewire:initialized', () => {
                Livewire.on('show-details', (event) => {
                    document.getElementById('productDetails').showModal()
                });
            });
        </script>
    @endpush
</div>
