<div class="flex justify-between">
	<x-jet-nav-link href="{{ route('dashboard') }}" :active="request()->routeIs('dashboard')">
	    <x-icon-mattress-pillow class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden md:flex">{{ __('Dashboard') }}</div> 
	</x-jet-nav-link>

	<x-jet-nav-link href="{{ route('institutions.index') }}" :active="request()->routeIs('*institutions*')">
	    <x-icon-building class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden md:flex">{{ __('Instituciones') }}</div> 
	</x-jet-nav-link>
</div>