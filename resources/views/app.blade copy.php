<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ $title ?? 'Page Title' }}</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-base-200 h-screen">

    <div class="navbar border-b-2">
        <div class="navbar-start">
            <div tabindex="0" role="button" class="btn btn-ghost lg:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" />
                </svg>
            </div>
            <a class="btn btn-ghost text-xl">Menutree</a>
        </div>
        <div class="navbar-end">
            <ul class="menu menu-horizontal hidden lg:flex rounded-box">
                <li class="active">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"
                                stroke="#CCCCCC" stroke-width="0.24000000000000005"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path
                                    d="M3 6C3 4.34315 4.34315 3 6 3H7C8.65685 3 10 4.34315 10 6V7C10 8.65685 8.65685 10 7 10H6C4.34315 10 3 8.65685 3 7V6Z"
                                    stroke="#000000" stroke-width="2"></path>
                                <path
                                    d="M14 6C14 4.34315 15.3431 3 17 3H18C19.6569 3 21 4.34315 21 6V7C21 8.65685 19.6569 10 18 10H17C15.3431 10 14 8.65685 14 7V6Z"
                                    stroke="#000000" stroke-width="2"></path>
                                <path
                                    d="M14 17C14 15.3431 15.3431 14 17 14H18C19.6569 14 21 15.3431 21 17V18C21 19.6569 19.6569 21 18 21H17C15.3431 21 14 19.6569 14 18V17Z"
                                    stroke="#000000" stroke-width="2"></path>
                                <path
                                    d="M3 17C3 15.3431 4.34315 14 6 14H7C8.65685 14 10 15.3431 10 17V18C10 19.6569 8.65685 21 7 21H6C4.34315 21 3 19.6569 3 18V17Z"
                                    stroke="#000000" stroke-width="2"></path>
                            </g>
                        </svg>
                        <span class="text-base">Categorias</span>
                    </a>
                </li>
                <li>
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path d="M24 5.25L0 5.25V3.75L24 3.75V5.25Z" fill="currentColor"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M0 9.5L0.75 8.75H23.25L24 9.5V14.5L23.25 15.25H0.75L0 14.5V9.5ZM1.5 10.25V13.75H22.5V10.25H1.5Z"
                                fill="currentColor"></path>
                            <path d="M0 20.25L24 20.25V18.75L0 18.75V20.25Z" fill="currentColor"></path>
                        </svg>
                        <span class="text-base">Produtos</span>
                    </a>
                </li>
                <li class="active">
                    <a>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M1.5 10.5L0 12V21.681L1.5 23.181H3.68506V23.1874H19.5161V23.181H22.5148L24.0148 21.681V2.31903L22.5148 0.819031H16.5732L15.0732 2.31903V5.6595H9.03656L7.53656 7.1595V10.5H1.5ZM16.5732 2.31903H22.5148V21.681H16.5732V2.31903ZM14.9782 7.1595H9.03656V21.681H14.9782V7.1595ZM7.44168 12H1.5V21.681H7.44168V12Z"
                                fill="currentColor"></path>
                        </svg>
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
                <ul tabindex="0"
                    class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                    <li><a>Settings</a></li>
                    <li><a>Logout</a></li>
                </ul>
            </div>
        </div>
    </div>

    <main class="container px-5 mx-auto">
        <div class="w-full py-11 space-y-10">
            <div class="max-w-2xl mx-auto space-y-7">
                <div class="w-full">
                    <div class="max-w-full">
                        <h2 class="text-2xl font-medium text-black">Perfil</h2>
                    </div>
                    <div class="py-4">
                        <div class="card bg-base-100 shadow-xl">
                            <div class="card-body">
                                <label class="form-control w-full">
                                    <div class="label">
                                        <span class="label-text">Nome</span>
                                    </div>
                                    <input type="text" placeholder="Type here" class="input input-bordered w-full" />
                                    <div class="label">
                                        <span class="label-text-alt">Bottom Left label</span>
                                    </div>
                                </label>
                                <label class="form-control w-full">
                                    <div class="label">
                                        <span class="label-text">Descrição</span>
                                    </div>
                                    <input type="text" placeholder="Type here" class="input input-bordered w-full" />
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</body>

</html>
