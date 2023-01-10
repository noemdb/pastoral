<div class="grid grid-cols-1 gap-4">
    <div class="mb-4">
        @php $name = 'header'; $model = 'pastoral.'.$name; @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" rows="4"/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'body'; $model = 'pastoral.'.$name; @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" rows="4"/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'footer'; $model = 'pastoral.'.$name; @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" rows="4"/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>
