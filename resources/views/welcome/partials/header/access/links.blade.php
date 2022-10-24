@auth
    <a href="{{ route('dashboard') }}" class="border-2 rounded p-2">Dashboard</a>
@else
    <a class="border-2 rounded p-2 text-white" data-scroll-nav="0" href="{{ route('login') }}" rel="nofollow">Acceder</a>
    {{-- @if (Route::has('register')) <a href="{{ route('register') }}" class="border-2 rounded p-2">Registrar</a>@endif --}}
@endauth