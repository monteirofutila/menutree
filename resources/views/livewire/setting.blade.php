<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}
    <x-layouts.navigation />

    <main class="container px-5 mx-auto bg-white">
        <div class="w-full py-11 space-y-10">
            <div class="max-w-xl mx-auto space-y-7">
                <div class="w-full">
                    <div class="space-y-20">
                        <livewire:components.profile-photo :user="$user" />
                        <livewire:components.profile-information :user="$user" />
                        <livewire:components.update-password :user="$user" />
                        <livewire:components.delete-account :user="$user" />
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
