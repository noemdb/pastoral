{{-- 'curriculum_id','code','code_sm','name','description','observations','finicial','ffinal','status','color','header','footer','body' --}}

<div class="grid grid-cols-1 gap-4">
    <div class="mb-4">
        @php $name = 'curriculum_id'; $model = 'course.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$curricula_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>
<div class="grid grid-cols-2 gap-4">    
    <div class="mb-4">
        @php $name = 'name'; $model = 'course.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            @php $name = 'code'; $model = 'course.'.$name; $key = Str::random(10); @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'code_sm'; $model = 'course.'.$name; $key = Str::random(10); @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>
    {{-- <hr> --}}
    <div class="mb-4">
        @php $name = 'description'; $model = 'course.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'observations'; $model = 'course.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        @php $name = 'header'; $model = 'course.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'body'; $model = 'course.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'footer'; $model = 'course.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <hr>

    <div class="mb-4">
        @php $name = 'color'; $model = 'course.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input  type="color" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 h-10 w-10" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        @php $name = 'status'; $model = 'course.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select  wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="[1=>'SI',0=>'NO']" class="block mt-1 w-full" rows="2" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>
