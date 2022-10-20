<div class="flex justify-between">

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
		<x-icon-file-pen class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Planificaciones') }} </div>                        
	</x-jet-nav-link> 

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
		<x-icon-file-circle-check class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Evaluaciones') }} </div>                        
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
		<x-icon-grip class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Ejercicios') }} </div>                        
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
		<x-icon-file-signature class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Resoluciones') }} </div>                        
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
		<x-icon-comment-alt class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Publicaciones') }} </div>                        
	</x-jet-nav-link>            

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
		<x-icon-file class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Documentos') }} </div>                        
	</x-jet-nav-link>

	<x-jet-nav-link href="#" :active="request()->is('*candidate*')">
		<x-icon-chalkboard class="w-6 h-6 mr-0.5" />
		<div class="mr-0.5 hidden lg:flex">{{ __('Pizarra') }} </div>                        
	</x-jet-nav-link>

</div>
