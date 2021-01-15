<div>
    <div class="container mx-auto text-center">
        <div class="flex flex-col w-1/3 mx-auto text-left">
            <div class="chatbanner p-3">Chat Room</div>
            <ul class="list-none ulChat">
                @livewire('message')
            </ul>
            <input type="text" name="message" wire:model="message" wire:keydown.enter="sendMessage"
                class="mt-2 px-4 py-2 outline-blue focus:bg-green-200" placeholder="Type your message here ...">
            @error('message')
                <p class="text-red-600 my-2">{{ $message }}</p>
            @enderror
        </div>
    </div>
    <div id="alertSuccessMsg" role="alert" class="bg-green-200 text-green-500 p-5 m-3">
        Your message has been successfully sent
    </div>
    <script>
        // successfully sent message
        $(document).ready(function() {
            window.livewire.on('messageSent', function() {
                $("#alertSuccessMsg").show();
                setTimeout(function() {
                    $('#alertSuccessMsg').animate({
                        opacity: 0,
                        marginRight: '-200px'
                    }, 'slow', 'linear', function() {
                        $(this).remove();
                    });
                }, 1000);
            });
            window.livewire.on('scrollLi', function() {
                $('ul').animate({
                    scrollTop: $('ul').height() + $(window).height()
                });
            });
        });
    </script>
</div>
