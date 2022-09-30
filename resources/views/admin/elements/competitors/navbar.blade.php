    <x-slot name="header">

        <div class="flex justify-start">

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('representants.index') }}" :active="request()->is('*representants*')">
                <x-icon-user-tie class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Responsables') }} </div>                        
            </x-jet-nav-link>

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('enrollments.index') }}" :active="request()->is('*enrollments*')">
                <x-icon-clipboard-user class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Preinscripciones') }} </div>                        
            </x-jet-nav-link>

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('estudiants.index') }}" :active="request()->is('*estudiants*')">
                <x-icon-user-pen class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Participantes') }} </div>                        
            </x-jet-nav-link>
            
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('inscriptions.index') }}" :active="request()->is('*inscriptions*')">
                <x-icon-list class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Inscripciones') }} </div>                        
            </x-jet-nav-link>
            
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('constancies.index') }}" :active="request()->is('*constancies*')">
                <x-icon-file-invoice class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Constancias') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link title="Informe de Notas" class=" shadow py-2 mx-1 rounded" href="{{ route('grades.index') }}" :active="request()->is('*grades*')">
                <x-icon-list-ol class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Notas') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('withdrawals.index') }}" :active="request()->is('*withdrawals*')">
                <x-icon-random class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Retiros') }} </div>                        
            </x-jet-nav-link>
            <x-jet-nav-link title="Ajustes de Notas" class=" shadow py-2 mx-1 rounded" href="{{ route('gradefixs.index') }}" :active="request()->is('*gradefixs*')">
                <x-icon-th-large class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Ajustes') }} </div>                        
            </x-jet-nav-link>

        </div>

    </x-slot> 