<div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="mb-4">
            @php $name = 'christening_place'; $model = 'estudiant.'.$name; $key = Str::random(10); @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.defer="{{$model}}" wire:key="{{$key}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            @php $name = 'christening_date'; $model = 'estudiant.'.$name; $key = Str::random(10); @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input type="date" wire:key="{{$key}}" wire:model.defer="{{$model}}" id="{{$model}}" class=" w-full " />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>


    </div>
</div>
