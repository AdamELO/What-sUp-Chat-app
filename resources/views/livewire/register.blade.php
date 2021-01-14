<div class="log-bg min-h-screen pt-12 md:pt-20 pb-6 px-2 md:px-0">
    <header class="max-w-lg mx-auto">
        <a href="/">
            <h1 class="text-4xl font-bold text-white text-center">What's up</h1>
        </a>
    </header>

    <main class="bg-white max-w-lg mx-auto p-8 md:p-12 my-10 rounded-lg shadow-2xl">
        <section>
            <h3 class="font-bold text-2xl text-orange-300 text-center">Register a new account</h3>
        </section>
        <section class="mt-10">
            <form class="flex flex-col" wire:submit.prevent='submitRegister'>
                <div class="mb-6 pt-3">
                    <label class="text-sm font-bold my-2 text-orange-300" for="name">Name</label>
                    <input type="text" id="name" wire:model="form.name" name="name" class="rounded w-full px-3 py-3"
                        placeholder="choose a name">
                    @error('form.name')
                        <p class='text-orange-300'>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3">
                    <label class="text-sm font-bold my-2 text-orange-300" for="email">Email</label>
                    <input type="text" id="email" wire:model="form.email" name="email" class="rounded w-full px-3 py-3"
                        placeholder="choose an e-mail">
                    @error('form.email')
                        <p class='text-orange-300'>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <div class="mb-6 pt-3">
                    <label class="text-sm font-bold my-2 text-orange-300" for="password">Password</label>
                    <input type="password" id="password" wire:model="form.password" name='password'
                        class="rounded w-full px-3 py-3" placeholder="choose a password">
                </div>
                <div class="mb-6 pt-3">
                    <label class="text-sm font-bold my-2 text-orange-300" for="password_confirmation">Password
                        confirmation</label>
                    <input type="password" id="password_confirmation" wire:model="form.password_confirmation"
                        name='password_confirmation' class="rounded w-full px-3 py-3"
                        placeholder="confirmation of your password">
                    @error('form.password')
                        <p class='text-orange-300'>
                            {{ $message }}
                        </p>
                    @enderror
                </div>
                <button class="bg-orange-300 text-white font-bold py-2 rounded focus:outline-none hover:shadow-lg"
                    type="submit">Login</button>
            </form>
        </section>
    </main>

    <div class="max-w-lg mx-auto text-center mt-12 mb-6">
        <p class="text-white">Already registered ? <a href="/login" class="font-bold hover:underline">Login here
                !!!</a>.</p>
    </div>
</div>
