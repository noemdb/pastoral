<div>   




            <form wire:submit.prevent="save">

                <div id="transition_institution"  x-data="{ open: false }" >

                    <div 
                        {{-- x-init="$nextTick( () => open = true )"
                        x-show="open"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0 scale-90"
                        x-transition:enter-end="opacity-100 scale-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100 scale-100"
                        x-transition:leave-end="opacity-0 scale-90" --}}
                    >

                        <div class="flex justify-between">
                            <h1 class="block font-semibold text-lg text-gray-700 dark:text-gray-100">Asistente para registrar tu preinscripción </h1>
                            <div wire:loading class="text-gray-400 text-sm"> Cargando... </div>
                        </div>

                    <div class="py-4 font-semibold">

                        <span class="{{ ( $errors->any() ) ? 'text-red-600' : null}}"> Paso {{$step ?? null}} </span>                        

                        <div class="w-full bg-gray-200 h-5 mb-4 rounded-md  dark:bg-gray-900 dark:border-gray-700">
                          <div class="h-5 text-white font-semibold text-center rounded-sm {{ ( $errors->any() ) ? ' bg-red-600 ' : ' bg-blue-900 ' }}" style="width: {{ $porcentage ?? null }}%"> {{ $porcentage ?? null }}% </div>
                        </div>
                    </div>
                    @if ($errors->any() && $saveInto)

                        <script type="text/javascript">
                            const Toast = Swal.mixin({
                              toast: true,
                              position: 'top-end',
                              showConfirmButton: false,
                              timer: 3000,
                              timerProgressBar: true,
                              didOpen: (toast) => {
                                toast.addEventListener('mouseenter', Swal.stopTimer)
                                toast.addEventListener('mouseleave', Swal.resumeTimer)
                              }
                            })

                            Toast.fire({
                              icon: 'error',
                              title: 'Upsss! Algunas cosas estan mal.'
                            })
                        </script>

                    @endif

                    @switch($step)
                        @case(1)            
                            @include('livewire.preincription.enrollment.steps.home')
                            @break
                        @case(2)
                            @include('livewire.preincription.enrollment.steps.institution')
                            @break
                        @case(3)
                            @include('livewire.preincription.enrollment.steps.representants')
                            @break
                        @case(4)
                            @include('livewire.preincription.enrollment.steps.contact')
                            @break
                        @case(5)
                            @include('livewire.preincription.enrollment.steps.estudiants')
                            @break
                        @case(6)
                            @include('livewire.preincription.enrollment.steps.address')
                            @break
                        @case(7)
                            @include('livewire.preincription.enrollment.steps.patologies')
                            @break
                        
                        @default
                            <h1>...</h1>
                    @endswitch

                    </div>

                </div>

                <div class="flex items-left justify-left mb-3 mt-4">
                    <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                        <x-jet-button type="button" class="mr-auto ml-1 bg-blue-500 " wire:click="home" > {{ __('Inicio') }} </x-jet-button>
                        @if (!$status_first)
                            <x-jet-button type="button" class="ml-1" wire:click="back" :disabled="$status_first"> {{ __('Anterior') }} </x-jet-button>
                        @endif
                        @if (!$status_last)
                            <x-jet-button type="button" class="ml-1" wire:click="next" :disabled="$status_last"> {{ __('Siguiente') }} </x-jet-button>
                        @endif
                        @if ($status_last)
                                <x-jet-button type="button" class="ml-1 bg-green-500 " wire:click="save" :disabled="$errors->any()" > {{ __('Registrar') }} </x-jet-button>
                        @endif
                    </div>
                </div>

            </form> 

            <x-jet-validation-errors class="mb-4" />  

</div>
