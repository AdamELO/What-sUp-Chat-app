    <div>
        <div class="rounded-lg bg-white w-4/5 mx-auto mt-5" style="height: 70vh">
            <br>
            <h1 class="my-1 text-center text-orange-300 underline">Find your friends</h1>
            <input type="search" wire:model='searchPeople'
                class=" mb-8 mt-3 w-4/5 flex mx-auto border-2 border-orange-300 p-2" placeholder="Search by name...">
            <div class="rounded-lg w-2/3 flex flex-col mx-auto">
                @foreach ($users as $user)
                    <ul class="flex flex-col m-3">
                        <li class="flex flex-row">
                            <div
                                class="flex flex-1 items-center transition duration-500 ease-in-out justify-around transform hover:-translate-y-2 rounded-2xl border-2 p-3 hover:shadow-2xl border-orange-300">
                                @if (Storage::disk('public')->has($user->avatar))
                                    <img class="rounded-full w-12 h-12"
                                        src="{{ asset('storage/' . $user->avatar) }}" alt="avatar friend">
                                @else
                                    <img class="rounded-full w-12 h-12"
                                        src="./img/{{ $user->avatar }}" alt="avatar friend">
                                @endif
                                <h1 class="text-gray-600">
                                    {{ $user->name }}
                                </h1>
                                <button wire:click='addFriend({{ $user->id }})'
                                    class="rounded-lg p-1 bg-green-300 text-green-600">Add <i
                                        class="fas fa-user-plus"></i></button>
                            </div>
                        </li>
                    </ul>
                @endforeach
            </div>
            <div class="mx-auto flex justify-center">
                {{ $users->links() }}
            </div>
        </div>
    </div>
