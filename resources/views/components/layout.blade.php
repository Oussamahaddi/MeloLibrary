<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css'>
    <link type="text/css" rel="stylesheet" href="{{ mix('css/app.css') }}"> 
    <link rel="stylesheet" href="./style.css">
    <title>MeloLibrary</title>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="grid grid-rows-3 grid-cols-6 h-screen">
        <nav class="col-span-1 row-span-3 bg-gray-900 pt-6">
            <div class="px-6 mb-6">
                <div class="w-full flex justify-around items-center gap-4">
                    <img src="{{asset('images/logo.png')}}" alt="" class="w-12">
                    <h1 class="font-bold text-yellow-300 text-xl">MeloLibrary</h1>
                </div>
            </div>
            <div class="px-2 mb-6 mt-12">
                <ul>
                    <li class="bg-yellow-400 flex font-medium items-center px-4 py-2 rounded text-sm text-black">
                        Home
                    </li>
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
        
        {{-- body --}}
        <main class="col-span-5 row-span-3">


            {{$slot}}


        </main>
        <footer class="bg-yellow-400 col-span-6 p-4 grid grid-cols-3 gap-6">
            <div class="flex items-center">
                <div class="overflow-hidden rounded-xl mr-4">
                    <img class="h-14 w-14 flex-shrink-0" src="{{asset('images/cover 1.jpg')}}" alt="" />
                </div>
                <div class="mr-4">
                    <div class="text-sm text-black text-line-clamp-1 font-semibold">
                        Heaven
                    </div>
                    <div class="text-xs text-gray-600 text-line-clamp-1">
                        <span>Ludwig van Beethoven</span>
                    </div>
                </div>
                <div class="flex items-center">
                    <button class="text-black p-2">
                        <svg class="w-4 h-4 fill-current" viewBox="0 0 20 20">
                            <path
                                d="M10 3.22l-.61-.6a5.5 5.5 0 0 0-7.78 7.77L10 18.78l8.39-8.4a5.5 5.5 0 0 0-7.78-7.77l-.61.61z" />
                        </svg>
                    </button>
                </div>
            </div>
            <div>
                <div class="flex items-center justify-center mb-3">
                    <button class="w-5 h-5 text-black mr-6">
                        <svg class="fill-current w-3" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M6.59 12.83L4.4 15c-.58.58-1.59 1-2.4 1H0v-2h2c.29 0 .8-.2 1-.41l2.17-2.18 1.42 1.42zM16 4V1l4 4-4 4V6h-2c-.29 0-.8.2-1 .41l-2.17 2.18L9.4 7.17 11.6 5c.58-.58 1.59-1 2.41-1h2zm0 10v-3l4 4-4 4v-3h-2c-.82 0-1.83-.42-2.41-1l-8.6-8.59C2.8 6.21 2.3 6 2 6H0V4h2c.82 0 1.83.42 2.41 1l8.6 8.59c.2.2.7.41.99.41h2z" />
                        </svg>
                    </button>
                    <button class="w-5 h-5 text-black mr-6">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M4 5h3v10H4V5zm12 0v10l-9-5 9-5z" />
                        </svg>
                    </button>
                    <button class="w-8 h-8 border border-black rounded-full flex text-black mr-6">
                        <svg class="fill-current h-5 w-5 m-auto" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M5 4h3v12H5V4zm7 0h3v12h-3V4z" />
                        </svg>
                    </button>
                    <button class="w-5 h-5 text-black mr-6">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path d="M13 5h3v10h-3V5zM4 5l9 5-9 5V5z" />
                        </svg>
                    </button>
                    <button class="w-5 h-5 text-black">
                        <svg class="fill-current w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                            <path
                                d="M10 3v2a5 5 0 0 0-3.54 8.54l-1.41 1.41A7 7 0 0 1 10 3zm4.95 2.05A7 7 0 0 1 10 17v-2a5 5 0 0 0 3.54-8.54l1.41-1.41zM10 20l-4-4 4-4v8zm0-12V0l4 4-4 4z" />
                        </svg>
                    </button>
                </div>
                <div class="flex items-center">
                    <span class="text-xs text-black font-light">4:18</span>
                    <div class="overflow-hidden relative flex-1 mx-2 rounded">
                        <div class="border-b-4 border-gray-400 rounded"></div>
                        <div
                            class="absolute inset-x-0 top-0 -translate-x-48 border-b-4 border-black rounded transform hover:border-green-200">
                        </div>
                    </div>
                    <span class="text-xs text-black font-light">5:13</span>
                </div>
            </div>
        </footer>
    </div>
    <!-- partial -->

</body>

</html>