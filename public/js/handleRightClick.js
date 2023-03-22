
// /addToPlaylist/{{$playlist->id}}/{{$music->id}}
let musics = document.querySelectorAll('.music');
let menu = document.getElementById('menu');
let playlistMenu = document.querySelectorAll('.link');

document.addEventListener('contextmenu', e => {
    e.preventDefault();
})

musics.forEach((ele) => {
    ele.addEventListener("contextmenu", (e) => {
        // get music id from the the table rows while rightclick
        let musicId = ele.querySelector('.musicId').textContent.trim();

        // loop on playlists to get his id and set it on href with music id
        playlistMenu.forEach(ele => {
            // console.log(ele.id);
            ele.setAttribute('href', `/addToPlaylist/${ele.id}/${musicId}`);
        })
        // console.log(musicId);
        // show contextmenu while rightclicking on table with position
        let x = e.clientX,
            y = e.clientY;
        menu.classList.remove("hidden");
        menu.style.left = `${x}px`;
        menu.style.top = `${y}px`;
    });
});

document.addEventListener('click', e => {
    menu.classList.add('hidden')
});



