{{-- 'topic_id','duration','description','observations','color','header','body','attachment','footer', --}}

<div class="grid grid-cols-1 md:grid-cols-4 gap-4">
    <div class="mb-4 md:col-span-3">
        @php $name = 'topic_id'; $model = 'lesson.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$topics_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4 md:col-span-1">
        @php $name = 'duration'; $model = 'lesson.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input type="number" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>

<div class="grid grid-cols-1 gap-4">   
    <div class="mb-4">
        @php $name = 'description'; $model = 'lesson.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>   
    <div class="mb-4">
        @php $name = 'observations'; $model = 'lesson.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>

<div class="grid grid-cols-2 gap-4">    
    <div class="mb-4">
        @php $name = 'color'; $model = 'lesson.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input type="color" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 h-10 w-10" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'header'; $model = 'lesson.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'body'; $model = 'lesson.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'footer'; $model = 'lesson.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'attachment'; $model = 'lesson.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'status'; $model = 'lesson.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select  wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="[1=>'Activo',0=>'Desactivo']" class="block mt-1 w-full" rows="2" required/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>

