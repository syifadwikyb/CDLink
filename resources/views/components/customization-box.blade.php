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
                <div class="flex flex-col justify-between mb-0 overflow-hidden border border-gray-300 rounded-lg h-14">
                    <div class="flex flex-col justify-end h-full p-2 space-y-2 mb" action="">
                        <div class="flex justify-center md:space-x-2 md:justify-end">
                            <h1 class="hidden mx-auto my-auto font-light text-center text-gray-400 md:block">Ukuran
                                optimal 800 x 400px,1:2</h1>
                            <label for="bannerFileInput"
                                class="w-full p-2 text-center text-white bg-green-500 rounded cursor-pointer md:w-auto">Upload
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-1/2 ">
            <h3 class="font-bold">Profile</h3>
            <div class="p-3 mb-3 bg-white rounded-lg shadow-lg">
                <div class="flex flex-col justify-between mb-0 overflow-hidden border border-gray-300 rounded-lg h-14">
                    <div class="flex flex-col justify-end h-full p-2 space-y-2 mb" action="">
                        <div class="flex justify-center md:space-x-2 md:justify-end">
                            <h1 class="hidden mx-auto my-auto font-light text-center text-gray-400 md:block">Ukuran
                                optimal 400 x 400px, 1:1</h1>
                            <label for="profileFileInput"
                                class="w-full p-2 text-center text-white bg-green-500 rounded cursor-pointer md:w-auto">
                                Upload
                            </label>
                        </div>
                    </div>
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
            <div class="grid w-full grid-cols-5 mx-auto gap-x-2 justify-items-center md:grid-cols-10">
                <x-button class="w-full p-2 bi-envelope-fill"
                    onclick="generateLinkInput('bi-envelope-fill')"></x-button>
                <x-button class="w-full p-2 bi-whatsapp" onclick="generateLinkInput('bi-whatsapp')"></x-button>
                <x-button class="w-full p-2 bi-linkedin" onclick="generateLinkInput('bi-linkedin')"></x-button>
                <x-button class="w-full p-2 bi-instagram" onclick="generateLinkInput('bi-instagram')"></x-button>
                <x-button class="w-full p-2 bi-twitter-x" onclick="generateLinkInput('bi-twitter-x')"></x-button>
                <x-button class="w-full p-2 bi-youtube" onclick="generateLinkInput('bi-youtube')"></x-button>
                <x-button class="w-full p-2 bi-telegram" onclick="generateLinkInput('bi-telegram')"></x-button>
                <x-button class="w-full p-2 bi-facebook" onclick="generateLinkInput('bi-facebook')"></x-button>
                <x-button class="w-full p-2 bi-discord" onclick="generateLinkInput('bi-discord')"></x-button>
                <x-button class="w-full p-2 bi-link-45deg" onclick="generateLinkInput('bi-link-45deg')"></x-button>
            </div>
        </div>
    </div>
    <div class="mx-auto mb-3">
        <h3 class="font-bold">Background</h3>
        <div class="p-3 bg-white rounded-lg shadow-lg">
            <div class="grid w-full grid-cols-3 mx-auto gap-x-2 md:grid-cols-6">
                <x-button class="w-full py-2 bg-gradient-to-tr from-red-700 to-rose-500"
                    onclick="changeBackground('bg-gradient-to-tr from-red-700 to-rose-500'), changeFontBlack()">
                    Red-Rose </x-button>
                <x-button class="w-full py-2 bg-gradient-to-tr from-green-700 to-lime-500"
                    onclick="changeBackground('bg-gradient-to-tr from-green-700 to-lime-500'), changeFontBlack()">
                    Green-Lime </x-button>
                <x-button class="w-full py-2 bg-gradient-to-tr from-blue-700 to-sky-500"
                    onclick="changeBackground('bg-gradient-to-tr from-blue-700 to-sky-500'), changeFontBlack()">
                    Blue-Sky </x-button>
                <x-button class="w-full py-2 bg-gradient-to-tr from-gray-300 to-white"
                    onclick="changeBackground('bg-gradient-to-tr from-gray-300 to-white'), changeFontBlack()">
                    Gray-White </x-button>
                <x-button class="w-full py-2 text-white bg-gradient-to-tr from-gray-900 to-slate-700"
                    onclick="changeBackground('bg-gradient-to-tr from-gray-900 to-slate-700'), changeFontWhite()">
                    Black-Gray </x-button>
                <x-button class="w-full py-2 bg-gray-300" onclick="openWarna()"> Custom </x-button>
            </div>
            <div id="modalWarna" class="fixed inset-0 items-center justify-center hidden bg-gray-800 bg-opacity-75">
                <div class="w-1/3 p-6 mx-auto mt-[30vh] bg-white rounded-lg shadow-lg">
                    <span class="text-2xl text-gray-700 cursor-pointer float-end close"
                        onclick="closeWarna()">&times;</span>
                    <div>
                        <label for="grad-1">Custom Gradient</label>
                        <div class="flex mt-2 space-x-2">
                            <input class="w-1/6 h-12 rounded" type="color" name="grad-1"
                                id="grad-1"oninput="applyCustomBackground()">
                            <p id="color1" class="w-1/6">#color1</p>
                        </div>
                        <div class="flex mt-2 space-x-2">
                            <input class="w-1/6 h-12 rounded" type="color" name="grad-2"
                                id="grad-2"oninput="applyCustomBackground()">
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
                <input type="text"
                    class="flex-grow w-full h-full p-2 bg-transparent border border-gray-300 rounded-lg"
                    placeholder="Masukkan teks" id="textInput">
                <input type="text"
                    class="flex-grow w-full h-full p-2 bg-transparent border border-gray-300 rounded-lg"
                    placeholder="Masukkan link" id="urlInput">
                <button class="px-4 py-2 text-white bg-green-500 rounded-lg" onclick="addLinkButton()"><i
                        class="bi bi-plus-lg"></i></button>
            </div>
            <div id="linkContainers" class="space-y-2">
                {{-- container link editor --}}
            </div>
        </div>
    </div>
    <div class="flex-grow mb-3">
        <h3 class="font-bold">Font</h3>
        <div class="p-3 bg-white rounded-lg shadow">
            <div class="grid w-full grid-cols-2 mx-auto gap-x-2 sm:grid-cols-4 lg:grid-cols-5">
                <x-button class="w-full font-montserrat" onclick="changeFont('montserrat')">Montserrat</x-button>
                <x-button class="w-full font-roboto" onclick="changeFont('roboto')">Roboto</x-button>
                <x-button class="w-full font-baskervville"
                    onclick="changeFont('baskervville')">Baskervville</x-button>
                <x-button class="w-full font-opensans" onclick="changeFont('opensans')">Open Sans</x-button>
                <x-button class="w-full font-lato" onclick="changeFont('lato')">Lato</x-button>
                <x-button class="w-full font-lora" onclick="changeFont('lora')">Lora</x-button>
                <x-button class="w-full font-inter" onclick="changeFont('inter')">Inter</x-button>
                <x-button class="w-full font-ubuntu" onclick="changeFont('ubuntu')">Ubuntu</x-button>
                <x-button class="w-full font-bebasneue" onclick="changeFont('bebasneue')">Bebas Neue</x-button>
                <x-button class="w-full font-rowdies" onclick="changeFont('rowdies')">Rowdies</x-button>
                <x-button class="w-full font-abrilfatface" onclick="changeFont('abrilfatface')">Abril
                    Fatface</x-button>
                <x-button class="w-full font-orbitron" onclick="changeFont('orbitron')">Orbitron</x-button>
                <x-button class="w-full font-poppins" onclick="changeFont('poppins')">Poppins</x-button>
                <x-button class="w-full font-sourcecodepro" onclick="changeFont('sourcecodepro')">Source
                    Code</x-button>
                <x-button class="w-full font-plusjakartasans" onclick="changeFont('plusjakartasans')">Plus Jakarta
                    Sans</x-button>
                <x-button class="w-full font-merriweather"
                    onclick="changeFont('merriweather')">Merriweather</x-button>
                <x-button class="w-full font-blackopsone" onclick="changeFont('blackopsone')">Black Ops One</x-button>
                <x-button class="w-full font-rubikmonoone" onclick="changeFont('rubikmonoone')">Rubik Mono</x-button>
                <x-button class="w-full font-merienda" onclick="changeFont('merienda')">Merienda</x-button>
                <x-button class="w-full font-kalam" onclick="changeFont('kalam')">Kalam</x-button>
            </div>
        </div>
    </div>
</div>
