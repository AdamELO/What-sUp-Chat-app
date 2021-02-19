<nav class="bg-gray-900 sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3">
    <div class="flex items-center justify-between px-4 py-3 sm:p-0">
        <div class="flex">
            <img class="h-8"
                src="./img/logo.png"
                alt="logo_what's_up">
            <span class="font-2xl ml-3 mt-1 font-bold text-white">What's Up</span>
        </div>
        <button id="menuBtn" class="md:hidden text-white focus:outline-none">
            <div class="menu">menu</div>
            <div class="closeMenu hidden">X</div>
        </button>
    </div>
    <ul id="respMenu" class="px-2 pt-2 pb-4 sm:flex sm:p-0 hidden">
        <li>
            <a href="/"
                class="block px-2 py-1 text-white font-semibold rounded hover:text-blue-200 cursor-pointer"><i class="fas fa-home"></i></a>
        </li>
        @auth
            <li>
                <a href="/dashboard"
                    class="block px-2 py-1 text-white font-semibold rounded hover:text-blue-200 cursor-pointer"><i class="fas fa-chalkboard-teacher"></i></a>
            </li>
            @livewire('logout')
        @endauth
        @guest
            <li>
                <a href="/login"
                    class="block px-2 py-1 text-white font-semibold rounded hover:text-blue-200 cursor-pointer"><i class="fas fa-sign-in-alt"></i></a>
            </li>
            <li>
                <a href="/register"
                    class="block px-2 py-1 text-white font-semibold rounded hover:text-blue-200 cursor-pointer"><i class="fas fa-address-card"></i></a>
            </li>
        @endguest
    </ul>
</nav>
