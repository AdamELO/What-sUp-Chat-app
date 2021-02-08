<div>
    @if (Storage::disk('public')->has(Auth::user()->avatar))
        <div class="block rounded-full m-10 shadow-xl mx-auto -mt-24 h-48 w-48 bg-cover bg-center"
            style="background-image: url({{ asset('storage/' . Auth::user()->avatar) }})"></div>
    @else
        <div class="block rounded-full m-10 shadow-xl mx-auto -mt-24 h-48 w-48 bg-cover bg-center"
            style="background-image: url('../img/{{ Auth::user()->avatar }}')"></div>
    @endif
</div>
