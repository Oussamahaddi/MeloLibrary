<x-dash-layout>

    @php
        dd($artists);
    @endphp

    <div class="my-6 text-white font-bold text-2xl">
        <h2>Artist</h2>
    </div>
    <div class="grid grid-cols-4 gap-4">
        <a href="">
            <div id="music" class="h-full allMusics bg-gray-900 flex flex-col items-center justify-center rounded-sm hover:bg-gray-700 transition-all duration-500 shadow-[2px_2px_5px] shadow-yellow-400">
                <i class="fa-solid fa-plus text-yellow-400 text-3xl"></i>
            </div>
        </a>
    {{-- @foreach ($artists as $artist) --}}
        <div id="music" class="allMusics bg-gray-900 flex flex-col gap-3 rounded-sm hover:bg-gray-700 transition-all duration-500 group shadow-[2px_2px_5px] shadow-yellow-400">
            <div class="overflow-hidden h-full relative before:content-[''] before:absolute before:bg-gray-900 before:w-full before:h-24 before:-bottom-14 before:z-10 before:-skew-y-6 group-hover:before:bg-gray-700 before:transition-all before:duration-500">
                <img id="musicImg" class="rounded-t-sm shadow-[0_0_15px] shadow-black object-fill" src="{{asset('images/cover 1.jpg')}}" alt=""/>
            </div>
            <div class="p-4 flex flex-col gap-2 -mt-4">
                <h2 class="text-white font-bold text-xl">dadada</h2>
                <p class="text-gray-400">dadada</p>
            </div>
        </div>
    {{-- @endforeach --}}
    </div>

</x-dash-layout>