

<x-layout>

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

</x-layout>