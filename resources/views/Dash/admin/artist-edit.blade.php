<x-dash-layout>


    <div class="w-4/6 bg-gray-700/40 p-6 mx-auto mt-4">
        <form action="/admin/storeEditArtist/{{$artist->id}}" method="POST" enctype="multipart/form-data" class="w-full">

            @csrf
            @method('PUT')

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="artist_name" value="{{$artist->artist_name}}" id="floating_email" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-yellow-600 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-400 peer" placeholder=""/>
                <label for="artist_name" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Artist Name</label>
                @error('artist_name')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="city" value="{{$artist->city}}" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-yellow-600 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-400 peer" placeholder=" "/>
                <label for="city" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">City</label>
                @error('city')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="date" name="age" value="{{$artist->age}}" id="floating_first_name" class="block py-2.5 px-0 w-full text-sm text-gray-400 bg-transparent border-0 border-b-2 border-yellow-600 appearance-none  focus:outline-none focus:ring-0 focus:border-yellow-400 peer" placeholder=" " />
                <label for="age" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Age</label>
                @error('age')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="file" name="image" value="{{$artist->image}}" id="floating_last_name" class="block py-2.5 px-0 w-full text-sm text-white bg-transparent border-0 border-b-2 border-yellow-600 appearance-none focus:outline-none focus:ring-0 focus:border-yellow-400 peer" placeholder=" " />
                <label for="image" class="peer-focus:font-medium absolute text-sm text-white duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-yellow-400 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Image</label>
                @error('image')
                    <span class="text-red-500">{{$message}}</span>
                @enderror
            </div>
            

            <button type="submit" class="text-black bg-yellow-400 hover:bg-yellow-700 focus:ring-4 focus:outline-none focus:ring-yellow-400 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>


</x-dash-layout>