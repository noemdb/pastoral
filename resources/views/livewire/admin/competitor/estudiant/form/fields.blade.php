{{-- 'user_id','representant_id','citype_id','ci','name','lastname','gender','date_birth','country_id','state_id','city_id','dir_address','phone','email','status_nacionality', --}}

<div class="grid grid-cols-1 gap-4">    
    <div class="mb-4">
        @php $name = 'representant_id'; $model = 'estudiant.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$representant_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>

<div class="grid grid-cols-2 gap-4">
    
    <div class="mb-4">
        @php $name = 'citype_id'; $model = 'estudiant.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$citype_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        @php $name = 'ci'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input type="number" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        @php $name = 'name'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        @php $name = 'lastname'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        @php $name = 'gender'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select  wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$genders_list" class="block mt-1 w-full" rows="2" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    
    <div class="mb-4">
        @php $name = 'date_birth'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input type="date" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        @php $name = 'country_id'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ __($list_comment[$name]) }}" />
        <div wire:loading wire:target="loadState" class=" text-gray-400 text-sm">Obteniendo datos...</div>
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$country_list" wire:change="loadState($event.target.value)" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    @if ($country)
        <div class="mb-4">
            @php $name = 'state_id'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ __($list_comment[$name]) }}" />
            <div wire:loading wire:target="loadState" class=" text-gray-400 text-sm">Obteniendo datos...</div>
            <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$country_list" wire:change="loadCity($event.target.value)" id="{{$model}}" class=" w-full " />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        @if ($state)
            <div class="mb-4">
                @php $name = 'city_id'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
                <x-jet-label for="{{$model}}" value="{{ __($list_comment[$name]) }}" />
                <div wire:loading wire:target="loadState" class=" text-gray-400 text-sm">Obteniendo datos...</div>
                <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$city_list" id="{{$model}}" class=" w-full " />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>            
        @endif
    @endif
    <div class="mb-4">
        @php $name = 'dir_address'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'email'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input type="email" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'phone'; $model = 'estudiant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="grid grid-cols-1 gap-4">    
        <div class="mb-4">
            @php $name = 'status_nacionality'; $model = 'estudiant.'.$name; $key = Str::random(10); @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="[1=>'SI',0=>'NO']" id="{{$model}}" class=" w-full " />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

</div>
