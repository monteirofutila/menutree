<div class="navbar border-b">
    <div class="navbar-start">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
        </div>
        <a href="#" class="font-semibold text-lg md:text-xl">Menutree</a>
    </div>
    <div class="navbar-end">
        <ul class="menu menu-horizontal hidden lg:flex rounded-box">
            <li class="active">
                <a href="{{ route('home') }}" wire:navigate>
                    <span class="text-base">Início</span>
                </a>
            </li>
            <li>
                <a>
                    <span class="text-base">Análise</span>
                </a>
            </li>
        </ul>
        <div class="dropdown dropdown-end">
            <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                <div class="w-10 rounded-full">

                    <img alt="Tailwind CSS Navbar component"
                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />

                </div>
            </div>
            <ul tabindex="0" class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                <li><a href="{{ route('setting') }}" wire:navigate>Settings</a></li>
                <li><a>Logout</a></li>
            </ul>
        </div>
    </div>
</div>
