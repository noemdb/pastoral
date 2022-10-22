<div class="flex justify-between">
	
	<x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->is('dashboard')">
	    <x-icon-mattress-pillow class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Dashboard') }}</div> 
	</x-jet-nav-link>

	{{-- <x-jet-nav-link href="{{ route('users.index') }}" :active="Request::is('*setups*')" :disabled="true" class="!text-gray-400">
	    <x-icon-cogs class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Configuraciones') }}</div> 
	</x-jet-nav-link> --}}

	<x-jet-nav-link href="#" :active="request()->is('*institutions*')">
	    <x-icon-building class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Institución') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*competitors*')">
	    <x-icon-user-pen class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Catequizandos') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*professorate*')">
	    <x-icon-chalkboard-teacher class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Catequistas') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*postulants*')">
	    <x-icon-postulant class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Postulantes') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
	    <x-icon-cooperador class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Aspirante') }}</div> 
	</x-jet-nav-link> 

	<x-jet-nav-link href="#" :active="request()->is('*senders*')">
	    <x-icon-envelope class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Mailer') }}</div> 
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

{{-- setups,institutions,competitors,professorate,senders,surveys,robots, --}}