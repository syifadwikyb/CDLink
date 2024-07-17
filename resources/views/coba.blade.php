<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- penting --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- penting --}}
    <title>Selamat Datang</title>
</head>

<body class="bg-light">
    <img src="{{ asset('asset/sprinkle1.png') }}" alt="" class="absolute w-full h-full -z-10">
    <div class="container m-auto ">
        <div class="sticky top-0 z-20 flex items-center justify-between pt-12">
            <div class="">
                <p>Logo</p>
            </div>
            <div class="relative">
                <button id="profile-icon" class="text-3xl fas fa-user-circle focus:outline-none"></button>
                <div id="dropdown-menu" class="absolute right-0 z-10 hidden w-48 mt-2 rounded-lg shadow-lg bg-light">
                    <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Profile</a>
                    <a href="{{ route('changepass') }}"
                        class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Settings</a>
                    <a href="{{ route('signout') }}" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <h1 class="mx-auto text-5xl font-bold text-center">
        Selamat Datang {{ $userName }} <br> ({{ $userEmail }})
    </h1>
    {{-- copy --}}
    <div class="mx-auto bg-gray-100 shadow-xl xl:flex">
        <div class="w-full xl:w-2/3"> 
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
                                        <h1 class="hidden mx-auto my-auto font-light text-center text-gray-400 md:block">Ukuran optimal 800 x 400px,1:2</h1>
                                        <label for="bannerFileInput" class="w-full p-2 text-center text-white bg-green-500 rounded cursor-pointer md:w-auto">Upload
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
                                        <h1 class="hidden mx-auto my-auto font-light text-center text-gray-400 md:block">Ukuran optimal 400 x 400px, 1:1</h1>
                                        <label for="profileFileInput" class="w-full p-2 text-center text-white bg-green-500 rounded cursor-pointer md:w-auto"> Upload
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
                        <div class="flex justify-center w-full mx-auto space-x-2">
                            <x-button class="bi-envelope-fill size-8" onclick="generateLinkInput('bi-envelope-fill')"></x-button>
                            <x-button class="bi-whatsapp size-8" onclick="generateLinkInput('bi-whatsapp')"></x-button>
                            <x-button class="bi-linkedin size-8" onclick="generateLinkInput('bi-linkedin')"></x-button>
                            <x-button class="bi-instagram size-8" onclick="generateLinkInput('bi-instagram')"></x-button>
                            <x-button class="bi-twitter-x size-8" onclick="generateLinkInput('bi-twitter-x')"></x-button>
                            <x-button class="bi-youtube size-8" onclick="generateLinkInput('bi-youtube')"></x-button>
                            <x-button class="bi-telegram size-8" onclick="generateLinkInput('bi-telegram')"></x-button>
                            <x-button class="bi-facebook size-8" onclick="generateLinkInput('bi-facebook')"></x-button>
                            <x-button class="bi-discord size-8" onclick="generateLinkInput('bi-discord')"></x-button>
                            <x-button class="bi-bag size-8" onclick="generateLinkInput('bi-bag')"></x-button>
                            <x-button class="bi-link-45deg size-8" onclick="generateLinkInput('bi-link-45deg')"></x-button>
                        </div>
            
            
                    </div>
                </div>
                <div class="mx-auto mb-3">
                    <h3 class="font-bold">Background</h3>
                    <div class="p-3 bg-white rounded-lg shadow-lg">
                        <div class="flex justify-center w-full mx-auto space-x-2">
                            <x-button class="w-1/6 py-2 bg-gradient-to-tr from-red-700 to-rose-500" onclick="changeBackground('bg-gradient-to-tr from-red-700 to-rose-500'), changeFontBlack()"> Red-Rose </x-button>
                            <x-button class="w-1/6 py-2 bg-gradient-to-tr from-green-700 to-lime-500" onclick="changeBackground('bg-gradient-to-tr from-green-700 to-lime-500'), changeFontBlack()"> Green-Lime </x-button>
                            <x-button class="w-1/6 py-2 bg-gradient-to-tr from-blue-700 to-sky-500" onclick="changeBackground('bg-gradient-to-tr from-blue-700 to-sky-500'), changeFontBlack()"> Blue-Sky </x-button>
                            <x-button class="w-1/6 py-2 bg-gradient-to-tr from-gray-300 to-white" onclick="changeBackground('bg-gradient-to-tr from-gray-300 to-white'), changeFontBlack()"> Gray-White </x-button>
                            <x-button class="w-1/6 py-2 text-white bg-gradient-to-tr from-gray-900 to-slate-700" onclick="changeBackground('bg-gradient-to-tr from-gray-900 to-slate-700'), changeFontWhite()"> Black-Gray </x-button>
                            <x-button class="w-1/6 py-2 bg-gray-300 " onclick="openWarna()">Custom </x-button>
                        </div>
                        <div id="modalWarna" class="fixed inset-0 items-center justify-center hidden bg-gray-800 bg-opacity-75">
                            <div class="w-1/3 p-6 mx-auto mt-[30vh] bg-white rounded-lg shadow-lg">
                                <span class="text-2xl text-gray-700 cursor-pointer float-end close"
                                    onclick="closeWarna()">&times;</span>
                                <div>
                                    <label for="grad-1">Custom Gradient</label>
                                    <div class="flex mt-2 space-x-2">
                                        <input class="w-1/6 h-12 rounded" type="color" name="grad-1" id="grad-1"oninput="applyCustomBackground()">
                                        <p id="color1" class="w-1/6">#color1</p>
                                    </div>
                                    <div class="flex mt-2 space-x-2">
                                        <input class="w-1/6 h-12 rounded" type="color" name="grad-2" id="grad-2"oninput="applyCustomBackground()">
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
                                        <input type="color" name="fontcolor" id="font-c" class="w-1/6 h-10 p-0 rounded" oninput="changeFontColor()">
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
                        <div class="flex justify-center w-full mx-auto space-x-2">
                            <div class="w-1/5">
                                <x-button class="w-full font-montserrat" onclick="changeFont('montserrat')">Montserrat</x-button>
                                <x-button class="w-full font-roboto" onclick="changeFont('roboto')">Roboto</x-button>
                                <x-button class="w-full font-baskervville" onclick="changeFont('baskervville')">Baskervville</x-button>
                                <x-button class="w-full font-opensans" onclick="changeFont('opensans')">Open Sans</x-button>
                            </div>
                            <div class="w-1/5">
                                <x-button class="w-full font-lato" onclick="changeFont('lato')">Lato</x-button>
                                <x-button class="w-full font-lora" onclick="changeFont('lora')">Lora</x-button>
                                <x-button class="w-full font-inter" onclick="changeFont('inter')">Inter</x-button>
                                <x-button class="w-full font-ubuntu" onclick="changeFont('ubuntu')">Ubuntu</x-button>
                            </div>
                            <div class="w-1/5">
                                <x-button class="w-full font-bebasneue" onclick="changeFont('bebasneue')">Bebas Neue</x-button>
                                <x-button class="w-full font-rowdies" onclick="changeFont('rowdies')">Rowdies</x-button>
                                <x-button class="w-full font-abrilfatface" onclick="changeFont('abrilfatface')">Abril Fatface</x-button>
                                <x-button class="w-full font-orbitron" onclick="changeFont('orbitron')">Orbitron</x-button>
                            </div>
                            <div class="w-1/5">
                                <x-button class="w-full font-poppins" onclick="changeFont('poppins')">Poppins</x-button>
                                <x-button class="w-full font-sourcecodepro" onclick="changeFont('sourcecodepro')">Source Code Pro</x-button>
                                <x-button class="w-full font-plusjakartasans" onclick="changeFont('plusjakartasans')">Plus Jakarta Sans</x-button>
                                <x-button class="w-full font-merriweather" onclick="changeFont('merriweather')">Merriweather</x-button>
                            </div>
                            <div class="w-1/5">
                                <x-button class="w-full font-blackopsone" onclick="changeFont('blackopsone')">Black Ops One</x-button>
                                <x-button class="w-full font-rubikmonoone" onclick="changeFont('rubikmonoone')">Rubik Mono One</x-button>
                                <x-button class="w-full font-merienda" onclick="changeFont('merienda')">Merienda</x-button>
                                <x-button class="w-full font-kalam" onclick="changeFont('kalam')">Kalam</x-button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
        </div>
        <div class="w-full p-6 xl:w-1/3 xl:sticky xl:top-0 xl:h-screen preview">
            <form id="previewForm" action="{{ route('previews.store') }}" method="POST" enctype="multipart/form-data" onsubmit="return setProps()">
                @csrf
                <input type="hidden" name="displayPreviewClass" id="displayPreviewClass" value="">
                <input type="hidden" name="titlePreview" id="titlePreviewInput" value="">
                <input type="hidden" name="aboutPreview" id="aboutPreviewInput" value="">
            
                <!-- Hidden inputs for social buttons -->
                <div id="socialButtonsContainer"></div>
            
                <!-- Hidden inputs for link buttons -->
                <div id="linkButtonsContainer"></div>
            
                <input type="file" name="banner" id="bannerFileInput" class="hidden" accept="image/*" onchange="previewImage('bannerFileInput', 'bannerPreview')">
                <input type="file" name="profile" id="profileFileInput" class="hidden" accept="image/*" onchange="previewImage('profileFileInput', 'profilePreview')">
            
                <div class="mx-auto overflow-hidden rounded-3xl border-8 border-black bg-black w-[380px] xl:w-[380px] h-[800px] mt-6 xl:mt-0">
                    <h1 class="w-full px-3 text-right text-white bg-gray-400 rounded-t-2xl">5G ᯤ | 50%</h1>
                    <img class="max-h-[170px] w-full object-cover" src="{{ asset('asset/banner.png') }}" id="bannerPreview" alt="Banner">
                    <div class="display px-3 pt-2 my-auto h-full max-h-[670px] mb-0 w-full bg-white flex-grow-1 rounded-b-2xl" id="displayPreview">
                        <img src="{{ asset('asset/pp.png') }}" class="bg-white size-[90px] object-cover rounded-full mx-auto -mt-12 mb-2" id="profilePreview" alt="Profile">
                        <h1 class="mb-2 text-xl font-bold text-center break-words whitespace-normal Title" id="titlePreview">Title</h1>
                        <p class="mb-4 text-center break-words whitespace-normal About" id="aboutPreview">About goes here.</p>
            
                        <div id="linkContainer" class="flex justify-center mx-auto space-x-2 previewButtons"></div>
                        {{-- generated social media buttons here, example <a href=""></a> --}}
                        <div id="buttonContainer" class="justify-center w-full mt-4 space-y-2"></div>
                        {{-- generated link buttons here, example <a href=""></a> --}}
                    </div>
                </div>
            
                <button class="p-2 bg-white" type="submit">Save Previews</button>
            </form>
            <button class="p-2 bg-white" onclick="setProps()">test</button>
            
            
            <script>
                function setProps() {
                    document.getElementById('displayPreviewClass').value = document.getElementById('displayPreview').className;
                    document.getElementById('titlePreviewInput').value = document.getElementById('titlePreview').innerText;
                    document.getElementById('aboutPreviewInput').value = document.getElementById('aboutPreview').innerText;
            
                    // Clear previous hidden inputs
                    document.getElementById('socialButtonsContainer').innerHTML = '';
                    document.getElementById('linkButtonsContainer').innerHTML = '';
            
                    // Set values for social buttons
                    const socialButtons = document.querySelectorAll('.social-button');
                    socialButtons.forEach((button, index) => {
                        let input = document.createElement('input');
                        input.type = 'hidden';
                        input.name = `socialButtons[${index}][url]`;
                        input.value = button.href;
                        document.getElementById('socialButtonsContainer').appendChild(input);
            
                        let icon = document.createElement('input');
                        icon.type = 'hidden';
                        icon.name = `socialButtons[${index}][icon]`;
                        icon.value = button.innerHTML;
                        document.getElementById('socialButtonsContainer').appendChild(icon);
                    });
            
                    // Set values for link buttons
                    const linkButtons = document.querySelectorAll('.link-button');
                    linkButtons.forEach((button, index) => {
                        let textInput = document.createElement('input');
                        textInput.type = 'hidden';
                        textInput.name = `linkButtons[${index}][text]`;
                        textInput.value = button.textContent;
                        document.getElementById('linkButtonsContainer').appendChild(textInput);
            
                        let urlInput = document.createElement('input');
                        urlInput.type = 'hidden';
                        urlInput.name = `linkButtons[${index}][url]`;
                        urlInput.value = button.href;
                        document.getElementById('linkButtonsContainer').appendChild(urlInput);
                    });
            
                    return true;
                }
            
                    function previewImage(inputId, imgId) {
                        const input = document.getElementById(inputId);
                        const img = document.getElementById(imgId);
                        const reader = new FileReader();
            
                        reader.onload = function(e) {
                            img.src = e.target.result;
                        };
            
                        if (input.files && input.files[0]) {
                            reader.readAsDataURL(input.files[0]);
                        }
                    }
            
                document.getElementById('profile-icon').addEventListener('click', function(event) {
                    event.stopPropagation();
                    var dropdown = document.getElementById('dropdown-menu');
                    dropdown.classList.toggle('hidden');
                });
                document.addEventListener('click', function(event) {
                    var dropdown = document.getElementById('dropdown-menu');
                    if (!dropdown.classList.contains('hidden') && !event.target.closest('#dropdown-menu')) {
                        dropdown.classList.add('hidden');
                    }
                });
                function generateLinkInput(iconClass) {
                    const linkInputValue = document.getElementById('linkInput').value;
                    if (linkInputValue) {
                        const linkInputs = document.getElementById('linkInputs');
                        const linkContainer = document.getElementById('linkContainer');
            
                        const linkInputItem = document.createElement('div');
                        linkInputItem.className = 'flex items-center space-x-2 link-input-item';
            
                        const inputElement = document.createElement('input');
                        inputElement.type = 'text';
                        inputElement.value = linkInputValue;
                        inputElement.readOnly = false;
                        inputElement.className = 'flex-grow p-2 border border-gray-300 rounded-lg';
            
                        const deleteButton = document.createElement('button');
                        deleteButton.innerText = 'X';
                        deleteButton.className = 'h-full p-2 px-4 text-white bg-red-500 border border-red-500 rounded-lg';
                        deleteButton.onclick = () => {
                            linkInputs.removeChild(linkInputItem);
                            linkContainer.removeChild(linkButton);
                        };
            
                        const linkButton = document.createElement('a');
                        linkButton.href = linkInputValue;
                        linkButton.className = 'flex items-center social-button ';
            
                        const iconElement = document.createElement('i');
                        iconElement.className = `${iconClass} text-xl`;
            
                        linkButton.appendChild(iconElement);
            
                        inputElement.addEventListener('input', () => {
                            linkButton.href = inputElement.value;
                        });
            
                        linkInputItem.appendChild(inputElement);
                        linkInputItem.appendChild(deleteButton);
            
                        linkInputs.appendChild(linkInputItem);
            
                        linkContainer.appendChild(linkButton);
            
                        document.getElementById('linkInput').value = '';
                    } else {
                        alert('Please enter a link first.');
                    }
                }
                function updateTitle() {
                    dataset.title = document.getElementById('titleInput').value;
                    if (dataset.title === '') {
                        document.querySelector('.Title').innerText = 'Title';
                    } else {
                        document.querySelector('.Title').innerText = dataset.title;
                    }
                    applyFontProperties();
                }
                function updateAbout() {
                    dataset.about = document.getElementById('aboutInput').value;
                    if (dataset.about === '') {
                        document.querySelector('.About').innerText = 'About goes here.';
                    } else {
                        document.querySelector('.About').innerText = dataset.about;
                    }
                    applyFontProperties();
                }
                function applyDataset() {
                    document.querySelector('.Title').innerText = dataset.title;
                    document.querySelector('.display').className =
                        `display px-3 my-auto h-[760px] ${dataset.background} flex-grow-1 rounded-b-2xl`;
                    applyFontProperties();
                }
                const dataset = {
                    font: '',
                    background: '',
                    fontcolor: ''
                };
                function changeFont(font) {
                    dataset.font = font;
                    bgdataset();
                }
                function changeBackground(gradientClass) {
                    dataset.background = gradientClass;
                    bgdataset();
                }
                function applyCustomBackground() {
                    const grad1 = document.getElementById('grad-1').value;
                    const grad2 = document.getElementById('grad-2').value;
                    const direction = document.getElementById('gradient-direction').value;
                    const customGradient = `linear-gradient(${direction}, ${grad1}, ${grad2})`;
                    dataset.background = customGradient;
                    document.getElementById('color1').textContent = grad1;
                    document.getElementById('color2').textContent = grad2;
                    bgdataset();
                }
                function changeFontColor() {
                    const fontcolor = document.getElementById('font-c').value;
                    dataset.fontcolor = fontcolor;
                    document.getElementById('font-color-hex').textContent = fontcolor;
                    bgdataset();
                }
                function changeFontWhite() {
                    dataset.fontcolor = `white`;
                    bgdataset();
                }
                function changeFontBlack() {
                    dataset.fontcolor = `black`;
                    bgdataset();
                }
                function bgdataset() {
                    const displayElement = document.querySelector('.display');
            
                    if (dataset.background === '') {
                        dataset.background = 'bg-white';
                    }
            
                    if (dataset.background.startsWith('linear-gradient')) {
                        displayElement.style.backgroundImage = dataset.background;
                        displayElement.className =
                            `display px-3 pt-2 my-auto h-full max-h-[670px] mb-0 w-full flex-grow-1 rounded-b-2xl font-${dataset.font}`;
                    } else {
                        displayElement.className =
                            `display px-3 pt-2 my-auto h-full max-h-[670px] mb-0 w-full ${dataset.background} flex-grow-1 rounded-b-2xl font-${dataset.font}`;
                        displayElement.style.backgroundImage = '';
                    }
            
                    if (dataset.fontcolor !== '') {
                        displayElement.style.color = dataset.fontcolor;
                    }
                }
                function openWarna() {
                    document.getElementById('modalWarna').classList.remove('hidden');
                }
                function closeWarna() {
                    document.getElementById('modalWarna').classList.add('hidden');
                }
                function addLinkButton() {
                    const textInput = document.getElementById('textInput');
                    const urlInput = document.getElementById('urlInput');
                    const textValue = textInput.value.trim();
                    const urlValue = urlInput.value.trim();
            
                    if (textValue !== '' && urlValue !== '') {
                        const linkContainer = document.getElementById('linkContainers');
                        const buttonContainer = document.getElementById('buttonContainer');
            
                        const linkWrapper = document.createElement('div');
                        linkWrapper.classList.add('flex', 'items-center', 'w-full', 'space-x-2');
            
                        const newLink = document.createElement('input');
                        newLink.type = 'text';
                        newLink.value = urlValue;
                        newLink.className = 'flex-grow p-2 border border-gray-300 rounded-lg btnEx';
                        newLink.target = "_blank";
            
                        newLink.oninput = function () {
                            newButton.href = newLink.value;
                        };
                        const newBtnLink = document.createElement('input');
                        newBtnLink.type = 'text';
                        newBtnLink.value = textValue;
                        newBtnLink.className = 'flex-grow p-2 border border-gray-300 rounded-lg btnEx';
                        newBtnLink.target = "_blank";
            
                        newBtnLink.oninput = function () {
                            newButton.textContent = newBtnLink.value;
                        };
            
                        const removeLinkButton = document.createElement('button');
                        removeLinkButton.classList.add('px-4', 'py-2', 'bg-red-500', 'text-white', 'border', 'border-red-500',
                            'rounded-lg');
                        removeLinkButton.textContent = 'X';
                        removeLinkButton.onclick = function () {
                            linkContainer.removeChild(linkWrapper);
                            buttonContainer.removeChild(buttonWrapper);
                        };
                        linkWrapper.appendChild(newBtnLink);
                        linkWrapper.appendChild(newLink);
                        linkWrapper.appendChild(removeLinkButton);
            
                        linkContainer.appendChild(linkWrapper);
            
                        const buttonWrapper = document.createElement('div');
                        buttonWrapper.classList.add('flex', 'space-x-2', 'items-center', 'w-full');
            
                        const newButton = document.createElement('a');
                        newButton.href = urlValue;
                        newButton.classList.add('block', 'flex-grow', 'p-2', 'text-center', 'rounded', 'shadow-xl', 'btnEx',
                            'border', 'border-gray-300', 'link-button');
                        newButton.textContent = textValue;
                        newButton.target = "_blank";
            
                        buttonWrapper.appendChild(newButton);
                        buttonContainer.appendChild(buttonWrapper);
            
                        textInput.value = '';
                        urlInput.value = '';
                    }
                }
            </script>
        </div>
    </div>
</body>
</html>
