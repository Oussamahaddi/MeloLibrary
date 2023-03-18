

 /// for add image

let img = document.getElementById('img');
let inp = document.getElementById('dropzone-file');
let textupload = document.getElementById('textupload');

inp.addEventListener('change', () => {
    img.setAttribute('src', `/images/${inp.value.substring(12)}`);
    textupload.setAttribute('class', 'hidden');
})
