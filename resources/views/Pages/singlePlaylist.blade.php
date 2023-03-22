

<x-layout :playlists="$playlists">

    <div class="w-full bg-gradient-to-b from-gray-900 to-gray-600 bg-gradient-to-r">
        <div class="w-5/6 mx-auto flex gap-8  p-4">
            <div class="shadow-[0_0_35px] shadow-gray-900">
                <img src="{{$playlist->image ? $playlist->image : asset('images/playlist bg.jpg')}}" alt="" class="w-64">
            </div>
            <div class="flex flex-col justify-around text-white">
                <p>Playlist</p>
                <h3 class="font-bold text-7xl">{{$playlist->name}}</h3>
                <p>{{$user->name}}</p>
            </div>
        </div>
    </div>
    <div>

    </div>
    <div class="w-5/6 mx-auto">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-400 border-b border-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        #
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Titre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Album
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Creation Date
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($musics as $music) --}}
                    <tr class="music bg-transparent hover:bg-gray-200/20 cursor-pointer">
                        <td class="px-6">
                            1
                        </td>
                        <td class="flex gap-4 items-center font-bold text-white ">
                            <img src="{{asset('images/cover 2.jpg')}}" alt="" class="musicImg w-14">
                            <a href="" class="title hover:underline">Hahahahah</a>
                        </td>
                        <td class="album px-6 font-semibold">
                            dadada
                        </td>
                        <td class="date px-6 font-semibold text-gray-900 dark:text-white">
                            11
                        </td>
                        <td>
                            <a href="/deleteMusic/"><i class="fa-solid fa-trash text-red-400 hover:text-red-500"></i></a>
                        </td>
                        <td class="hidden">
                            <audio controls src="{{asset('audio/desert.mp3')}}" class="audio"></audio>
                        </td>
                    </tr>
                {{-- @endforeach --}}
            </tbody>
        </table>
    </div>

</x-layout>