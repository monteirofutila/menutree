<div class="navbar border-b">
    <div class="navbar-start">
        <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
            </svg>
        </div>
        <a class="btn btn-ghost text-xl">Menutree</a>
    </div>
    <div class="navbar-end">
        <ul class="menu menu-horizontal hidden lg:flex rounded-box">
            <li class="active">
                <a>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path d="M24 5.25L0 5.25V3.75L24 3.75V5.25Z" fill="currentColor"></path>
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 9.5L0.75 8.75H23.25L24 9.5V14.5L23.25 15.25H0.75L0 14.5V9.5ZM1.5 10.25V13.75H22.5V10.25H1.5Z"
                            fill="currentColor"></path>
                        <path d="M0 20.25L24 20.25V18.75L0 18.75V20.25Z" fill="currentColor"></path>
                    </svg> --}}
                    <span class="text-base">Início</span>
                </a>
            </li>
            <li>
                <a>
                    {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M1.5 10.5L0 12V21.681L1.5 23.181H3.68506V23.1874H19.5161V23.181H22.5148L24.0148 21.681V2.31903L22.5148 0.819031H16.5732L15.0732 2.31903V5.6595H9.03656L7.53656 7.1595V10.5H1.5ZM16.5732 2.31903H22.5148V21.681H16.5732V2.31903ZM14.9782 7.1595H9.03656V21.681H14.9782V7.1595ZM7.44168 12H1.5V21.681H7.44168V12Z"
                            fill="currentColor"></path>
                    </svg> --}}
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
                <li><a>Settings</a></li>
                <li><a>Logout</a></li>
            </ul>
        </div>
    </div>
</div>
