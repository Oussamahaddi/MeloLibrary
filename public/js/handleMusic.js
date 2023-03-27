
// all music on table
let music = document.querySelectorAll('.music');

// music footer bar
let footer = document.getElementById('footer');
let footerImg = document.getElementById('footerImg');
let footerTitle = document.getElementById('footerTitle');
let footerAlbum = document.getElementById('footerAlbum');
// footer audio src
let footerMusic = document.getElementById('footerMusic');
// footer play button
let playBtn = document.getElementById('play');
// footer pause btn
let pauseBtn = document.getElementById("pause");
// footer next btn
let nextBtn = document.getElementById("next");
// footer previous btn
let previousBtn = document.getElementById("previous");
// footer volum
let volumInp = document.getElementById('volumInp');
// footer mute btn
let muteBtn = document.getElementById('mute');
// footer demute btn
let unmuteBtn = document.getElementById('unmute');
// footer start music duration
let startMusicDuration = document.getElementById("startMusicDuration");
// footer end music duration
let endMusicDuration = document.getElementById("endMusicDuration");
// footer progress bar
let progressBar = document.getElementById("progressBar");


let currentSong = '';
let indexOfSong = 0;
let currentDuration = 0;

volumInp.value = 80;
progressBar.value = 0;

music.forEach((ele, i) => {
    ele.addEventListener("dblclick", () => {
        // remove bg from all element
        music.forEach((ele) => {
            ele.classList.remove("bg-gray-200/20");
        });

        // add bg to the selected element
        ele.classList.add("bg-gray-200/20");
        // current song that clicked on
        currentSong = ele.querySelector(".audio").src;
        // current song index
        indexOfSong = i;
        // show footer bar
        footer.classList.remove("hidden");
        // replace footer with
        footerImg.src = ele.querySelector(".musicImg").src;
        footerTitle.textContent = ele.querySelector(".title").textContent;
        footerAlbum.textContent = ele.querySelector(".album").textContent;
        footerMusic.src = currentSong;

        // play music on the footer bar
        footerMusic.play();
        
        // give the footer current volume
        footerMusic.volume = volumInp.value / 100;

        playBtn.classList.add("hidden");
        pauseBtn.classList.remove("hidden");
    });
})

// get the duration of a song
footerMusic.addEventListener('loadedmetadata', () => {
    currentDuration = footerMusic.duration;
    let second = `${parseInt(`${currentDuration % 60}`, 10)}`.padStart(2,'0');
    let minute = parseInt(`${(currentDuration / 60) % 60}`, 10);
    endMusicDuration.textContent = `${minute}:${second}`;
    progressBar.max = currentDuration;
});
// get updated time by second and update the progress bar in the same time
footerMusic.addEventListener('timeupdate', () => {
    updateProgress(footerMusic.currentTime);
});
// update progressbar while music played
function updateProgress(time) {
    progressBar.value = time;
    let second = `${parseInt(`${time % 60}`, 10)}`.padStart(2, "0");
    let minute = parseInt(`${(time / 60) % 60}`, 10);
    startMusicDuration.textContent = `${minute}:${second}`;
} 

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

////////////// handle the volum
volumInp.addEventListener('input', () => {
    mute.classList.remove("text-gray-500");
    if (volumInp.value <= 1) {
        mute.classList.add("text-gray-500");
    }
    footerMusic.volume = volumInp.value / 100;
})
mute.addEventListener('click', () => {
    mute.classList.add('text-gray-500');
    volumInp.value = 0;
    footerMusic.volume = 0;
})
unmute.addEventListener('click', () => {
    mute.classList.remove("text-gray-500");
    volumInp.value = 100;
    footerMusic.volume = volumInp.value / 100;
})
