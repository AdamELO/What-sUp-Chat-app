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
                <a href="/uichat{{ $friend->id }}">
                    <div
                        class="flex my-3 flex justify-between items-center border border-orange-300 {{ Request::segment(1) == 'uichat' . $friend->id ? 'bg-orange-300' : '' }} rounded-lg px-1 cursor-pointer">
                        @if (Storage::disk('public')->has($friend->avatar))
                            <img class="rounded-full w-12 h-12"
                                src="{{ asset('storage/' . $friend->avatar) }}" alt="avatar friend">
                        @else
                            <img class="rounded-full w-12 h-12" src="./img/{{ $friend->avatar }}"
                                alt="avatar friend">
                        @endif
                        <h1 class="ml-3 inline-flex items-center justify-center text-gray-600">
                            {{ $friend->name }}
                        </h1>
                        @livewire('statuslist', ['friend' => $friend], key($friend->id))
                    </div>
                </a>
            @endforeach
        </div>
    </div>
    <div class="flex justify-center mt-5">
        {{ $friends->links() }}
    </div>
</div>
