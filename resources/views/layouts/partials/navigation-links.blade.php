<x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
    {{ __('Dashboard') }}
</x-jet-nav-link>

<x-jet-nav-link href="{{ route('institutions.index') }}" :active="request()->routeIs('*institutions*')">
    Instituciones
</x-jet-nav-link>