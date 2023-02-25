<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css'>
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
                <div class="bg-yellow-400 flex font-medium items-center px-4 py-2 rounded text-sm text-black">
                    <svg class="h-6 mr-4" viewBox="0 0 512 512" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M448 463.746h-149.333v-149.333h-85.334v149.333h-149.333v-315.428l192-111.746 192 110.984v316.19z" fill="currentColor"></path>
                    </svg>
                    Home
                </div>
                <div class="flex font-medium items-center px-4 py-2 rounded text-sm text-gray-100 hover:text-white">
                    
                </div>
                <div class="flex font-medium items-center px-4 py-2 rounded text-sm text-gray-100 hover:text-white">
                    <svg class="h-6 mr-4" viewBox="0 0 512 512" width="24" height="24" xmlns="http://www.w3.org/2000/svg">
                        <path d="M291.301 81.778l166.349 373.587-19.301 8.635-166.349-373.587zM64 463.746v-384h21.334v384h-21.334zM192 463.746v-384h21.334v384h-21.334z" fill="currentColor"></path>
                    </svg>
                    Your Library
                </div>
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
            {{-- header of body --}}
            <header class="px-6 py-4 bg-gray-900 flex items-center justify-between sticky top-0 z-10">
                @include('partials._search')
                <div class="flex">
                    <button type="button" class="text-black bg-yellow-400 font-semibold hover:bg-yellow-600 rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Login</button>
                    <button type="button" class="text-yellow-400 bg-none border-2 border-yellow-400 font-semibold hover:bg-yellow-400 hover:text-black rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Register</button>
                </div>
            </header>
            {{-- body of body --}}
            <section class="px-6 py-4 bg-black h-full">
                <div class="flex items-center h-fit mb-6">
                    <div class="flex-1">
                        <h3 class="text-2xl text-white">
                            <a class="border-b border-transparent hover:border-white" href="">Recently played</a>
                        </h3>
                    </div>
                    <div>
                        <a class="text-xs text-gray-100 tracking-widest uppercase hover:underline" href="">See all</a>
                    </div>
                </div>
                {{-- covers  --}}
                <div class="grid grid-cols-6 gap-4">
                    <x-cover />
                </div>
            </section>
            
            {{-- <section class="px-6 grid gap-6 mb-8">
                <div class="flex items-center">
                    <div class="flex-1">
                        <h3 class="text-2xl text-white">
                            <a class="border-b border-transparent hover:border-white" href="">Made for Jedidiah</a>
                        </h3>
                    </div>
                    <div>
                        <a class="text-xs text-gray-100 tracking-widest uppercase hover:underline" href="">See all</a>
                    </div>
                </div>
                <div class="grid grid-cols-6 gap-4">
                    <div class="bg-gray-200 rounded-lg p-5">
                        <div class="relative pt-full mb-4">
                            <img class="block w-full absolute inset-0" src="https://picsum.photos/129.webp?random=1"
                                alt="" />
                        </div>
                        <div class="text-sm text-white text-line-clamp-1 mb-1 block">
                            Chinese Lo-FI
                        </div>
                        <div class="relative pb-5">
                            <span class="text-xs text-gray-100 text-line-clamp-1">By @Nike1nike</span>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-lg p-5">
                        <div class="relative pt-full mb-4">
                            <img class="block w-full absolute inset-0" src="https://picsum.photos/129.webp?random=2"
                                alt="" />
                        </div>
                        <div class="text-sm text-white text-line-clamp-1 mb-1 block">
                            FLY
                        </div>
                        <div class="relative pb-5">
                            <span class="text-xs text-gray-100 text-line-clamp-1">Gaho</span>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-lg p-5">
                        <div class="relative pt-full mb-4">
                            <img class="block w-full absolute inset-0" src="https://picsum.photos/129.webp?random=3"
                                alt="" />
                        </div>
                        <div class="text-sm text-white text-line-clamp-1 mb-1 block">
                            Ludwig van Beethoven
                        </div>
                        <div class="relative pb-5">
                            <span class="text-xs text-gray-100 text-line-clamp-1">Artist</span>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-lg p-5">
                        <div class="relative pt-full mb-4">
                            <img class="block w-full absolute inset-0" src="https://picsum.photos/129.webp?random=4"
                                alt="" />
                        </div>
                        <div class="text-sm text-white text-line-clamp-1 mb-1 block">
                            Hotel Del Luna OST
                        </div>
                        <div class="relative pb-5">
                            <span class="text-xs text-gray-100 text-line-clamp-1">By Jamie Lee</span>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-lg p-5">
                        <div class="relative pt-full mb-4">
                            <img class="block w-full absolute inset-0" src="https://picsum.photos/129.webp?random=5"
                                alt="" />
                        </div>
                        <div class="text-sm text-white text-line-clamp-1 mb-1 block">
                            ITAEWON CLASS (Original Television Soundtrack) Pt.2
                        </div>
                        <div class="relative pb-5">
                            <span class="text-xs text-gray-100 text-line-clamp-1">Gaho</span>
                        </div>
                    </div>
                    <div class="bg-gray-200 rounded-lg p-5">
                        <div class="relative pt-full mb-4">
                            <img class="block w-full absolute inset-0" src="https://picsum.photos/129.webp?random=6"
                                alt="" />
                        </div>
                        <div class="text-sm text-white text-line-clamp-1 mb-1 block">
                            Preparation For a Journey
                        </div>
                        <div class="relative pb-5">
                            <span class="text-xs text-gray-100 text-line-clamp-1">Gaho</span>
                        </div>
                    </div>
                </div>
            </section> --}}
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