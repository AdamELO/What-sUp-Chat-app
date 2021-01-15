<div class="log-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0">
    <div class="max-w-4xl flex container mx-auto mt-5">
        <div class="w-3/5 p-5 m-3 bg-white">
            <div class="w-3/5 p-5 m-3 bg-white">
                <h1 class="text-orange-300">{{ Auth::user()->name }}</h1>
                <hr class="w-4/5 mb-10" style="border: solid 2px #fdba8c">
                <h2 class="subheader">My friends</h2>
                @foreach ($users as $user)
                    <div class="my-4">
                        <div class="items-center flex">
                            <img width="100px" height="100px" class="rounded-full" src="./img/{{$user->avatar}}" alt="avatar friend">
                            <h1 class="mr-2">{{ $user->name }}</h1>
                            <button class="bg-green-200 ml-2"> <a href="/chat">Chat</a> </button>
                            {{-- <button class="bg-red-200 ml-2">remove friend</button> --}}
                        </div>
                        <hr class="w-4/5 mb-10" style="border: solid 2px #fdba8c">
                    </div>
                @endforeach
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
    <script>
        $('.ulmenu ').on('click', function() {
            $('.menuli').toggle();
            $('.icone').toggleClass('fa-caret-down fa-caret-up');
        });

    </script>
</div>