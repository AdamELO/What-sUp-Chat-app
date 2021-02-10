<div>
    <div class="grid grid-rows-3 grid-flow-col mt-2">
        <div class="row-span-3 rounded-lg bg-blue-100 mx-2" style="height: 80vh">
            <div class="ml-2">
                <i class="fas fa-bars"></i>&nbsp; Side Menu
            </div>
            <div class="rounded-lg bg-gray-100 mx-2">
                <div class="my-3 flex justify-center">
                    <h1>My Friends &nbsp;</h1>
                    <span class="inline-flex items-center justify-center px-2 py-1 mr-2 text-xs text-black bg-gray-300 rounded-full">
                        {{count($friends)}}
                    </span>
                </div>
                <div class="mx-2">
                    @foreach ($friends as $friend)
                    <div class="flex my-3">
                        <img width="50px" height="50px" class="rounded-full" src="./img/{{ $friend->avatar }}"
                            alt="avatar friend">
                        <h1 class="ml-2 inline-flex items-center justify-center text-gray-600">{{ $friend->name }}</h1>
                    </div>
                    @endforeach
                </div>
                {{$friends->links()}}
            </div>
        </div>
        <div class="col-span-3" style="height: 80vh">
            @livewire('chat')
        </div>
        <div class="row-span-3 border border-black text-center" style="height: 80vh">3</div>
    </div>
</div>
