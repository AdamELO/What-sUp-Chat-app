<div>
    <div class="bg-orange-300 shadow-lg w-3/4 mx-auto my-2 flex justify-center items-center flex-col rounded-lg">
        @if (Storage::disk('public')->has(Auth::user()->avatar))
            <img class="rounded-full w-12 h-12 mt-2" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="">
        @else
            <img class="rounded-full w-12 h-12 mt-2" src='./img/{{ Auth::user()->avatar }}' alt=""/>  
        @endif
        <div class="text-black">{{ Auth::user()->name }}</div>
        <div class="text-xs text-gray-500">
            <div class="rounded-l-2xl rounded-r-sm mb-1 p-1 px-4 cursor-pointer bg-gray-700 text-white">
                <a href="/editprofile">
                    <i class="fas fa-cog"></i>
                    &nbsp;Edit Profile
                </a>
            </div>
        </div>
    </div>
    <div class="p-5 mx-auto text-center rounded-lg">
        <ul class="list-none ulChat text-orange-300">
            <li class="p-3 menuli mx-auto liChat rounded-lg bg-white"><a href="/addfriend"><i class="fas fa-user-plus color-orange-300"></i> &nbsp;Add friends</a></li>
            <li class="p-3 menuli mx-auto liChat rounded-lg bg-white"><a href="/friendrequest"><i class="fas fa-id-badge color-orange-300"></i>&nbsp;Pending friend request</a></li>
        </ul>
    </div>
</div>
