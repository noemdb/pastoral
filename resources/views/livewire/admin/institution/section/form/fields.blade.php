{{--  'level_id','code','code_sm','name','description','observations','color','header','body','footer','status', --}}

<div class="container mx-auto">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">

        <div class="grid grid-cols-1 gap-4">
            <div class="mb-4">
                @php $name = 'level_id'; $model = 'section.'.$name; $key = Str::random(10); @endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$levels_list" id="{{$model}}" class=" w-full " />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="mb-4">
            @php $name = 'name'; $model = 'section.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                @php $name = 'code'; $model = 'section.'.$name; $key = Str::random(10); @endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                @php $name = 'code_sm'; $model = 'section.'.$name; $key = Str::random(10); @endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div class="mb-4">
                @php $name = 'status'; $model = 'section.'.$name; $key = Str::random(10);@endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-select  wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="[1=>'SI',0=>'NO']" class="block mt-1 w-full" rows="2" />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                @php $name = 'color'; $model = 'section.'.$name; $key = Str::random(10);@endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-input type="color" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 h-10 w-full" />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>


        <div class="mb-4">
            @php $name = 'description'; $model = 'section.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'observations'; $model = 'section.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

    </div>

    <div class="grid grid-cols-1 gap-4">
        <div class="mb-4">
            @php $name = 'header'; $model = 'section.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'body'; $model = 'section.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'footer'; $model = 'section.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

</div>

<div class="grid grid-cols-2 gap-4">

</div>
