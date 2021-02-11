    <div>
        <div>
            <h1 class="my-2 text-center">Find your friends now !!!</h1>
            <input type="search" wire:model='searchPeople'
                class=" mb-8 w-4/5 flex mx-auto border-2 border-orange-300 p-2" placeholder="Search by name...">
                <div class="rounded-lg w-2/5 bg-white">
                    @foreach ($users as $user)
                        <div class="flex my-3 flex">
                            <img width="50px" height="50px" class="rounded-full" src="./img/{{ $user->avatar }}"
                                alt="avatar friend">
                            <h1 class="inline-flex items-center justify-center text-gray-600">
                                {{ $user->name }}
                            </h1>
                            <button wire:click='addFriend({{ $user->id }})'
                                class="px-2 py-1 rounded-xl bg-green-300 text-green-600 max-w-max shadow-sm hover:shadow-lg">Add</button>
                        </div>
                        <hr>
                    @endforeach
                </div>
        </div>
        {{ $users->links() }}
    </div>
