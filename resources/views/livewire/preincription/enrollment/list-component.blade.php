<div>


    @switch($step)
        @case(1)            
            @include('livewire.preincription.enrollment.steps.home')
            @break
        @case(2)
            @include('livewire.preincription.enrollment.steps.institution')
            @break
        @case(3)
            @include('livewire.preincription.enrollment.steps.estudiants')
            @break
        @case(4)
            @include('livewire.preincription.enrollment.steps.address')
            @break
        @case(5)
            @include('livewire.preincription.enrollment.steps.patologies')
            @break
        @case(6)
            @include('livewire.preincription.enrollment.steps.contact')
            @break
        @default
            <h1>Hello World n!</h1>
    @endswitch
    <div class="flex items-center justify-end mt-4">
        <x-jet-button class="ml-4" wire:click="home"> {{ __('Inicio') }} </x-jet-button>
        <x-jet-button class="ml-4" wire:click="back"> {{ __('Anterior') }} </x-jet-button>
        <x-jet-button class="ml-4" wire:click="next"> {{ __('Siguiente') }} </x-jet-button>
    </div>
</div>
