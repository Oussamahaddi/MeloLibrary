<nav class="col-span-1 row-span-3 bg-gray-900 pt-6">
    <div class="px-6 mb-6">
        <div class="w-full flex justify-around items-center gap-4">
            <img src="{{asset('images/logo.png')}}" alt="" class="w-12">
            <h1 class="font-bold text-yellow-300 text-xl">MeloLibrary</h1>
        </div>
    </div>
    <div class="px-2 mb-6 mt-12">
        <ul>
            <a href="/">
                <li class="bg-yellow-400 flex font-semibold items-center px-4 py-4 rounded text-sm text-black">
                    Home
                </li>
            </a>
            <a href="/playlist">
                <li class=" flex font-semibold items-center px-4 py-4 rounded text-sm text-white">
                    PlayList
                </li>
            </a>
            <a href="/albume">
                <li class=" flex font-semibold items-center px-4 py-4 rounded text-sm text-white">
                    Albume
                </li>
            </a>
        </ul>
    </div>
    <div>
        <h3 class="text-xs text-gray-100 uppercase text-white px-6 tracking-widest font-light mb-4"> Playlists
        </h3>
        <div class="mb-3">
            <div class="px-6 py-1 flex items-center text-sm text-white opacity-50 hover:opacity-100">
                <svg class="bg-white fill-current h-8 mr-4 p-1 text-black w-8" shape-rendering="crispEdges"
                    viewBox="0 0 36 36">
                    <path d="m28 20h-8v8h-4v-8h-8v-4h8v-8h4v8h8v4z"></path>
                </svg>
                Create Playlist
            </div>
            <div class="px-6 py-1 flex items-center text-sm text-white opacity-50 hover:opacity-100">
                <svg class="bg-liked-songs fill-current h-8 mr-4 p-2 w-8" viewBox="0 0 20 20">
                    <path
                        d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z" />
                </svg>
                Liked Songs
            </div>
        </div>
        <hr class="border-gray-200 mx-6 mb-3" />
    </div>
</nav>