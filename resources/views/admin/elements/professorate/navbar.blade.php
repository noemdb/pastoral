@php $userPrefix = Auth::user()->prefix; @endphp
<x-slot name="header">

    <div class="flex justify-start">

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.teachers.index') }}" :active="request()->is('*teachers*')">
            <x-icon-chalkboard-teacher class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Catequistas') }} </div>                        
        </x-jet-nav-link>

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.pevaluations.index') }}" :active="request()->is('*pevaluations*')">
            <x-icon-file-pen class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Planificaciones') }} </div>                        
        </x-jet-nav-link> 

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.evaluations.index') }}" :active="(request()->is('*evaluations*') && !request()->is('*pevaluations*')) ? true : false ">
            <x-icon-file-circle-check class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Evaluaciones') }} </div>                        
        </x-jet-nav-link>

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.topics.index') }}" :active="request()->is('*topics*')">
            <x-icon-archive class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Temas') }} </div>                        
        </x-jet-nav-link>

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.lessons.index') }}" :active="request()->is('*lessons*')">
            <x-icon-clipboard-list class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Lecciones') }} </div>                        
        </x-jet-nav-link>

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.excercises.index') }}" :active="request()->is('*excercises*')">
            <x-icon-grip class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Ejercicios') }} </div>                        
        </x-jet-nav-link>

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.resolutions.index') }}" :active="request()->is('*resolutions*')">
            <x-icon-file-signature class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Resoluciones') }} </div>                        
        </x-jet-nav-link>

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.publications.index') }}" :active="request()->is('*publications*')">
            <x-icon-comment-alt class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Publicaciones') }} </div>                        
        </x-jet-nav-link>            

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.documents.index') }}" :active="request()->is('*documents*')">
            <x-icon-file class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Documentos') }} </div>                        
        </x-jet-nav-link>

        <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route($userPrefix.'.tableclass.index') }}" :active="request()->is('*tableclass*')">
            <x-icon-chalkboard class="w-6 h-6 mr-0.5" />
            <div class="mr-0.5 hidden lg:flex">{{ __('Pizarra') }} </div>                        
        </x-jet-nav-link>

    </div>

    </x-slot> 