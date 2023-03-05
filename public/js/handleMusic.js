
// all music on table
let music = document.querySelectorAll('.music');

// music footer bar
let footer = document.getElementById('footer');
let footerImg = document.getElementById('footerImg');
let footerTitle = document.getElementById('footerTitle');
let footerAlbum = document.getElementById('footerAlbum');
let footerMusic = document.getElementById('footerMusic');
// footer play button
let playBtn = document.getElementById('play');
// footer pause btn
let pauseBtn = document.getElementById("pause");
// footer next btn
let nextBtn = document.getElementById("next");
// footer previous btn
let previousBtn = document.getElementById("previous");

let currentSong = '';
let indexOfSong = 0;

music.forEach((ele, i) => {
    ele.addEventListener('click', () => {
        // remove bg from all element
        music.forEach(ele => {
            ele.classList.remove("bg-gray-200/20");
        });
        // add bg to the selected element
        ele.classList.add("bg-gray-200/20");
        // current song that clicked on
        currentSong = ele.querySelector(".audio").src;
        // current song index
        indexOfSong = i;
        // show footer bar
        footer.classList.remove('hidden');
        // replace footer with 
        footerImg.src = ele.querySelector(".musicImg").src;
        footerTitle.textContent = ele.querySelector(".title").textContent;
        footerAlbum.textContent = ele.querySelector(".album").textContent;
        footerMusic.src = currentSong;

        // play music on the footer bar
        footerMusic.play();
        console.log(currentSong);

        playBtn.classList.add("hidden");
        pauseBtn.classList.remove("hidden");
        console.log(indexOfSong);
    })
})

// play music 
playBtn.addEventListener("click", () => {
    footerMusic.play();
    playBtn.classList.add("hidden");
    pauseBtn.classList.remove("hidden");
});

// pause music
pauseBtn.addEventListener('click', () => {
    footerMusic.pause();
    playBtn.classList.remove("hidden");
    pauseBtn.classList.add("hidden");
})

// next btn
nextBtn.addEventListener('click', () => {
    indexOfSong++;
    // check if index of song big than length of all songs then return to 0
    if (indexOfSong > music.length - 1) {
        indexOfSong = 0;
        // nextBtn.preventDefault();
    }
    currentSong = music[indexOfSong].querySelector(".audio").src;
    // replace footer bar with song elements [song, image, title, album ...]
    let img = music[indexOfSong].querySelector(".musicImg").src;
    let title = music[indexOfSong].querySelector(".title").textContent;
    let album = music[indexOfSong].querySelector(".album").textContent;
    let audio = currentSong;
    handleFooter(img, title, album, audio);

    // remove bg from all music tr
    music.forEach((ele) => {
        ele.classList.remove("bg-gray-200/20");
    });
    // add bg to the next element
    music[indexOfSong].classList.add("bg-gray-200/20");
})

// next btn
previousBtn.addEventListener('click', () => {
    indexOfSong--;
    if (indexOfSong < 0) {
        indexOfSong = music.length - 1;
        // nextBtn.preventDefault();
    }
    currentSong = music[indexOfSong].querySelector(".audio").src;
    let img = music[indexOfSong].querySelector(".musicImg").src;
    let title = music[indexOfSong].querySelector(".title").textContent;
    let album = music[indexOfSong].querySelector(".album").textContent;
    let audio = currentSong;
    handleFooter(img, title, album, audio);
    // remove bg from all music tr
    music.forEach((ele) => {
        ele.classList.remove("bg-gray-200/20");
    });
    // add bg to the next element
    music[indexOfSong].classList.add("bg-gray-200/20");
})
// function  that handle the footer bar to avoid DRY
function handleFooter(img, title, album, audio) {
    footerImg.src = img;
    footerTitle.textContent = title;
    footerAlbum.textContent = album;
    footerMusic.src = audio;
    footerMusic.play();
}


