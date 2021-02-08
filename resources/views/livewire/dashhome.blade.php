<div class="w-3/5 p-5 m-3 bg-white">
    @livewire('avatar')
    <h1 class="text-orange-300">{{Auth::user()->name}}</h1>
    <hr class="w-4/5 mb-10" style="border: solid 2px #fdba8c">
    <p class="my-5 text-bold">Friends: {{$nbFriends}}</p>
    <p class="my-5 text-bold">Pending friend request: {{$nbRequests}} </p>
    <p class="my-5 text-bold">Messages waiting: coming soon</p>
</div>
