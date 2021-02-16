<div class="w-4/5 p-5 bg-white mx-auto mt-5 rounded-lg">
    <h1 class="text-center text-orange-300 underline mb-4">Infos</h1>
    <div class="grid grid-cols-3 gap-8">
        <div class="border border-orange-300 rounded-lg p-2">
            <img src="./img/addfriend.png" class="h-32" alt="add_friend_undraw">
            <p class="my-5 text-bold text-center">Number of friends: <span class="px-2 py-1 mr-2 mt-1 text-xs text-black bg-gray-300 rounded-full">{{$nbFriends}}</span></p>
        </div>
        <div class="border border-orange-300 rounded-lg p-2">
            <img src="./img/acceptRequest.png" class="h-32" alt="request_undraw">
            <p class="my-5 text-bold text-center">Pending requests: <span class="px-2 py-1 mr-2 mt-1 text-xs text-black bg-gray-300 rounded-full">{{$nbRequests}}</span> </p>
        </div>
        <div class="border border-orange-300 rounded-lg p-2">
            <img src="./img/status.png" class="h-32" alt="status_undraw">
            <p class="my-5 text-bold text-center">Status: 
                <span class="p-2 rounded-full {{Auth::user()->status == 1 ? 'bg-green-200 text-green-500' : 'bg-red-200 text-red-500'}}">
                    {{Auth::user()->status == 1 ? 'Connected' : 'Absent'}}
                </span>
            </p>
        </div>
      </div>
</div>
