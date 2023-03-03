

<x-layout :playlists="$playlists">

    {{-- body of body --}}
    <section class="px-6 py-4 h-full">

        <div class="grid grid-cols-4 gap-4">
            @foreach ($playlists as $play)
                <div class="bg-gray-600/30 flex flex-col gap-3 p-4 rounded-xl overflow-hidden cursor-pointer transition-all duration-500 hover:-translate-y-2 hover:bg-gray-600/60 ">
                    <img class="rounded-xl shadow-[0_0_15px] shadow-black" src="{{ $play->image ? asset('storage/' . $play->image) : asset('images/playlist bg.jpg')}}" alt=""/>
                    <div>
                        <h2 class="text-white font-bold text-xl">{{$play->name}}</h2>
                        <p class="text-gray-400">Par creater name</p>
                    </div>
                </div>
            @endforeach
        </div>

        <hr class="border-gray-500 mt-16 mb-34 w-full" />
        <div class="h-64">

        </div>

    </section>

</x-layout>