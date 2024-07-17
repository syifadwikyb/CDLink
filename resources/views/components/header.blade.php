<div class="header sticky h-auto top-0 z-50 w-auto bg-white transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center p-8">
        <div>
            <p>Logo</p>
        </div>
        <div class="relative">
            <div class="hidden md:flex">
                <a href="#template"><button
                        class="rounded-3xl ml-1 px-4 sm:px-8 lg:px-10 py-3 font-bold text-purple hover:text-light hover:bg-customgradient3">Template</button></a>
                <a href="#aboutme"><button
                        class="rounded-3xl ml-1 px-4 sm:px-8 lg:px-10 py-3 font-bold text-purple hover:text-light hover:bg-customgradient3">About
                        me</button></a>
                <a href="/login"><button
                        class="rounded-3xl ml-1 px-4 sm:px-8 lg:px-10 py-3 font-bold text-purple hover:text-light hover:bg-customgradient3">Login</button></a>
                <a href="/register"><button
                        class="rounded-3xl ml-1 px-4 sm:px-8 lg:px-10 py-3 font-bold text-light bg-customgradient3">Register</button></a>
            </div>
            <div class="flex md:hidden md:space-x-4">
                <button id="bars-icon" class="fas fa-solid fa-bars text-2xl text-purple"></button>
                <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg">
                    <a href="/register"><button
                            class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple">Register</button></a>
                    <a href="/login"><button
                            class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple">Login</button></a>
                    <a href="#aboutme"><button
                            class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple">About
                            me</button></a>
                    <a href="#template"><button
                            class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-white hover:bg-purple">Template</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@vite('resources/js/header.js')
