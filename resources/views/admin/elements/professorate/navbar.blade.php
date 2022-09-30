    <x-slot name="header">

        <div class="flex justify-start">

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('teachers.index') }}" :active="request()->is('*teachers*')">
                <x-icon-chalkboard-teacher class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Catequistas') }} </div>                        
            </x-jet-nav-link>

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('pevaluations.index') }}" :active="request()->is('*pevaluations*')">
                <x-icon-file-pen class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Planificaciones') }} </div>                        
            </x-jet-nav-link> 

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('evaluations.index') }}" :active="request()->is('*evaluations*')">
                <x-icon-file-circle-check class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Evaluaciones') }} </div>                        
            </x-jet-nav-link>

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('publications.index') }}" :active="request()->is('*publications*')">
                <x-icon-comment-alt class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Publicaciones') }} </div>                        
            </x-jet-nav-link>            

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('documents.index') }}" :active="request()->is('*documents*')">
                <x-icon-file class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Documentos') }} </div>                        
            </x-jet-nav-link>

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('tableclass.index') }}" :active="request()->is('*tableclass*')">
                <x-icon-chalkboard class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden md:flex">{{ __('Pizarra') }} </div>                        
            </x-jet-nav-link>

        </div>

    </x-slot> 