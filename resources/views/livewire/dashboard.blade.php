<div class="log-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0">
    <div class="max-w-4xl flex container mx-auto mt-5">
        <div class="w-3/5 p-5 m-3 bg-white">
            <div class="block rounded-full m-10 shadow-xl mx-auto -mt-24 h-48 w-48 bg-cover bg-center" style="background-image: url('../img/{{Auth::user()->avatar}}')"></div>
            <h1 class="text-orange-300">{{Auth::user()->name}}</h1>
            <hr class="w-4/5 mb-10" style="border: solid 2px #fdba8c">
            <p class="my-5 text-bold">Friends: 10</p>
            <p class="my-5 text-bold">Messages waiting: 10</p>
            <p class="my-5 text-bold">Pending friend request: 10</p>
        </div>
        <div class="w-2/5 p-5 mx-auto text-center">
            <ul class="list-none ulChat text-orange-300">
                <div class="bg-orange-300 p-3 ulmenu text-black rounded-lg cursor-pointer">Menu <i class="float-right fas fa-caret-down icone"></i></div>
                <li class="p-3 w-3/4 menuli mx-auto liChat rounded-lg bg-white"><a href="/dashboard">Edit Profile</a></li>
                <li class="p-3 w-3/4 menuli mx-auto liChat rounded-lg bg-white"><a href="/friendlist">My Friends</a></li>
                <li class="p-3 w-3/4 menuli mx-auto liChat rounded-lg bg-white"><a href="/addfriend">Add friends</a></li>
                <li class="p-3 w-3/4 menuli mx-auto liChat rounded-lg bg-white"><a href="/friendrequest">Pending friend request</a></li>
            </ul>
        </div>
    </div>
</div>

