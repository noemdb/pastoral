<div class="flex justify-between">
	<x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
	    <x-icon-mattress-pillow class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden md:flex">{{ __('Dashboard') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->routeIs('*institutions*')">
	    <x-icon-cogs class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden md:flex">{{ __('Configuraciones') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="{{ route('institutions.index') }}" :active="request()->routeIs('*institutions*')">
	    <x-icon-building class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden md:flex">{{ __('Instituciones') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="{{ route('estudiants.index') }}" :active="request()->routeIs('*estudiants*')">
	    <x-icon-user-pen class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden md:flex">{{ __('Estudiantes') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->routeIs('*institutions*')">
	    <x-icon-chalkboard-teacher class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden md:flex">{{ __('Profesores') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->routeIs('*institutions*')">
	    <x-icon-envelope class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden md:flex">{{ __('Mailer') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->routeIs('*institutions*')">
	    <x-icon-poll class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden md:flex">{{ __('Encuestas') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->routeIs('*institutions*')">
	    <x-icon-robot class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden md:flex">{{ __('Bots') }}</div> 
	</x-jet-nav-link>
</div>