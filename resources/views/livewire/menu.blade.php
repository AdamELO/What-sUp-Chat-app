<div>
    <div
        class="bg-orange-300 shadow-lg w-3/4 mx-auto my-2 flex justify-center items-center flex-col rounded-lg relative">
        <label class="switch" data-role="toggle-spoil">
            <input type="checkbox" {{ Auth::user()->status == 0 ? 'checked' : '' }}>
            <div class="rounded"></div>
        </label>
        @if (Storage::disk('public')->has(Auth::user()->avatar))
            <img class="rounded-full w-12 h-12 mt-2" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="">
        @else
            <img class="rounded-full w-12 h-12 mt-2" src='./img/{{ Auth::user()->avatar }}' alt="" />
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
    <div class="mt-5 mx-auto text-center rounded-lg">
        <ul class="text-orange-300">
            <li class="mx-auto p-2 my-2 w-3/5 border border-orange-300 rounded-lg bg-white"><a href="/addfriend"><i
                        class="fas fa-user-plus color-orange-300"></i> &nbsp;Add friends</a></li>
            <li class="mx-auto p-2 my-2 w-3/5 border border-orange-300 rounded-lg bg-white"><a href="/friendrequest"><i
                        class="fas fa-id-badge color-orange-300"></i>&nbsp;Pending friend request</a></li>
        </ul>
    </div>
    <div class="owl-carousel owl-theme mx-auto mt-12">
        <div class="item"><img src="./img/addfriend.png" alt="add_friend_undraw"></div>
        <div class="item"><img src="./img/editprofile.png" alt="edit_undraw"></div>
        <div class="item"><img src="./img/acceptRequest.png" alt="accept_friend_undraw"></div>
    </div>
</div>
