<div>
    <div class="w-3/5 p-5 mt-5 mx-auto bg-white rounded-lg">
        <h1 class="text-orange-300">Edit your profile</h1>
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
                    @error('name') <span class="error mb-4 text-red-400">{{ $message }}</span> @enderror
                    <label for="email"
                        class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2">Email</label>
                    <input type="email" placeholder={{ Auth::user()->email }} wire:model='email'
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-red rounded py-3 px-4 mb-3">
                    @error('email') <span class="error mb-4 text-red-400">{{ $message }}</span> @enderror

                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="password">
                        Password
                    </label>
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                        type="password" placeholder="***" wire:model='password'>
                    @error('password') <span class="error mb-4 text-red-400">{{ $message }}</span> @enderror

                    <label class="block uppercase tracking-wide text-grey-darker text-xs font-bold mb-2" for="avatar">
                        Avatar
                    </label>
                    <input
                        class="appearance-none block w-full bg-grey-lighter text-grey-darker border border-grey-lighter rounded py-3 px-4 mb-3"
                        type="file" wire:model='avatar'>
                    <div class="text-center">
                        <button
                            class="bg-orange-300 text-white text-center font-bold py-2 px-8 rounded focus:outline-none hover:shadow-lg"
                            type="submit">Edit &nbsp; <i class="fas fa-user-edit"></i></button>
                    </div>
            </div>
            </form>
        </div>
    </div>
</div>
