<div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <div class="mb-4">
            @php $name = 'name'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'legalname'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'description'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" rows="3" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'observations'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" rows="3" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>


        <div class="mb-4">
            @php $name = 'city'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'country'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 gap-4 mx-1">
        <div class="mb-4">
            @php $name = 'address'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" rows="4"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>
</div>
