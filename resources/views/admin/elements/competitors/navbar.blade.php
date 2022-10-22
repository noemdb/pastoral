@php $userPrefix = Auth::user()->prefix; @endphp
<x-slot name="header">

    <div class="flex justify-start">

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.representants.index') }}" :active="request()->is('*representants*')">
            <x-icon-user-tie class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Responsables') }} </div>                        
        </x-jet-nav-link>

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.enrollments.index') }}" :active="request()->is('*enrollments*')">
            <x-icon-clipboard-user class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Preinscripciones') }} </div>                        
        </x-jet-nav-link>

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.estudiants.index') }}" :active="request()->is('*estudiants*')">
            <x-icon-user-pen class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Catequizando') }} </div>                        
        </x-jet-nav-link>
        
        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.inscriptions.index') }}" :active="request()->is('*inscriptions*')">
            <x-icon-list class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Inscripciones') }} </div>                        
        </x-jet-nav-link>
        
        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.constancies.index') }}" :active="request()->is('*constancies*')">
            <x-icon-file-invoice class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Constancias') }} </div>                        
        </x-jet-nav-link>
        <x-jet-nav-link title="Informe de Notas" class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.grades.index') }}" :active="request()->is('*grades*')">
            <x-icon-list-ol class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Notas') }} </div>                        
        </x-jet-nav-link>
        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.withdrawals.index') }}" :active="request()->is('*withdrawals*')">
            <x-icon-random class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Retiros') }} </div>                        
        </x-jet-nav-link>
        <x-jet-nav-link title="Ajustes de Notas" class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.gradefixs.index') }}" :active="request()->is('*gradefixs*')">
            <x-icon-th-large class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Ajustes') }} </div>                        
        </x-jet-nav-link>

    </div>

    </x-slot> 