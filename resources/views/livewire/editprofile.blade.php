<div class="log-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0">
    <div class="max-w-4xl flex container mx-auto mt-5">
        <div class="w-3/5 p-5 m-3 bg-white">
            @livewire('avatar')
            <h1 class="text-orange-300">{{ Auth::user()->name }}</h1>
            <hr class="w-4/5 mb-10" style="border: solid 2px #fdba8c">
            <div class="-mx-3 md:flex mb-6">
                <div class="md:w-full px-3 mb-6 md:mb-0">
                    <form wire:submit.prevent='profileEdit' enctype="multipart/form-data">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="name">
                            Name
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3"
                            type="text" placeholder={{ Auth::user()->name }} wire:model='name'>
                        <label for="email"
                            class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Email</label>
                        <input type="email" placeholder={{ Auth::user()->email }} wire:model='email'
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3">
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="password">
                            Password
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                            type="password" placeholder="***" wire:model='password'>
                        <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2"
                            for="avatar">
                            Avatar
                        </label>
                        <input
                            class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                            type="file" wire:model='avatar'>
                        <div class="text-center">
                            <button
                                class="bg-orange-300 text-white text-center font-bold py-2 px-8 rounded focus:outline-none hover:shadow-lg"
                                type="submit">Edit</button>
                        </div>
                </div>
                </form>
            </div>
        </div>
        @livewire('menu')
    </div>
</div>
