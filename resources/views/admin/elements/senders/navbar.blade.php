    <x-slot name="header">

        <div class="flex justify-start">

            <x-jet-nav-link class=" shadow py-2 mx-1 rounded" href="{{ route('mailers.index') }}" :active="request()->is('*mailers*')">
                <x-icon-envelope class="w-6 h-6 mr-0.5" />
                <div class="mr-0.5 hidden lg:flex">{{ __('Mailer') }} </div>                        
            </x-jet-nav-link>

        </div>

    </x-slot> 