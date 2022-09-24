{{-- 
'tauthority_id','pescolar_id','pastoral_id','name','lastname','ci','position','profile_professional','photo','finicial','ffinal',
 --}}


<div class="grid grid-cols-2 gap-4">
    <div>
        <div class="mb-4">
            @php $name = 'tauthority_id'; $model = 'tauthority.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            <x-select name="{{$model}}"  :options="$tauthority_list" class="w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
       {{--  <div class="mb-4">
            @php $name = 'legalname'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'code'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div> --}}
    </div>
    <div>        
       {{--  <div class="mb-4">
            @php $name = 'code_official'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'code_private'; $model = 'pastoral.'.$name; @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:model.lazy="{{$model}}" name="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div> --}}
    </div>
</div>
