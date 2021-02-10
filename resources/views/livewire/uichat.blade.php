<div>
    <div class="grid grid-rows-3 grid-flow-col mt-2">
        <div class="row-span-3 rounded-lg bg-blue-100 mx-2" style="height: 80vh">
            <div class="rounded-lg bg-gray-100 mx-2">
                <div class="my-3 flex justify-center mt-5">
                    <h1 class="mt-1">My Friends &nbsp;</h1>
                    <span
                        class="inline-flex items-center justify-center px-2 py-1 mr-2 mt-1 text-xs text-black bg-gray-300 rounded-full">
                        {{ count($friends) }}
                    </span>
                </div>
                <div class="mx-2">
                    @foreach ($friends as $friend)
                        <div class="flex my-3 flex justify-between items-center">
                            <img width="50px" height="50px" class="rounded-full" src="./img/{{ $friend->avatar }}"
                                alt="avatar friend">
                            <h1 class="ml-3 inline-flex items-center justify-center text-gray-600">
                                {{ $friend->name }}
                            </h1>
                            <span class="bg-green-500 rounded-full px-1 py-1 inline-flex items-center justify-center"></span>
                        </div>
                    @endforeach
                </div>
                {{ $friends->links() }}
            </div>
        </div>
        <div class="col-span-3" style="height: 80vh">
            @livewire('chat')
        </div>
        <div class="row-span-3 rounded-lg bg-blue-100 mx-2" style="height: 80vh">
            <div class="bg-orange-300 shadow-lg w-3/4 mx-auto my-2 flex justify-center items-center flex-col rounded-lg">
                @if (Storage::disk('public')->has(Auth::user()->avatar))
                    <img class="rounded-full w-12 h-12 mt-2" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="">
                @else
                    <img class="rounded-full w-12 h-12 mt-2" src='./img/{{ Auth::user()->avatar }}' alt=""/>  
                @endif
                <div class="text-black">{{ Auth::user()->name }}</div>
                <div class="text-xs text-gray-500">
                    <div class="rounded-l-2xl rounded-r-sm mb-1 p-1 px-4 cursor-pointer bg-gray-700 text-white">
                        <a href="/editprofile">
                            <i class="fas fa-cog"></i>
                            &nbsp;Edit Profile
                        </a>
                    </div>
                </div>
            </div>
            <div class="rounded-lg ">
                @livewire('menu')
            </div>
        </div>
    </div>
</div>
