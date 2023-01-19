<div class="container mx-auto">
    <div class="grid grid-cols-1 gap-4">
        <div class="mb-4">
            @php $name = 'representant_id'; $model = 'estudiant.'.$name; $key = Str::random(10); @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-select wire:key="{{$key}}" wire:model.lazy="{{$model}}" :options="$representant_list" id="{{$model}}" class=" w-full " />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="mb-4">
            @php $name = 'citype_id'; $model = 'estudiant.'.$name; $key = Str::random(10); @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-select wire:key="{{$key}}" wire:model.lazy="{{$model}}" :options="$citype_list" id="{{$model}}" class=" w-full " />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            @php $name = 'ci'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input type="number" wire:key="{{$key}}" wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        {{-- <div class="mb-4">
            @php $name = 'name'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div> --}}

        <div class="mb-4">
            @php $name = 'name'; $model = 'estudiant.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            @php $name = 'lastname'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="grid grid-cols-3 gap-4">
        <div class="mb-4">
            @php $name = 'country_id'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ __($list_comment[$name]) }}" />
            {{-- <div wire:loading wire:target="loadState" class=" text-gray-400 text-sm">Obteniendo datos...</div> --}}
            <x-select wire:key="{{$key}}" wire:model="{{$model}}" :options="$country_list" id="{{$model}}" class=" w-full " />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        @if ($country)
            <div class="mb-4">
                @php $name = 'state_id'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
                <x-jet-label for="{{$model}}" value="{{ __($list_comment[$name]) }}" />
                {{-- <div wire:loading wire:target="loadState" class=" text-gray-400 text-sm">Obteniendo datos...</div> --}}
                <x-select wire:key="{{$key}}" wire:model="{{$model}}" :options="$state_list" id="{{$model}}" class=" w-full " />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>

            @if ($state)
                <div class="mb-4">
                    @php $name = 'city_id'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
                    <x-jet-label for="{{$model}}" value="{{ __($list_comment[$name]) }}" />
                    {{-- <div wire:loading wire:target="loadState" class=" text-gray-400 text-sm">Obteniendo datos...</div> --}}
                    <x-select wire:key="{{$key}}" wire:model.lazy="{{$model}}" :options="$city_list" id="{{$model}}" class=" w-full " />
                    @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            @endif
        @endif

    </div>

    <div class="grid grid-cols-1 gap-4">
        <div class="mb-4">
            @php $name = 'dir_address'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
