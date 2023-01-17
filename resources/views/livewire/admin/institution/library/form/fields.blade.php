{{-- 'pastoral_id','pescolar_id','curriculum_id','lapse_id','level_id','section_id',
'code','code_sm','name','description','observations','autor','color','header','body','attachment','footer','status', --}}

<div class="md:container md:mx-auto">

    <div class="grid grid-cols-1 gap-4">
        <div class="mb-2">
            @php $name = 'pastoral_id'; $model = 'library.'.$name; $key = Str::random(10); @endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-select wire:change="loadPescolars($event.target.value)" wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$pastorals_list" id="{{$model}}" class=" w-full " />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        @if (!empty($library->pastoral_id))
            <div class=" mb-2">
                @php $name = 'pescolar_id'; $model = 'library.'.$name; $key = Str::random(10); @endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-select wire:change="loadCurricula($event.target.value)" wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$pescolars_list" id="{{$model}}" class=" w-full " />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        @endif

        @if (!empty($library->pescolar_id))
            <div class=" mb-2">
                @php $name = 'curriculum_id'; $model = 'library.'.$name; $key = Str::random(10); @endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-select wire:change="loadLapses($event.target.value)" wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$curricula_list" id="{{$model}}" class=" w-full " />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        @endif
        @if (!empty($library->curriculum_id))
            <div class=" mb-2">
                @php $name = 'lapse_id'; $model = 'library.'.$name; $key = Str::random(10); @endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-select wire:change="loadLevels($event.target.value)" wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$lapses_list" id="{{$model}}" class=" w-full " />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        @endif

        @if (!empty($library->lapse_id))
            <div class=" mb-2">
                @php $name = 'level_id'; $model = 'library.'.$name; $key = Str::random(10); @endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-select wire:change="loadSections($event.target.value)" wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$levels_list" id="{{$model}}" class=" w-full " />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        @endif
        @if (!empty($library->level_id))
            <div class=" mb-2">
                @php $name = 'section_id'; $model = 'library.'.$name; $key = Str::random(10); @endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$sections_list" id="{{$model}}" class=" w-full " />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        @endif
    </div>

    <hr class="mb-4">

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="mb-4">
            @php $name = 'name'; $model = 'library.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="grid grid-cols-2 gap-6">
            <div class="mb-4">
                @php $name = 'code'; $model = 'library.'.$name; $key = Str::random(10);@endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
            <div class="mb-4">
                @php $name = 'code_sm'; $model = 'library.'.$name; $key = Str::random(10);@endphp
                <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
                @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
            </div>
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="mb-4">
            @php $name = 'description'; $model = 'library.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'observations'; $model = 'library.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
        <div class="mb-4">
            @php $name = 'autor'; $model = 'library.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

    </div>

    <div class="grid grid-cols-2 gap-4">
        <div class="mb-4">
            @php $name = 'status'; $model = 'library.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-select  wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="[1=>'SI',0=>'NO']" class="block mt-1 w-full" rows="2" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'color'; $model = 'library.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-input  type="color" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" class="block mt-1 h-10 w-full" />
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>

    <hr class="my-2">
    <h5 class="text-center font-bold">HTML</h5>

    <div class="grid grid-cols-1 gap-4">
        <div class="mb-4">
            @php $name = 'header'; $model = 'library.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'body'; $model = 'library.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        <div class="mb-4">
            @php $name = 'footer'; $model = 'library.'.$name; $key = Str::random(10);@endphp
            <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
            <x-textarea wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" rows="2"/>
            @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
    </div>
