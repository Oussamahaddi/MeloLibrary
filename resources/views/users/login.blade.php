
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/1.2.0/tailwind.min.css'>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>Login</title>
</head>
<body>

    {{-- load this flash messge after register succes --}}
    <x-flash-message />

    <section class="w-full bg-gray-900 h-screen flex justify-center items-center ">
        <div class="w-5/6 h-5/6 grid grid-cols-2 relative">

            <div class="absolute left-4 z-10 top-4">
                <a href="/"><button class="text-black bg-yellow-400 hover:bg-black hover:text-yellow-400 hover:border-2 hover:border-yellow-400 font-semibold rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Back</button></a>
            </div>

            <form action="/users/authentification" method="POST" class="bg-black text-white w-full flex justify-center items-center p-4 rounded-l-xl">
                
                @csrf
                
                <div class="w-5/6 grid gap-4">
                    <div class="flex flex-col items-center mb-2">
                        {{-- old is a helper that save data on the value when submiting --}}
                        <input type="email" name="email" value="{{old('email')}}" id="email" placeholder="email" class=" w-4/6 py-1 px-3 rounded-full shadow-[0_0_5px] shadow-yellow-400 bg-transparent focus:outline-none focus:ring focus:ring-yellow-400">
                        
                        {{-- error directive --}}
                        @error('email')
                            <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col items-center mb-2">
                        <input type="password" name="password" id="pwd" placeholder="password" class=" w-4/6 py-1 px-3 rounded-full shadow-[0_0_5px] shadow-yellow-400 bg-transparent focus:outline-none focus:ring focus:ring-yellow-400">
                    
                        {{-- error directive --}}
                        @error('password')
                            <span class="text-red-500 text-xs mt-1">{{$message}}</span>
                        @enderror
                    </div>
                    <div class="flex justify-center">
                        <button class="text-black border-2 border-black bg-yellow-400 hover:bg-black hover:text-yellow-400 hover:border-2 hover:border-yellow-400 font-semibold rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 ">Login</button>
                    </div>
                </div>
            </form>

            <div class="hidden relative sm:block">
                <a href="/register"><div class="font-semibold after:content-[''] after:absolute after:left-0 after:top-1/2 after:-translate-x-1/2 after:z-10 after:-translate-y-1/2 after:w-[80px] after:aspect-square after:bg-yellow-400 after:border-2 after:border-black after:rounded-full before:content-['Register'] before:absolute before:top-1/2 before:left-0 before:z-20 before:-translate-y-1/2 before:-translate-x-1/2 hover:text-yellow-400 hover:after:bg-black hover:after:border-yellow-400 duration-500"></div></a>
                <img src="{{asset('images/registerbg.jpg')}}" alt="" class="h-full w-full rounded-r-xl">
            </div>
        </div>
    </section>

</body>
</html>