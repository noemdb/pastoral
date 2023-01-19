{{-- 'user_id','citype_id','ci','name','phone','email','whatsapp','telegram','twitter','instagram','status_adviders' --}}

<div class="grid grid-cols-1 md:grid-cols-2 gap-4">

    <div class="mb-4">
        @php $name = 'citype_id'; $model = 'representant.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$citype_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        @php $name = 'ci'; $model = 'representant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input type="number" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'name'; $model = 'representant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'phone'; $model = 'representant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'email'; $model = 'representant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input type="email" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'whatsapp'; $model = 'representant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'telegram'; $model = 'representant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'twitter'; $model = 'representant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'instagram'; $model = 'representant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        @php $name = 'status_adviders'; $model = 'representant.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select  wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="[1=>'SI',0=>'NO']" class="block mt-1 w-full" rows="2" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

</div>
