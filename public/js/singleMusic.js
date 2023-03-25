
// handle the comment btn
let commentBtn = document.getElementById("commentBtn");
let commentForm = document.getElementById('commentForm')

commentBtn.addEventListener('click', () => {
    commentForm.classList.toggle('hidden');
});



// handle the music btn
let singleFooter = document.getElementById("footer");
let footerAudioSrc = document.getElementById("footerMusic");
// src music
let musicSrc = document.getElementById("singleMusicSrc").src;

let playButton = document.getElementById('playBtn');
let pauseutton = document.getElementById('pauseBtn');

// play music
playButton.addEventListener("click", () => {
    playBtn.classList.add('hidden');
    pauseBtn.classList.remove('hidden');
    footerAudioSrc.src = musicSrc;
    singleFooter.classList.remove('hidden');
    footerMusic.play();
});