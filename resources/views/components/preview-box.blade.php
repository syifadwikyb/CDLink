<form id="previewForm" action="{{ route('previews.store') }}" method="POST" enctype="multipart/form-data"
    onsubmit="return setProps()">
    @csrf
    <input type="hidden" name="displayPreviewClass" id="displayPreviewClass" value="">
    <input type="hidden" name="titlePreview" id="titlePreviewInput" value="">
    <input type="hidden" name="aboutPreview" id="aboutPreviewInput" value="">

    <input type="file" name="banner" id="bannerFileInput" class="hidden" accept="image/*"
        onchange="previewImage('bannerFileInput', 'bannerPreview')">
    <input type="file" name="profile" id="profileFileInput" class="hidden" accept="image/*"
        onchange="previewImage('profileFileInput', 'profilePreview')">

    <div
        class="mx-auto overflow-hidden rounded-3xl border-8 border-black bg-black w-[380px] xl:w-[380px] h-[800px] mt-6 xl:mt-0">
        <h1 class="w-full px-3 text-right text-white bg-gray-400 rounded-t-2xl">5G ᯤ | 50%</h1>
        <img class="max-h-[170px] w-full object-cover" src="{{ asset('asset/banner.png') }}" id="bannerPreview"
            alt="Banner">
        <div class="display px-3 pt-2 my-auto h-full max-h-[670px] mb-0 w-full bg-white flex-grow-1 rounded-b-2xl"
            id="displayPreview">
            <img src="{{ asset('asset/pp.png') }}"
                class="bg-white size-[90px] object-cover rounded-full mx-auto -mt-12 mb-2" id="profilePreview"
                alt="Profile">
            <h1 class="mb-2 text-xl font-bold text-center break-words whitespace-normal Title" id="titlePreview">Title
            </h1>
            <p class="mb-4 text-center break-words whitespace-normal About" id="aboutPreview">About goes here.</p>
            <div id="linkContainer" class="flex justify-center mx-auto space-x-2 previewButtons"></div>
            <div id="buttonContainer" class="justify-center w-full mt-4 space-y-2"></div>
        </div>
    </div>

    <button class="p-2 bg-white" type="submit">Save Previews</button>
</form>

<script>
    function setProps() {
        document.getElementById('displayPreviewClass').value = document.getElementById('displayPreview').className;
        document.getElementById('titlePreviewInput').value = document.getElementById('titlePreview').innerText;
        document.getElementById('aboutPreviewInput').value = document.getElementById('aboutPreview').innerText;
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
</script>
