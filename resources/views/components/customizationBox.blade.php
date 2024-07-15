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
<div class="flex-grow max-w-full p-8 rounded-xl shadow-2xl customizations">
    <div class="flex space-x-6">
        <div class="w-1/2 ">
            <h3 class="font-bold text-dark text-lg">Banner</h3>
            <div class="p-3 bg-white rounded-lg shadow-lg mb-">
                <div class="flex flex-col justify-between mb-0 overflow-hidden border border-gray-300 rounded-lg h-14">
                    <form class="flex flex-col justify-end h-full p-2 space-y-2 mb" action="">
                        <div class="flex justify-center md:space-x-2 md:justify-end">
                            <h1 class="hidden mx-auto my-auto font-light text-center text-gray-400 md:block">Ukuran optimal 800 x 400px,1:2</h1>
                            <label for="filbanner" class="w-full p-2 text-center text-white bg-green-500 hover:bg-green-700 rounded cursor-pointer md:w-auto">Upload
                            </label>
                            <input type="file" name="banner" id="filbanner" accept="image/*">
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="w-1/2 ">
            <h3 class="font-bold text-dark text-lg">Profile</h3>
            <div class="p-3 mb-3 bg-white rounded-lg shadow-lg">
                <div class="flex flex-col justify-between mb-0 overflow-hidden border border-gray-300 rounded-lg h-14">
                    <form class="flex flex-col justify-end h-full p-2 space-y-2 mb" action="">
                        <div class="flex justify-center md:space-x-2 md:justify-end">
                            <h1 class="hidden mx-auto my-auto font-light text-center text-gray-400 md:block">Ukuran optimal 400 x 400px, 1:1</h1>
                            <label for="filprofile" class="w-full p-2 text-center text-white bg-green-500 hover:bg-green-700 rounded cursor-pointer md:w-auto"> Upload
                            </label>
                            <input type="file" name="profile" id="filprofile" accept="image/*">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="flex-grow mb-3">
        <h3 class="font-bold text-dark text-lg">Title</h3>
        <div class="p-3 bg-white rounded-lg shadow-lg">
            <div class="flex mb-0 space-x-2 h-11">
                <textarea maxlength="100" class="flex-grow w-full h-full max-h-full min-h-full p-2 border border-gray-300 rounded-lg"
                    id="titleInput" placeholder="Masukkan Teks" oninput="updateTitle()"></textarea>
            </div>
        </div>
    </div>
    <div class="flex-grow mb-3">
        <h3 class="font-bold text-dark text-lg">About</h3>
        <div class="p-3 bg-white rounded-lg shadow-lg">
            <div class="flex mb-0 space-x-2rounded-lg h-28">
                <textarea class="flex-grow w-full h-full max-h-full min-h-full p-2 bg-transparent border border-gray-300 rounded-lg"
                    id="aboutInput" placeholder="Masukkan Teks" oninput="updateAbout()"></textarea>
            </div>
        </div>
    </div>
    <div class="flex-grow mb-3">
        <h3 class="font-bold text-dark text-lg">Social Media</h3>
        <div class="p-3 bg-white rounded-lg shadow-lg">
            <input type="text" class="flex-grow w-full h-full p-2 bg-transparent border border-gray-300 rounded-lg"
                placeholder="Masukkan Link" id="linkInput" on>
            <div id="linkInputs" class="mt-2 space-y-2"></div>
            <div class="flex justify-center w-full mx-auto space-x-2">
                <x-button class="bi-envelope-fill size-10 hover:text-red-700" onclick="generateLinkInput('bi-envelope-fill')"></x-button>
                <x-button class="bi-whatsapp size-10 hover:text-green-700" onclick="generateLinkInput('bi-whatsapp')"></x-button>
                <x-button class="bi-linkedin size-10 hover:text-blue" onclick="generateLinkInput('bi-linkedin')"></x-button>
                <x-button class="bi-instagram size-10 hover:text-red-700" onclick="generateLinkInput('bi-instagram')"></x-button>
                <x-button class="bi-twitter-x size-10 hover:text-black" onclick="generateLinkInput('bi-twitter-x')"></x-button>
                <x-button class="bi-youtube size-10 hover:text-red-700" onclick="generateLinkInput('bi-youtube')"></x-button>
                <x-button class="bi-telegram size-10 hover:text-blue" onclick="generateLinkInput('bi-telegram')"></x-button>
                <x-button class="bi-facebook size-10 hover:text-blue" onclick="generateLinkInput('bi-facebook')"></x-button>
                <x-button class="bi-discord size-10 hover:text-blue" onclick="generateLinkInput('bi-discord')"></x-button>
                <x-button class="bi-bag size-10 hover:text-yellow-400" onclick="generateLinkInput('bi-bag')"></x-button>
                <x-button class="bi-link-45deg size-10 hover:text-green-700" onclick="generateLinkInput('bi-link-45deg')"></x-button>
            </div>


        </div>
    </div>
    <div class="mx-auto mb-3">
        <h3 class="font-bold text-dark text-lg">Background</h3>
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
        <h3 class="font-bold text-dark text-lg">Button Links</h3>
        <div class="p-3 bg-white rounded-lg shadow-lg">
            <div class="flex space-x-2">
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
        <h3 class="font-bold text-dark text-lg">Font</h3>
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
<script>
    function removeImage(inputId) {
        if (inputId === 'filbanner') {
            document.getElementById('bannerPreview').src = "{{ asset('img/banner.png') }}";
        } else if (inputId === 'filprofile') {
            document.getElementById('profilePreview').src = "{{ asset('img/pp.png') }}";
        }
    }

    document.getElementById('filbanner').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('bannerPreview').src = e.target.result;
                dataset.banner = e.target.result;
            };
            reader.readAsDataURL(file);
        }
    });

    document.getElementById('filprofile').addEventListener('change', function (event) {
        const file = event.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function (e) {
                document.getElementById('profilePreview').src = e.target.result;
                dataset.profile = e.target.result;
            };
            reader.readAsDataURL(file);
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
            linkButton.className = 'flex items-center';

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

    function toggleBold() {
        dataset.fontWeight = dataset.fontWeight === 'bold' ? 'normal' : 'bold';
        applyFontProperties();
    }

    function toggleItalic() {
        dataset.fontStyle = dataset.fontStyle === 'italic' ? 'normal' : 'italic';
        applyFontProperties();
    }

    function toggleUnderline() {
        dataset.textDecoration = dataset.textDecoration === 'underline' ? 'none' : 'underline';
        applyFontProperties();
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


    function applyFontProperties() {
        const buttons = document.querySelectorAll('btnEx')
        buttons.forEach(btn => {
            btn.style.fontWeight = dataset.fontWeight;
            btn.style.fontStyle = dataset.fontStyle;
            btn.style.textDecoration = dataset.textDecoration;
        });

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
                'border', 'border-gray-300');
            newButton.textContent = textValue;
            newButton.target = "_blank";

            buttonWrapper.appendChild(newButton);
            buttonContainer.appendChild(buttonWrapper);

            textInput.value = '';
            urlInput.value = '';
        }
    }
</script>