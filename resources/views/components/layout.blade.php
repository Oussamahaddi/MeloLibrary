<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css'>
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css') }}">
    <link rel="stylesheet" href="./style.css">
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>MeloLibrary</title>
</head>

<body>

    {{-- load this flash messge after register succes --}}

    <!-- partial:index.partial.html -->
    <div class="grid grid-rows-3 grid-cols-6 h-screen">

        {{-- asidebar componenet --}}
        <x-asidebar />
        
        {{-- body --}}
        <main class="col-span-5 row-span-3 bg-black ml-2">
            {{-- header of body --}}
            <header class="px-6 py-4 bg-gray-900/80 flex items-center justify-between sticky top-0 z-10 fixed">
                {{-- include the search bar --}}
                @include('partials._search')
                <div class="flex items-center">
                    @auth
                        <div  class="flex items-center gap-4">
                            <span class="text-yellow-400 font-bold">Welcome back {{auth()->user()->name}}</span>
                            <img src="{{asset('images/avatar.jpg')}}" alt="" class="w-[30px] rounded-full hover:border-yellow-400 hover:border-2">
                            <form action="/logout">
                                @csrf
                                <button class="text-black bg-yellow-400 font-semibold hover:bg-yellow-600 rounded-lg text-sm px-5 py-2">Log Out</button></a>
                            </form>
                        </div>
                    @else
                        <a href="/login"><button type="button" class="text-black bg-yellow-400 font-semibold hover:bg-yellow-600 rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Login</button></a>
                        <a href="/register"><button type="button" class="text-yellow-400 bg-none font-semibold hover:bg-yellow-400 hover:text-black rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Register</button></a>
                    @endauth
                </div>
            </header>


            {{$slot}}


        </main>
        
        {{-- footer components --}}
        <x-footer />

    </div>
    <!-- partial -->

</body>

</html>