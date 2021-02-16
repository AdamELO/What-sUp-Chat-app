<div>
    <div class="rounded-lg bg-white w-4/5 mx-auto mt-5">
        <br>
        <h1 class="my-1 text-center text-orange-300 underline">Friend Request</h1>
        <div class="w-3/5 mx-auto my-5">
            @if (count($user->friendOfRequested) != 0)
            @foreach ($user->friendOfRequested as $friend)
                <ul class="flex flex-col m-3">
                    <li class="flex flex-row">
                        <div
                            class="flex items-center mb-5 transition duration-500 ease-in-out justify-around transform hover:-translate-y-2 rounded-2xl border-2 p-3 w-full hover:shadow-2xl border-orange-300">
                            <img width="50px" height="50px" class="rounded-full" src="./img/{{ $user->avatar }}"
                                alt="avatar friend">
                            <h1 class="text-gray-600">{{ $friend->name}}</h1>
                            <form wire:submit.prevent='acceptRequest({{$friend->id}})'>
                                <button type="submit" class="px-2 py-1 rounded-xl bg-green-300 text-green-600 max-w-max shadow-sm hover:shadow-lg">Accept</button>
                            </form>
                            <form wire:submit.prevent='denyRequest({{$friend->id}})'>
                                <button type="submit" class="px-2 py-1 rounded-xl bg-red-300 text-red-600 max-w-max shadow-sm hover:shadow-lg">Deny</button>
                            </form>
                        </div>
                    </li>
                </ul>
            @endforeach
            @else
                <h2 class='text-red-400 mt-5'>No friend request yet</h2>
            @endif
        </div>
    </div>
</div>
