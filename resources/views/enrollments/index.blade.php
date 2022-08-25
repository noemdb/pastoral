<x-enrollment.app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Preinscripciones
        </h2>
    </x-slot>

    <x-slot name="logo">
        <x-app-logo />
    </x-slot>

 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div>
                            <x-jet-label for="name" value="{{ __('Nombres') }}" />
                            <x-jet-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required autofocus />
                        </div>

                        <div>
                            <x-jet-label for="lastname" value="{{ __('Apellidos') }}" />
                            <x-jet-input id="lastname" class="block mt-1 w-full" type="lastname" name="lastname" :value="old('lastname')" required autofocus />
                        </div>

                        <div>
                            <x-jet-label for="citype_id" value="{{ __('Tipo de Identificación') }}" />
                            <x-jet-input id="citype_id" class="block mt-1 w-full" type="citype_id" name="citype_id" :value="old('citype_id')" required autofocus />
                        </div>
                        
                        <div>
                            <x-jet-label for="ci" value="{{ __('N. de Identificación') }}" />
                            <x-jet-input id="ci" class="block mt-1 w-full" type="ci" name="ci" :value="old('ci')" required autofocus />
                        </div>

                        <div>
                            <x-jet-label for="levels" value="{{ __('Curso') }}" />
                            <x-jet-input id="levels" class="block mt-1 w-full" type="levels" name="levels" :value="old('levels')" required autofocus />
                        </div>


                        <div>
                            <x-jet-label for="gender" value="{{ __('Género') }}" />
                            <x-jet-input id="gender" class="block mt-1 w-full" type="gender" name="gender" :value="old('gender')" required autofocus />
                        </div>


                        <div>
                            <x-jet-label for="laterality" value="{{ __('Lateralidad') }}" />
                            <x-jet-input id="laterality" class="block mt-1 w-full" type="laterality" name="laterality" :value="old('laterality')" required autofocus />
                        </div>
                        
                        <div>
                            <x-jet-label for="date_birth" value="{{ __('Fecha de nacimiento') }}" />
                            <x-jet-input id="date_birth" class="block mt-1 w-full" type="date_birth" name="date_birth" :value="old('date_birth')" required autofocus />
                        </div>


                        <div class="flex items-center justify-end mt-4">
                            <x-jet-button class="ml-4">
                                {{ __('Registrar') }}
                            </x-jet-button>
                        </div>
                    </form>
            </div>
        </div>
    </div>




</x-enrollment.app-layout>

