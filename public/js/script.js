function previewImage() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    const imgThumbail = document.querySelector('.img-thumbnails');
    // const imgbox = document.getElementById('image-box');

    const Xoffset = document.getElementById('xposition');
    const Yoffset = document.getElementById('yposition');
    const Zoom = document.getElementById('scalezoom');




    imgPreview.style.display = 'block';
    // imgbox.style.background = "white"

    document.getElementById('Insert1').style.display = 'none'
    document.getElementById('Insert2').style.display = 'none'


    // const oFReader = new FileReader();
    // oFReader.readAsDataURL(image.files[0]);

    // oFReader.onload = function(oFREvent) {
    //     imgPreview.src = oFREvent.target.result;
    // }

    if (image.files[0]) { // Periksa apakah file dipilih
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            const imageUrl = oFREvent.target.result;
            imgPreview.style.backgroundImage = `url(${imageUrl})`;
            imgThumbail.style.backgroundImage = `url(${imageUrl})`;

        };
    }

    Xoffset.value = 0
    Yoffset.value = 0
    Zoom.value = 100
    
}

function previewImageEdit() {
    const image = document.querySelector('#image');
    const imgPreview = document.querySelector('.img-preview');
    const imgThumbail = document.querySelector('.img-thumbnails');
    // const imgbox = document.getElementById('image-box');

    const Xoffset = document.getElementById('xposition');
    const Yoffset = document.getElementById('yposition');
    const Zoom = document.getElementById('scalezoom');

    Xoffset.value = 0
    Yoffset.value = 0
    Zoom.value = 100


    imgPreview.style.display = 'block';


    if (image.files[0]) { // Periksa apakah file dipilih
        const oFReader = new FileReader();
        oFReader.readAsDataURL(image.files[0]);

        oFReader.onload = function(oFREvent) {
            const imageUrl = oFREvent.target.result;
            imgPreview.style.backgroundImage = `url(${imageUrl})`;
            imgThumbail.style.backgroundImage = `url(${imageUrl})`;

        };
    }
    
}


// function AdjustImage() {
 

// }

setInterval(() => {
    const Xoffset = document.getElementById('xposition');
    const Yoffset = document.getElementById('yposition');
    const Zoom = document.getElementById('scalezoom');

    const imgPreview = document.querySelector('.img-preview');
    const imgThumbail = document.querySelector('.img-thumbnails');

    const backgroundPositionValue = Xoffset.value + 'px' +' ' + Yoffset.value + 'px';
    const thumbnailsPositionValue = (Xoffset.value * 0.7) + 'px' +' ' + (Yoffset.value * 0.7)  + 'px';


    imgPreview.style.backgroundPosition = backgroundPositionValue;
    imgThumbail.style.backgroundPosition = thumbnailsPositionValue;

    imgPreview.style.backgroundSize = Zoom.value + '%';
    imgThumbail.style.backgroundSize = Zoom.value + '%';

    




}, 0);


function togglePassword() {
    const eye = document.getElementById('eye1');
    const passwordInput = document.getElementById('password');

    if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        eye.src = '/image/eye-white.png'; // Ganti dengan path ke ikon mata terbuka
    } else {
        passwordInput.type = 'password';
        eye.src = '/image/eye-white-cross.png'; // Ganti dengan path ke ikon mata tertutup
    }
}

