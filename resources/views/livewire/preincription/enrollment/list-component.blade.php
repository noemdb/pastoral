<div>

    <form wire:submit.prevent="save">

        <div class="py-4 font-semibold">
            Paso {{$step ?? null}}
            {{-- <span>{{ round(100 * $step / $limit_step, 2) }} %</span> --}}
            {{-- <x-jet-button type="button" class="inline">{{ round(100 * $step / $limit_step, 2) }} %</x-jet-button> --}}
            <p class="text-right bg-gray-100 text-gray-800 text-sm font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-300">{{ round(100 * $step / $limit_step) }} %</p>
        </div>

        <x-jet-validation-errors class="mb-4" />

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

        <div class="flex items-center justify-end mt-4">
            <x-jet-button type="button" class="ml-2" wire:click="home" > {{ __('Inicio') }} </x-jet-button>
            <x-jet-button type="button" class="ml-2" wire:click="back" :disabled="$status_first"> {{ __('Anterior') }} </x-jet-button>
            <x-jet-button type="button" class="ml-2" wire:click="next" :disabled="$status_last"> {{ __('Siguiente') }} </x-jet-button>
            <x-jet-button type="button" class="ml-2" wire:click="save" :disabled="!$status_last"> {{ __('Registrar') }} </x-jet-button>
            {{-- <button>Save</button> --}}
        </div>


    </form>
</div>
