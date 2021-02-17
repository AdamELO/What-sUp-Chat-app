<div>
    <div class="rounded-lg bg-gray-100 mx-2 pb-1">
        <div class="mb-3 flex justify-center mt-5">
            <h1 class="mt-1">My Friends &nbsp;</h1>
            <span
                class="inline-flex items-center justify-center px-2 py-1 mr-2 mt-1 text-xs text-black bg-gray-300 rounded-full">
                {{ count($friends) }}
            </span>
        </div>
        <div class="mx-2">
            @foreach ($friends as $friend)
            <a href="/uichat">
                <div class="flex my-3 flex justify-between items-center border border-orange-300 rounded-lg px-1 cursor-pointer">
                    <img width="50px" height="50px" class="rounded-full" src="./img/{{ $friend->avatar }}"
                        alt="avatar friend">
                    <h1 class="ml-3 inline-flex items-center justify-center text-gray-600">
                        {{ $friend->name }}
                    </h1>
                    <span class="{{$friend->status == 1 ? 'bg-green-500' : 'bg-red-500'}} rounded-full px-1 py-1 inline-flex items-center justify-center"></span>
                </div>
            </a>
            @endforeach
        </div>
        {{ $friends->links() }}
    </div>
</div>