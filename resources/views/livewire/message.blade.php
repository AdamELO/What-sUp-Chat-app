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
                    <li class="textList rounded-lg liChat rounded-lg text-black colorMessageReceiver">{{ $message['message'] }}</li>
                    <span class="inline-block float-left bg-blue-500 text-white text-xs px-2">{{ $message['user'] }}</span>
                </div>
            @endif
        @endforeach
    </div>

    <script>

        // Enable pusher logging - don't include this in production
        Pusher.logToConsole = true;
    
        var pusher = new Pusher('c8936e2e6bec00cb3709', {
          cluster: 'eu',
          forceTLS: true
        });
    
        var channel = pusher.subscribe('chat');
        channel.bind('chatevent', function(data) {
            window.livewire.emit('getMessage', data);
            window.livewire.emit('scrollLi');
        });
      </script>
</div>
