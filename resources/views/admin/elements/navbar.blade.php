@php $userPrefix = Auth::user()->prefix; @endphp

<x-slot name="header">
    <div class="flex justify-start">
        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.institutions.index') }}" :active="request()->routeIs('*institutions*')">
            <x-icon-building class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Instituciones') }} </div>
        </x-jet-nav-link>
        <x-jet-nav-link class="shadow py-2 mx-1 rounded dark:border-gray-400" href="{{ route($userPrefix.'.authorities.index') }}" :active="request()->routeIs('*authorities*')">
            <x-icon-stop class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Autoridades') }} </div>
        </x-jet-nav-link>
        <x-jet-nav-link class="shadow py-2 mx-1 rounded dark:border-gray-400" title="Perídos Educativo"  href="{{ route($userPrefix.'.pescolars.index') }}" :active="request()->routeIs('*pescolars*')">
            <x-icon-calendar class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Perídos') }} </div>
        </x-jet-nav-link>
        <x-jet-nav-link class="shadow py-2 mx-1 rounded dark:border-gray-400" title="Planes de Formativos" href="{{ route($userPrefix.'.curricula.index') }}" :active="request()->routeIs('*curricula*')">
            <x-icon-table class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Planes') }} </div>
        </x-jet-nav-link>
        <x-jet-nav-link class="shadow py-2 mx-1 rounded dark:border-gray-400" href="{{ route($userPrefix.'.lapses.index') }}" :active="request()->routeIs('*lapses*')">
            <x-icon-clock class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Programas') }} </div>
        </x-jet-nav-link>
        <x-jet-nav-link class="shadow py-2 mx-1 rounded dark:border-gray-400" href="{{ route($userPrefix.'.levels.index') }}" :active="request()->routeIs('*levels*')">
            <x-icon-chart-bar-v class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Niveles') }} </div>
        </x-jet-nav-link>
        <x-jet-nav-link class="shadow py-2 mx-1 rounded dark:border-gray-400" href="{{ route($userPrefix.'.sections.index') }}" :active="request()->routeIs('*sections*')">
            <x-icon-rectangle-list class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Grupos') }} </div>
        </x-jet-nav-link>
        <x-jet-nav-link class="shadow py-2 mx-1 rounded dark:border-gray-400" href="{{ route($userPrefix.'.courses.index') }}" :active="request()->routeIs('*courses*')">
            <x-icon-window-restore class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Asignaturas') }} </div>
        </x-jet-nav-link>
        <x-jet-nav-link class="shadow py-2 mx-1 rounded dark:border-gray-400" title="Pensums de Formación" href="{{ route($userPrefix.'.pensums.index') }}" :active="request()->routeIs('*pensums*')">
            <x-icon-archive class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Pensums') }} </div>
        </x-jet-nav-link>
        <x-jet-nav-link class="shadow py-2 mx-1 rounded dark:border-gray-400" title="Biblioteca Amigoniana" href="{{ route($userPrefix.'.libraries.index') }}" :active="request()->routeIs('*libraries*')">
            <x-icon-book class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Amigoteca') }} </div>
        </x-jet-nav-link>
    </div>
</x-slot>
