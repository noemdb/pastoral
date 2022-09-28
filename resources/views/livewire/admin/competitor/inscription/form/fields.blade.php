{{-- 'tinscription_id','section_id','estudiant_id','observations' --}}

<div class="grid grid-cols-1 gap-4">
    <div class="mb-4">
        @php $name = 'section_id'; $model = 'inscription.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$section_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>

<div class="grid grid-cols-2 gap-4">    
    <div class="mb-4">
        @php $name = 'tinscription_id'; $model = 'inscription.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$tinscription_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'estudiant_id'; $model = 'inscription.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$estudiant_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

</div>

<div class="grid grid-cols-1 gap-4">
    <div class="mb-4">
        @php $name = 'observations'; $model = 'inscription.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>
