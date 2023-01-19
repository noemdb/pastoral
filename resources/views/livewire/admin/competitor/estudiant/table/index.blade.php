{{-- 'user_id','representant_id','citype_id','ci','name','lastname','gender','date_birth','country_id','state_id','city_id','dir_address','phone','email','status_nacionality', --}}
@php
    $class['iteration']="text-left px-4";
    $class['name']="text-left px-4";
    $class['ci']="text-left px-4";
    $class['representant_id']="text-left px-4";
    $class['count_inscriptions']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'estudiant.'.$name; @endphp
            <div class="flex justify-start">
                <x-jet-label for="{{$name}}" value="Buscar:" />
                <span class="text-gray-400 mx-2 font-medium">nombre</span>
            </div>
            <x-input wire:model.debounce.500ms="{{$name}}" name="{{$name}}" class="block w-full" />
        </div>
        <div class="w-1/5">
            <x-jet-label for="paginate" value="Registros" />
            <x-select  wire:model="paginate" name="paginate" class="w-full" :options="$paginate_list" />
        </div>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        {{-- 'name','ci',lastname','representant_id', 'phone'--}}
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">N</div>
                </th>
                <th class="{{ $class['name'] ?? ''}}">
                        <div class="flex justify-between">
                            <div> {{$list_comment['name'] ?? ''}} </div>
                            @if($estudiants->isNotEmpty())
                                <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                            @endif
                        </div>
                    </th>
                <th class="{{ $class['ci'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['ci'] ?? ''}} </div>
                        @if($estudiants->isNotEmpty())
                            <x-elements.crud.sort-by field="ci" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['representant_id'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['representant_id'] ?? ''}} </div>
                        @if($estudiants->isNotEmpty())
                            <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['count_inscriptions'] ?? ''}}"><div> {{$list_comment['count_inscriptions'] ?? ''}} </div></th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($estudiants as $estudiant)

            @php
                $representant = $estudiant->representant;
            @endphp

            {{-- 'name','ci','representant_id'--}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($estudiant->id == $estudiant_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['name'] ?? ''}}">{{$estudiant->fullname ?? ''}}</td>
                <td class="{{ $class['ci'] ?? ''}}">{{$estudiant->ci ?? ''}}</td>

                <td class="{{ $class['representant_id'] ?? ''}}">{{$representant->name ?? ''}}</td>

                <td class="{{ $class['count_inscriptions'] ?? ''}}">{{$estudiant->count_inscriptions ?? ''}}</td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="estudiant-edit-{{$estudiant->id}}" wire:click="edit({{ $estudiant->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del :disabled="!$estudiant->status_delete" wire:key="estudiant-delete-{{$estudiant->id}}" wire:click="delete({{ $estudiant->id }})" >
                                <x-icon-trash-can class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-del>
                        </div>
                    </div>

                </td>
            </tr>
        @empty
            <tr>
                <td colspan="7" class="text-center my-4 py-4">No hay datos.<td>
            </tr>
        @endforelse

        </tbody>

    </table>

    {{ $estudiants->links() }}

</div>
