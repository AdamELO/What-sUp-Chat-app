<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://js.pusher.com/7.0/pusher.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" integrity="sha512-F5QTlBqZlvuBEs9LQPqc1iZv2UMxcVXezbHzomzS6Df4MZMClge/8+gXrKw2fl5ysdk4rWjR0vKS7NNkfymaBQ==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
    {{-- <script src="/js/app.js" defer data-turbolinks-track="reload"></script> --}}
    <link rel="stylesheet" href="./owl.carousel/dist/assets/owl.carousel.min.css" />
    <link rel="stylesheet" href="./owl.carousel/dist/assets/owl.theme.default.min.css" />
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
    <script src="./owl.carousel/dist/owl.carousel.min.js"></script>
    <link rel="stylesheet" href="./css/app.css">
    @livewireStyles
</head>

<body>

<nav class="bg-gray-900 sm:flex sm:justify-between sm:items-center sm:px-4 sm:py-3">
    <div class="flex items-center justify-between px-4 py-3 sm:p-0">
      <div class="flex">
        <img class="h-8" src="data:image/png;base64,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" alt="Workcation">
        <span class="font-2xl ml-3 mt-1 font-bold text-white">What's Up</span>
      </div>
        <button id="menuBtn" class="md:hidden text-white focus:outline-none">
            <div class="menu">menu</div>
            <div class="closeMenu hidden">X</div>
        </button>
    </div>
    <ul id="respMenu" class="px-2 pt-2 pb-4 sm:flex sm:p-0 hidden" >
        <li>
            <a href="/" class="block px-2 py-1 text-white font-semibold rounded hover:text-blue-200 cursor-pointer">Home</a>
        </li>
        @auth
        <li>
            <a href="/dashboard" class="block px-2 py-1 text-white font-semibold rounded hover:text-blue-200 cursor-pointer">Dashboard</a>
        </li>
        @livewire('logout')
        @endauth
        @guest
        <li>
            <a href="/login" class="block px-2 py-1 text-white font-semibold rounded hover:text-blue-200 cursor-pointer">Login</a>
        </li>
        <li>
            <a href="/register" class="block px-2 py-1 text-white font-semibold rounded hover:text-blue-200 cursor-pointer">Register</a>
        </li>
        @endguest
    </ul>
  </nav>


  {{ $slot }}
  
  <script src="/js/main.js"></script>
  @livewireScripts
    <script src="/js/app.js" data-turbolinks-track="reload"></script>
    <script src="https://cdn.jsdelivr.net/gh/livewire/turbolinks@v0.1.x/dist/livewire-turbolinks.js" data-turbolinks-eval="false"></script>
    
</body>

</html>
