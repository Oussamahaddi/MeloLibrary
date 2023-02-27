<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css'>
    <link type="text/css" rel="stylesheet" href="{{asset('css/app.css') }}">
    <link rel="stylesheet" href="./style.css">
    <title>MeloLibrary</title>
</head>

<body>
    <!-- partial:index.partial.html -->
    <div class="grid grid-rows-3 grid-cols-6 h-screen">

        {{-- asidebar componenet --}}
        <x-asidebar />
        
        {{-- body --}}
        <main class="col-span-5 row-span-3 bg-black">
            {{-- header of body --}}
            <header class="px-6 py-4 bg-gray-900 flex items-center justify-between sticky top-0 z-10">
                @include('partials._search')
                <div class="flex items-center">
                    <a href="/login"><button type="button" class="text-black bg-yellow-400 font-semibold hover:bg-yellow-600 rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Login</button></a>
                    <a href="/register"><button type="button" class="text-yellow-400 bg-none border-2 border-yellow-400 font-semibold hover:bg-yellow-400 hover:text-black rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 ">Register</button></a>
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