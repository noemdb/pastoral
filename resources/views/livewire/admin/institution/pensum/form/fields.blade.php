{{-- 'level_id','course_id','order','hour_t_week','hour_p_week','unid_credit','approved_credit_unir','enable_academic_index', --}}


<div class="grid grid-cols-1 md:grid-cols-8 gap-4">

    <div class="col-span-6">

        <div class="container mx:2 md:container md:mx-auto">

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    @php $name = 'level_id'; $model = 'pensum.'.$name; $key = Str::random(10); @endphp
                    <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                    <x-select wire:change="loadCourses($event.target.value)" wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$levels_list" id="{{$model}}" class=" w-full "/>
                    @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
                <div class="mb-4">
                    @php $name = 'course_id'; $model = 'pensum.'.$name; $key = Str::random(10); @endphp
                    <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                    <x-select wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="$courses_list" id="{{$model}}" class=" w-full " />
                    @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">

                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4">
                        @php $name = 'order'; $model = 'pensum.'.$name; $key = Str::random(10);@endphp
                        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                        <x-input type="number" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
                        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        @php $name = 'hour_t_week'; $model = 'pensum.'.$name; $key = Str::random(10); @endphp
                        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                        <x-input type="number" wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
                        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>


                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4">
                        @php $name = 'hour_p_week'; $model = 'pensum.'.$name; $key = Str::random(10); @endphp
                        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                        <x-input type="number"  wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
                        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-4">
                        @php $name = 'unid_credit'; $model = 'pensum.'.$name; $key = Str::random(10); @endphp
                        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                        <x-input type="number"  wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
                        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>

                <div class="grid grid-cols-2 gap-4">
                    <div class="mb-4">
                        @php $name = 'approved_credit_unir'; $model = 'pensum.'.$name; $key = Str::random(10); @endphp
                        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                        <x-input type="number"  wire:key="{{$key}}" wire:model.defer="{{$model}}" name="{{$model}}" id="{{$model}}" class="block mt-1 w-full" />
                        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>

                    <div class="mb-4">
                        @php $name = 'enable_academic_index'; $model = 'pensum.'.$name; $key = Str::random(10);@endphp
                        <x-jet-label for="{{$model}}" value="{{ $list_comment[$name] ?? null }}" />
                        <x-select  wire:key="{{$key}}" wire:model.defer="{{$model}}" :options="[1=>'SI',0=>'NO']" class="block mt-1 w-full" rows="2" />
                        @error($model) <span class="text-sm text-red-600">{{ $message }}</span> @enderror
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="col-span-2 border-l-4">
        <div class="">
            <div class=" text-center font-bold">Pensums</div>

            <ul class="list-none ml-2">
            @forelse ($level_pensums as $pensum)
                <li class=" text-left"> <span class=" text-gray-600">{{$loop->iteration ?? null}}.- </span>  {{$pensum->full_name}}</li>
            @empty
                <span>No hay asignaturas</span>
            @endforelse
            </ul>
        </div>
    </div>

</div>




