<style>
    .size-8 {
        width: 32px;
        height: 32px;
    }

    #filbanner {
        display: none;
    }

    #filprofile {
        display: none;
    }
</style>
<div class="flex-grow max-w-full p-8 shadow-2xl customizations">
    <div class="flex space-x-6">
        <div class="w-1/2 ">
            <h3 class="font-bold">Banner</h3>
            <div class="p-3 bg-white rounded-lg shadow-lg mb-">
                <div
                    class="flex flex-col justify-between mb-0 overflow-hidden border border-gray-300 rounded-lg h-14">
                    <form class="flex flex-col justify-end h-full p-2 space-y-2 mb" action="">
                        <div class="flex justify-center md:space-x-2 md:justify-end">
                            <h1 class="hidden mx-auto my-auto font-light text-center text-gray-400 md:block">Ukuran optimal 800 x 400px,1:2</h1>
                            <label for="filbanner" class="w-full p-2 text-center text-white bg-green-500 rounded cursor-pointer md:w-auto">
                                Upload
                            </label>
                            <input type="file" name="banner" id="filbanner" accept="image/*">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-1/2 ">   
            <h3 class="font-bold">Profile</h3>
            <div class="p-3 mb-3 bg-white rounded-lg shadow-lg">
                <div
                    class="flex flex-col justify-between mb-0 overflow-hidden border border-gray-300 rounded-lg h-14">
                    <form class="flex flex-col justify-end h-full p-2 space-y-2 mb" action="">
                        <div class="flex justify-center md:space-x-2 md:justify-end">
                            <h1 class="hidden mx-auto my-auto font-light text-center text-gray-400 md:block">Ukuran optimal 400 x 400px, 1:1</h1>
                            <label for="filprofile" class="w-full p-2 text-center text-white bg-green-500 rounded cursor-pointer md:w-auto">
                                Upload
                            </label>
                            <input type="file" name="profile" id="filprofile" accept="image/*">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-grow mb-3">
        <h3 class="font-bold">Title</h3>
        <div class="p-3 bg-white rounded-lg shadow-lg">
            <div class="flex mb-0 space-x-2 h-11">
                <textarea maxlength="100" class="flex-grow w-full h-full max-h-full min-h-full p-2 border border-gray-300 rounded-lg"
                    id="titleInput" placeholder="Masukkan Teks" oninput="updateTitle()"></textarea>
            </div>
        </div>
    </div>
    <div class="flex-grow mb-3">
        <h3 class="font-bold">About</h3>
        <div class="p-3 bg-white rounded-lg shadow-lg">
            <div class="flex mb-0 space-x-2rounded-lg h-28">
                <textarea class="flex-grow w-full h-full max-h-full min-h-full p-2 bg-transparent border border-gray-300 rounded-lg"
                    id="aboutInput" placeholder="Masukkan Teks" oninput="updateAbout()"></textarea>
            </div>
        </div>
    </div>
    <div class="flex-grow mb-3">
        <h3 class="font-bold">Social Media</h3>
        <div class="p-3 bg-white rounded-lg shadow-lg">
            <input type="text" class="flex-grow w-full h-full p-2 bg-transparent border border-gray-300 rounded-lg"
                placeholder="Masukkan Link" id="linkInput" on>
            <div id="linkInputs" class="mt-2 space-y-2"></div>
            <div class="flex justify-center w-full mx-auto space-x-2">
                <button id="email" class="mt-2 bg-blue-500 rounded bi-envelope-fill size-8"
                    onclick="generateLinkInput('bi-envelope-fill')"></button>
                <button id="wa" class="mt-2 bg-blue-500 rounded bi-whatsapp size-8"
                    onclick="generateLinkInput('bi-whatsapp')"></button>
                <button id="linkedin" class="mt-2 bg-blue-500 rounded bi-linkedin size-8"
                    onclick="generateLinkInput('bi-linkedin')"></button>
                <button id="ig" class="mt-2 bg-blue-500 rounded size-8 bi-instagram"
                    onclick="generateLinkInput('bi-instagram')"></button>
                <button id="x" class="mt-2 bg-blue-500 rounded size-8 bi-twitter-x"
                    onclick="generateLinkInput('bi-twitter-x')"></button>
                <button id="yt" class="mt-2 bg-blue-500 rounded size-8 bi-youtube"
                    onclick="generateLinkInput('bi-youtube')"></button>
                <button id="tele" class="mt-2 bg-blue-500 rounded bi-telegram size-8"
                    onclick="generateLinkInput('bi-telegram')"></button>
                <button id="fb" class="mt-2 bg-blue-500 rounded bi-facebook size-8"
                    onclick="generateLinkInput('bi-facebook')"></button>
                <button id="dc" class="mt-2 bg-blue-500 rounded bi-discord size-8"
                    onclick="generateLinkInput('bi-discord')"></button>
                <button id="tokped" class="mt-2 bg-blue-500 rounded bi-bag size-8"
                    onclick="generateLinkInput('bi-bag')"></button>
                <button id="others" class="mt-2 bg-blue-500 rounded bi-link-45deg size-8"
                    onclick="generateLinkInput('bi-link-45deg')"></button>
            </div>
        </div>
    </div>
    <div class="mx-auto mb-3">
        <h3 class="font-bold">Background</h3>
        <div class="p-3 bg-white rounded-lg shadow-lg">
            <div class="flex justify-center w-full mx-auto space-x-2 ">
                <button class="flex-grow w-auto h-20 mt-2 rounded bg-gradient-to-tr from-red-700 to-rose-500"
                        onclick="changeBackground('bg-gradient-to-tr from-red-700 to-rose-500'),changeFontBlack()">Red-Rose
                </button>
                <button class="flex-grow w-auto h-20 mt-2 rounded bg-gradient-to-tr from-green-700 to-lime-500"
                        onclick="changeBackground('bg-gradient-to-tr from-green-700 to-lime-500'),changeFontBlack()">Green-Lime
                </button>
                <button class="flex-grow w-auto h-20 mt-2 rounded bg-gradient-to-tr from-blue-700 to-sky-500"
                        onclick="changeBackground('bg-gradient-to-tr from-blue-700 to-sky-500'),changeFontBlack()">Blue-Sky
                </button>
                <button class="flex-grow w-auto h-20 mt-2 rounded bg-gradient-to-tr from-gray-300 to-white"
                        onclick="changeBackground('bg-gradient-to-tr from-gray-300 to-white'),changeFontBlack()">Gray-White
                </button>
                <button class="flex-grow w-auto h-20 mt-2 text-white rounded bg-gradient-to-tr from-gray-900 to-slate-700"
                        onclick="changeBackground('bg-gradient-to-tr from-gray-900 to-slate-700'),changeFontWhite()">Black-Gray
                </button>
                <button class="justify-center flex-grow w-auto h-20 mt-2 bg-gray-300 rounded"
                        onclick="openWarna()">Custom
                </button>
            </div>
            <div id="modalWarna" class="fixed inset-0 items-center justify-center hidden bg-gray-800 bg-opacity-75">
                <div class="w-1/3 p-6 mx-auto mt-[30vh] bg-white rounded-lg shadow-lg">
                    <span class="text-2xl text-gray-700 cursor-pointer float-end close"
                          onclick="closeWarna()">&times;</span>
                    <div>
                        <label for="grad-1">Custom Gradient</label>
                        <div class="flex mt-2 space-x-2">
                            <input class="w-1/6 h-12 rounded" type="color" name="grad-1" id="grad-1"
                                   oninput="applyCustomBackground()">
                            <p id="color1" class="w-1/6">#color1</p>
                        </div>
                        <div class="flex mt-2 space-x-2">
                            <input class="w-1/6 h-12 rounded" type="color" name="grad-2" id="grad-2"
                                   oninput="applyCustomBackground()">
                            <p id="color2" class="w-1/6">#color2</p>
                        </div>
                        <div class="mt-4">
                            <label for="gradient-direction">Gradient Direction</label>
                            <select id="gradient-direction" class="w-1/3 p-2 border rounded"
                                    onchange="applyCustomBackground()">
                                <option value="to top right">To Top Right</option>
                                <option value="to bottom right">To Bottom Right</option>
                                <option value="to bottom left">To Bottom Left</option>
                                <option value="to top left">To Top Left</option>
                                <option value="to top">To Top</option>
                                <option value="to bottom">To Bottom</option>
                                <option value="to left">To Left</option>
                                <option value="to right">To Right</option>
                            </select>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label for="font-c">Font Color</label>
                        <div class="flex mt-2 space-x-2">
                            <input type="color" name="fontcolor" id="font-c" class="w-1/6 h-10 p-0 rounded"
                                   oninput="changeFontColor()">
                            <p id="font-color-hex" class="w-1/6">#color</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-grow mb-3">
        <h3 class="font-bold">Button Links</h3>
        <div class="p-3 bg-white rounded-lg shadow-lg">
            <div class="flex mb-4 space-x-2">
                <input type="text" class="flex-grow w-full h-full p-2 bg-transparent border border-gray-300 rounded-lg"
                    placeholder="Masukkan teks" id="textInput">
                <input type="text" class="flex-grow w-full h-full p-2 bg-transparent border border-gray-300 rounded-lg"
                    placeholder="Masukkan link" id="urlInput">
                <button class="px-4 py-2 text-white bg-green-500 rounded-lg" onclick="addLinkButton()"><i class="bi bi-plus-lg"></i></button>
            </div>
            <div id="linkContainers" class="space-y-2">
                {{-- container link editor --}}
            </div>
        </div>
    </div>
    <div class="flex-grow mb-3">
        <h3 class="font-bold">Font</h3>
        <div class="p-3 bg-white rounded-lg shadow">
            <div class="flex justify-center w-full mx-auto space-x-2">
                <div class="w-1/5">
                    <button onclick="changeFont('montserrat')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-montserrat from-gray-300 to-white">Montserrat</button>
                    <button onclick="changeFont('roboto')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-roboto from-gray-300 to-white">Roboto</button>
                    <button onclick="changeFont('baskervville')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-baskervville from-gray-300 to-white">Baskervville
                        SC</button>
                    <button onclick="changeFont('opensans')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-opensans from-gray-300 to-white">Open
                        Sans</button>
                </div>
                <div class="w-1/5">
                    <button onclick="changeFont('lato')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-lato from-gray-300 to-white">Lato</button>
                    <button onclick="changeFont('lora')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-lora from-gray-300 to-white">Lora</button>
                    <button onclick="changeFont('inter')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-inter from-gray-300 to-white">Inter</button>
                    <button onclick="changeFont('ubuntu')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-ubuntu from-gray-300 to-white">Ubuntu</button>
                </div>
                <div class="w-1/5">
                    <button onclick="changeFont('bebasneue')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-bebasneue from-gray-300 to-white">Bebas
                        Neue</button>
                    <button onclick="changeFont('rowdies')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-rowdies from-gray-300 to-white">Rowdies</button>
                    <button onclick="changeFont('abrilfatface')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-abrilfatface from-gray-300 to-white">Abril
                        Fatface</button>
                    <button onclick="changeFont('orbitron')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-orbitron from-gray-300 to-white">Orbitron</button>
                </div>
                <div class="w-1/5">
                    <button onclick="changeFont('poppins')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-poppins from-gray-300 to-white">Poppins</button>
                    <button onclick="changeFont('sourcecodepro')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-sourcecodepro from-gray-300 to-white">Source
                        Code
                        Pro</button>
                    <button onclick="changeFont('plusjakartasans')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-plusjakartasans from-gray-300 to-white">Plus
                        Jakarta
                        Sans</button>
                    <button onclick="changeFont('merriweather')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-merriweather from-gray-300 to-white">Merriweather</button>
                </div>
                <div class="w-1/5">
                    <button onclick="changeFont('blackopsone')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-blackopsone from-gray-300 to-white">Black Ops
                        One</button>
                    <button onclick="changeFont('rubikmonoone')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-rubikmonoone from-gray-300 to-white">Rubik
                        Mono
                        One</button>
                    <button onclick="changeFont('merienda')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-merienda from-gray-300 to-white">Merienda</button>
                    <button onclick="changeFont('kalam')"
                        class="w-full p-2 mt-2 rounded bg-gradient-to-tr font-kalam from-gray-300 to-white">Kalam</button>
                </div>
            </div>
        </div>
    </div>
    <div>
        <h3></h3>
        <div
            class="flex flex-col justify-between w-auto p-2 space-y-2 bg-gray-200 border border-black border-dashed rounded-lg">
            <div class="flex mr-0 space-x-2">
                <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                    class="inline-flex items-center w-auto px-4 py-2 text-sm font-bold text-center text-white bg-gray-700 rounded hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"
                    type="button">Font<svg class="w-2.5 h-2.5 ms-3" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 10 6">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 4 4 4-4" />
                    </svg>
                </button>
                <div id="dropdown"
                    class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                    <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownDefaultButton">
                        <li>
                            <a onclick="toggleFont('font-sans')"
                                class="block px-4 py-2 font-sans cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">Open
                                Sans</a>
                        </li>
                        <li>
                            <a onclick="toggleFont('font-serif')"
                                class="block px-4 py-2 font-serif cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">Georgia</a>
                        </li>
                        <li>
                            <a onclick="toggleFont('font-mono')"
                                class="block px-4 py-2 font-mono cursor-pointer hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">Monospace</a>
                        </li>
                        <li>
                            <a onclick="toggleFont('font-montserrat')"
                                class="block px-4 py-2 cursor-pointer font-montserrat hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">Montserrat</a>
                        </li>
                        <li>
                            <a onclick="toggleFont('font-cambria')"
                                class="block px-4 py-2 cursor-pointer font-cambria hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">Cambria</a>
                        </li>
                        <li>
                            <a onclick="toggleFont('font-inter')"
                                class="block px-4 py-2 cursor-pointer font-inter hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-black">Inter</a>
                        </li>
                    </ul>
                </div>
                <button type="button" id="change-bold" class="w-auto px-4 py-2 font-bold text-white bg-gray-700 rounded"
                    onclick="toggleBold()">Bold</button>
            </div>
            <div class="flex mr-0 space-x-2">
                <button type="button" id="change-italic" class="w-auto px-4 py-2 italic text-white bg-gray-700 rounded"
                    onclick="toggleItalic()">Italic</button>
                <button type="button" id="change-underline" class="w-auto p-2 text-white underline bg-gray-700 rounded"
                    onclick="toggleUnderline()">Underline</button>
            </div>
        </div>
    </div>
    
</div>