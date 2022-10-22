<div class="flex justify-between">
	
	<x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->is('dashboard')">
	    <x-icon-mattress-pillow class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Dashboard') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
	    <x-icon-window-restore class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Asignaturas') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
		<x-icon-archive class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Temas') }} </div>                        
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
		<x-icon-clipboard-list class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Lecciones') }} </div>                        
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
	    <x-icon-file-circle-check class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Evaluaciones') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')" title="Biblioteca Amigoniana" >
	    <x-icon-book class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Amigoteca') }}</div> 
	</x-jet-nav-link> 

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
	    <x-icon-list-ol class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Notas') }}</div> 
	</x-jet-nav-link> 

	<x-jet-nav-link href="#" :active="request()->is('*senders*')">
	    <x-icon-envelope class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Mensajes') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*surveys*')">
	    <x-icon-poll class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Encuestas') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*robots*')">
	    <x-icon-robot class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Bots') }}</div> 
	</x-jet-nav-link>

</div>
