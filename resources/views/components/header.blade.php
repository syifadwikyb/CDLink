<div class="header sticky h-auto top-0 z-50 w-auto dark:text-white transition-all duration-300">
    <div class="container mx-auto flex justify-between items-center p-8">
        <div>
            <p>Logo</p>
        </div>
        <div class="relative">
            <div class="hidden md:flex">
                <a href="#template"><button
                        class="rounded-3xl ml-1 px-4 sm:px-8 lg:px-10 py-3 font-bold text-purple hover:text-light hover:bg-purple dark:hover:bg-orange-500 dark:hover:text-white dark:text-white">Template</button></a>
                <a href="#aboutme"><button
                        class="rounded-3xl ml-1 px-4 sm:px-8 lg:px-10 py-3 font-bold text-purple hover:text-light hover:bg-purple dark:hover:bg-orange-500 dark:hover:text-white dark:text-white">About
                        me</button></a>
                <a href="/login"><button
                        class="rounded-3xl ml-1 px-4 sm:px-8 lg:px-10 py-3 font-bold text-purple hover:text-light hover:bg-purple dark:hover:bg-orange-500 dark:hover:text-white dark:text-white">Login</button></a>
                <a href="/register"><button
                        class="rounded-3xl ml-1 px-4 sm:px-8 lg:px-10 py-3 font-bold text-light bg-purple dark:bg-orange-500 dark:text-white">Register</button></a>
            </div>
            <div class="flex md:hidden md:space-x-4">
                <button id="bars-icon" class="fas fa-solid fa-bars text-2xl text-purple dark:text-white"></button>
                <div id="dropdown-menu" class="hidden absolute right-0 mt-10 w-48 bg-slate-100 dark:bg-slate-700 rounded-lg shadow-lg">
                    <a href="/register"><button
                            class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-light hover:bg-purple dark:hover:bg-orange-500 dark:hover:text-white dark:text-white">Register</button></a>
                    <a href="/login"><button
                            class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-light hover:bg-purple dark:hover:bg-orange-500 dark:hover:text-white dark:text-white">Login</button></a>
                    <a href="#aboutme"><button
                            class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-light hover:bg-purple dark:hover:bg-orange-500 dark:hover:text-white dark:text-white">About
                            me</button></a>
                    <a href="#template"><button
                            class="flex rounded-lg py-2 w-full justify-center font-bold text-purple hover:text-light hover:bg-purple dark:hover:bg-orange-500 dark:hover:text-white dark:text-white">Template</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
@vite('resources/js/header.js')
