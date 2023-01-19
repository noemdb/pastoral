<div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

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
</div>
