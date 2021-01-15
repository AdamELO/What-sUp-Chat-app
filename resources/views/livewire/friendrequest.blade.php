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
                                <button type="submit" class="bg-green-200 ml-2 px-2 py-1">Accept</button>
                            </form>
                            <form wire:submit.prevent='denyRequest({{$friend->id}})'>
                                <button type="submit" class="bg-red-200 ml-2 px-2 py-1">Deny</button>
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
        <div>
            @if(\Session::has('success'))
            <div class='text-green-400 bg-green-200 text-center'>
                {{\Session::get('success')}}
            </div>
            @endif
        </div>
    </div>
</div>
