{{-- 'tinscription_id','section_id','estudiant_id','observations' --}}

<div class="grid grid-cols-1 gap-4">
    <div class="mb-4">
        @php $name = 'pastoral_id'; $model = $name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment_inscription[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model="{{$model}}" :options="$pastorals_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>

@if ($pastoral_id)
    <div class="grid grid-cols-1 gap-4">
        <div class="mb-4">
            @php $name = 'pescolar_id'; $model = $name; $key = Str::random(10); @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment_inscription[$name] ?? null }}" />
            <x-select wire:key="{{$key}}" wire:model="{{$model}}" :options="$pescolars_list" id="{{$model}}" class=" w-full " />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

    @if ($pescolar_id)
        <div class="grid grid-cols-1 gap-4">
            <div class="mb-4">
                @php $name = 'curriculum_id'; $model = ''.$name; $key = Str::random(10); @endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment_inscription[$name] ?? null }}" />
                <x-select wire:key="{{$key}}" wire:model="{{$model}}" :options="$curricula_list" id="{{$model}}" class=" w-full " />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>

        @if ($curriculum_id)
            <div class="grid grid-cols-1 gap-4">
                <div class="mb-4">
                    @php $name = 'level_id'; $model = ''.$name; $key = Str::random(10); @endphp
                    <x-jet-label for="{{$model}}" value="{{ $list_comment_inscription[$name] ?? null }}" />
                    <x-select wire:key="{{$key}}" wire:model="{{$model}}" :options="$levels_list" id="{{$model}}" class=" w-full " />
                    @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>
            @if ($level_id)
                <div class="grid grid-cols-1 gap-4">
                    <div class="mb-4">
                        @php $name = 'section_id'; $model = ''.$name; $key = Str::random(10); @endphp
                        <x-jet-label for="{{$model}}" value="{{ $list_comment_inscription[$name] ?? null }}" />
                        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$section_list" id="{{$model}}" class=" w-full " />
                        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-1 gap-4">    
                    <div class="mb-4">
                        @php $name = 'tinscription_id'; $model = 'inscription.'.$name; $key = Str::random(10); @endphp
                        <x-jet-label for="{{$model}}" value="{{ $list_comment_inscription[$name] ?? null }}" />
                        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$tinscription_list" id="{{$model}}" class=" w-full " />
                        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>
                
                <div class="grid grid-cols-1 gap-4">
                    <div class="mb-4">
                        @php $name = 'observations'; $model = 'inscription.'.$name; $key = Str::random(10);@endphp
                        <x-jet-label for="{{$model}}" value="{{ $list_comment_inscription[$name] ?? null }}" />
                        <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
                        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>
                
            @endif
        @endif
    @endif
@endif




{{-- 
<div class="grid grid-cols-1 gap-4">
    <div class="mb-4">
        @php $name = 'level_id'; $model = 'inscription.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment_inscription[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$levels_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div>

--}}

{{-- <div class="grid grid-cols-1 gap-4">
    <div class="mb-4">
        @php $name = 'section_id'; $model = 'inscription.'.$name; $key = Str::random(10); @endphp
        <x-jet-label for="{{$model}}" value="{{ $list_comment_inscription[$name] ?? null }}" />
        <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$section_list" id="{{$model}}" class=" w-full " />
        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
    </div>
</div> --}}


