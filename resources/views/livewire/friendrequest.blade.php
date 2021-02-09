<div>
    <div class="log-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0">
        <div class="max-w-4xl flex container mx-auto mt-5">
            <div class="w-3/5 p-5 m-3 bg-white">
                <div class="w-3/5 p-5 m-3 bg-white">
                    <h1 class="text-orange-300">{{ Auth::user()->name }}</h1>
                    <hr class="w-4/5 mb-10" style="border: solid 2px #fdba8c">
                    <h2 class="subheader">Friends requests :</h2>
                    @if (count($user->friendOfRequested) != 0)
                    @foreach ($user->friendOfRequested as $friend)
                        <div class="flex my-4">
                            <h1 class="mr-2 mt-1">{{ $friend->name}}</h1>
                            <form wire:submit.prevent='acceptRequest({{$friend->id}})'>
                                <button type="submit" class="px-2 py-1 rounded-xl bg-green-300 text-green-600 max-w-max shadow-sm hover:shadow-lg">Accept</button>
                            </form>
                            <form wire:submit.prevent='denyRequest({{$friend->id}})'>
                                <button type="submit" class="px-2 py-1 rounded-xl bg-red-300 text-red-600 max-w-max shadow-sm hover:shadow-lg">Deny</button>
                            </form>
                        </div>
                    @endforeach
                    @else
                        <h2 class='text-red-400 mt-5'>No friend request yet</h2>
                    @endif
                </div>
            </div>
            @livewire('menu')
        </div>
    </div>
</div>
