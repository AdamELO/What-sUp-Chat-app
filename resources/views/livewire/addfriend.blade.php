<div class="log-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0">
    <div class="max-w-4xl flex container mx-auto mt-5">
        <div class="w-3/5 p-5 m-3 bg-white">
            <div class="w-3/5 p-5 m-3 bg-white">
                <h1 class="text-orange-300">{{ Auth::user()->name }}</h1>
                <hr class="w-4/5 mb-10" style="border: solid 2px #fdba8c">
                <input type="search" wire:model='searchPeople' class=" mb-8 border-2 border-orange-300 focus:border-orange-300 shadow rounded p-3" placeholder="Search by name...">
                <h2 class="subheader">send a friend request</h2>
                @foreach ($users as $user)
                    <div class="my-4">
                        <div class="items-center flex">
                            <img width="100px" height="100px" class="rounded-full" src="./img/{{$user->avatar}}" alt="avatar friend">
                            <h1 class="mr-2">{{ $user->name }}</h1>
                            <button wire:click='addFriend({{ $user->id }})' class="px-2 py-1 rounded-xl bg-green-300 text-green-600 max-w-max shadow-sm hover:shadow-lg">Add</button>
                        </div>
                        <hr class="w-4/5 mb-10" style="border: solid 2px #fdba8c">
                    </div>
                @endforeach
            </div>
            {{$users->links()}}
        </div>
        @livewire('menu')
    </div>
</div>
