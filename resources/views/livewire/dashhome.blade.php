<div class="w-3/5 p-5 m-3 bg-white">
    <div class="block rounded-full m-10 shadow-xl mx-auto -mt-24 h-48 w-48 bg-cover bg-center" style="background-image: url('../img/{{Auth::user()->avatar}}')"></div>
    <h1 class="text-orange-300">{{Auth::user()->name}}</h1>
    <hr class="w-4/5 mb-10" style="border: solid 2px #fdba8c">
    <p class="my-5 text-bold">Friends: 10</p>
    <p class="my-5 text-bold">Messages waiting: 10</p>
    <p class="my-5 text-bold">Pending friend request: 10</p>
</div>
