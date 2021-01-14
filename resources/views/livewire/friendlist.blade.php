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
                            <button class="bg-green-200 ml-2">Chat</button>
                            {{-- <button class="bg-red-200 ml-2">remove friend</button> --}}
                        </div>
                        <hr class="w-4/5 mb-10" style="border: solid 2px #fdba8c">
                    </div>
                @endforeach
            </div>
        </div>
        <div class="w-2/5 p-5 mx-auto text-center">
            <ul class="list-none ulChat text-orange-300">
                <div class="bg-orange-300 p-3 ulmenu text-black rounded-lg cursor-pointer">Menu <i
                        class="float-right fas fa-caret-down icone"></i></div>
                <li class="p-3 w-3/4 menuli mx-auto liChat rounded-lg bg-white"><a href="/">Edit Profile</a></li>
                <li class="p-3 w-3/4 menuli mx-auto liChat rounded-lg bg-white"><a href="/friendlist">My Friends</a></li>
                <li class="p-3 w-3/4 menuli mx-auto liChat rounded-lg bg-white"><a href="/addfriend">Add
                        friends</a></li>
                <li class="p-3 w-3/4 menuli mx-auto liChat rounded-lg bg-white"><a href="/friendrequest">Pending friend
                        request</a></li>
                <li class="p-3 w-3/4 menuli mx-auto liChat rounded-lg bg-white"><a href="/">Buy Premium</a></li>
            </ul>
        </div>
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