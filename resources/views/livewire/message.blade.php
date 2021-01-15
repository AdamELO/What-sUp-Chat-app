<div>
    <div>
        @foreach ($messages as $message)
            @if ($message['user'] == Auth::user()->name)
                <div class="my-10 w-3/4 float-right">
                    <li class="textList liChat rounded-lg text-black colorMessage">{{ $message['message'] }}</li>
                    <span class="inline-block float-right bg-blue-500 text-white text-xs px-2">{{ $message['user'] }}</span>
                </div>
            @else
                <div class="my-10 w-3/4 float-left">
                    <li class="textList rounded-lg">{{ $message }}</li>
                    <span class="inline-block float-left bg-blue-500 text-white text-xs px-2">{{ Auth::user()->name }}</span>
                </div>
            @endif
        @endforeach
    </div>

    {{-- <script>
        Pusher.logToConsole = true;
        var pusher = new Pusher('866c64a6b25872800352', {
            cluster: 'eu',
            forceTLS: true
        });
        var channel = pusher.subscribe('chat');
        channel.bind('chatevent', function(data) {
            // window.livewire.emit('getMessage', data);
            // window.livewire.emit('scrollLi');
            //alert('hey')
        });
    </script> --}}
</div>
