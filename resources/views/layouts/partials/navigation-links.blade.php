<div class="flex justify-between">
	
	<x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->is('dashboard')">
	    <x-icon-mattress-pillow class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Dashboard') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="{{ route('users.index') }}" :active="Request::is('*setups*')" :disabled="true" class="!text-gray-400">
	    <x-icon-cogs class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Configuraciones') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="{{ route('institutions.index') }}" :active="request()->is('*institutions*')">
	    <x-icon-building class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Instituciones') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="{{ route('estudiants.index') }}" :active="request()->is('*competitors*')">
	    <x-icon-user-pen class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Participantes') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="{{ route('teachers.index') }}" :active="request()->is('*professorate*')">
	    <x-icon-chalkboard-teacher class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Profesores') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="{{ route('mailers.index') }}" :active="request()->is('*senders*')">
	    <x-icon-envelope class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Mailer') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="{{ route('pollmains.index') }}" :active="request()->is('*surveys*')">
	    <x-icon-poll class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Encuestas') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="{{ route('bmains.index') }}" :active="request()->is('*robots*')">
	    <x-icon-robot class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Bots') }}</div> 
	</x-jet-nav-link>
</div>

{{-- setups,institutions,competitors,professorate,senders,surveys,robots, --}}