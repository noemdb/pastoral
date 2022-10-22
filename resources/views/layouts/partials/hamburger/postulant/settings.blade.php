<div class="flex items-center px-4">
    @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
        <div class="shrink-0 mr-3">
            <img class="h-10 w-10 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
        </div>
    @endif

    <div>
        <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
        <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
    </div>
</div>

<div class="mt-3 space-y-1">
    <!-- Account Management -->
    <x-jet-responsive-nav-link href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')">
        {{ __('Perfil') }}
    </x-jet-responsive-nav-link>

    @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
        <x-jet-responsive-nav-link href="{{ route('api-tokens.index') }}" :active="request()->routeIs('api-tokens.index')">
            {{ __('API Tokens') }}
        </x-jet-responsive-nav-link>
    @endif

    <!-- Authentication -->
    <form method="POST" action="{{ route('logout') }}" x-data>
        @csrf

        <x-jet-responsive-nav-link href="{{ route('logout') }}"
            @click.prevent="$root.submit();">
            {{ __('Salir') }}
        </x-jet-responsive-nav-link>
    </form>
</div>
