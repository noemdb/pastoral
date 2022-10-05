{{-- 'ti_teacher_id','ci_profesor','lastname','name','gender','date_birth','state_id','dir_address','phone','cellphone','email','status', --}}

<div class="grid grid-cols-1 gap-4">
    <div class="mb-4">
        @php $name = 'ti_teacher_id'; $model = 'teacher.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$ti_teacher_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>

<div class="grid grid-cols-2 gap-4"> 
    <div class="mb-4">
        @php $name = 'name'; $model = 'teacher.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>   
    <div class="mb-4">
        @php $name = 'lastname'; $model = 'teacher.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>   
    <div class="mb-4">
        @php $name = 'ci_profesor'; $model = 'teacher.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'gender'; $model = 'teacher.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$genders_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'date_birth'; $model = 'teacher.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input type="date" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>

    <div class="mb-4">
        @php $name = 'phone'; $model = 'teacher.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    <div class="mb-4">
        @php $name = 'email'; $model = 'teacher.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-input type="email" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
    
    <div class="mb-4">
            @php $name = 'whatsapp'; $model = 'teacher.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'telegram'; $model = 'teacher.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'twitter'; $model = 'teacher.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'instagram'; $model = 'teacher.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    
        <div class="mb-4">
            @php $name = 'status'; $model = 'teacher.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-select  wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="[1=>'Activo',0=>'Desactivo']" class="block mt-1 w-full" rows="2" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

</div>

<div class="grid grid-cols-1 gap-4">
    <div class="mb-4">
        @php $name = 'dir_address'; $model = 'teacher.'.$name; $key = Str::random(10);@endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
        <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>
