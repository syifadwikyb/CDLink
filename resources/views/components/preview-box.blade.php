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
