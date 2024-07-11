<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mycode</title>
    @vite('resources/css/app.css')
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@2.4.1/dist/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">

    
</head>

<body>
    <div class="mx-auto bg-gray-100 shadow-xl xl:flex">
        <x-customization-box></x-customization-box>
        <x-preview-box></x-preview-box>
    </div>

</body>
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
</html>
