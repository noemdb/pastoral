<div>

    <h1 class="block font-semibold text-lg text-gray-700">Asistente para registrar tu preinscripción</h1>

    <form wire:submit.prevent="save">

        <div class="py-4 font-semibold">
            Paso {{$step ?? null}}
            {{-- <span>{{ round(100 * $step / $limit_step, 2) }} %</span> --}}
            {{-- <x-jet-button type="button" class="inline">{{ round(100 * $step / $limit_step, 2) }} %</x-jet-button> --}}
            {{-- <p class="text-right bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">{{ $porcentage ?? null }} %</p> --}}

            <div class="w-full bg-gray-200 h-5 mb-4">
              <div class="bg-blue-600 h-5 text-white font-semibold text-center " style="width: {{ $porcentage ?? null }}%"> {{ $porcentage ?? null }}% </div>
            </div>
        </div>

        <x-jet-validation-errors class="mb-4" />        

        <div> @if (session()->has('message')) <div class=" text-center bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert"> {{ session('message') }} </div> @endif  </div>


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
                @include('livewire.preincription.enrollment.steps.estudiants')
                @break
            @case(5)
                @include('livewire.preincription.enrollment.steps.address')
                @break
            @case(6)
                @include('livewire.preincription.enrollment.steps.patologies')
                @break
            @case(7)
                @include('livewire.preincription.enrollment.steps.contact')
                @break
            @default
                <h1>Hello World n!</h1>
        @endswitch

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
                    <x-jet-button type="button" class="ml-1 bg-green-500 " wire:click="save" :disabled="!$status_last"> {{ __('Registrar') }} </x-jet-button>
                @endif
            </div>
            {{-- <button>Save</button> --}}
        </div>

{{-- <div class="flex items-center justify-center mb-3">
  <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
    <button type="button" class="rounded-l inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase hover:bg-green-600 focus:bg-green-600 focus:outline-none focus:ring-0 active:bg-green-700 transition duration-150 ease-in-out">Left</button>
    <button type="button" class="inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase hover:bg-green-600 focus:bg-green-600 focus:outline-none focus:ring-0 active:bg-green-700 transition duration-150 ease-in-out">Middle</button>
    <button type="button" class="rounded-r inline-block px-6 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase hover:bg-green-600 focus:bg-green-600 focus:outline-none focus:ring-0 active:bg-green-700 transition duration-150 ease-in-out">Right</button>
  </div>
</div> --}}


    </form>
</div>
