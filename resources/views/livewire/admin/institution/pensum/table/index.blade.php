{{-- 'level_id','course_id','order','hour_t_week','hour_p_week','unid_credit','approved_credit_unir','enable_academic_index', --}}
@php
    $class['iteration']="text-left px-4";
    $class['level_id']="text-left px-4";
    $class['course_id']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp

<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'pensum.'.$name; @endphp
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
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">N</div>
                </th>
                <th class="{{ $class['level_id'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['level_id'] ?? ''}} </div>
                        @if($pensums->isNotEmpty())
                            <x-elements.crud.sort-by field="level_id" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['course_id'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['course_id'] ?? ''}} </div>
                        @if($pensums->isNotEmpty())
                            <x-elements.crud.sort-by field="course_id" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($pensums as $pensum)

            @php 
                $level = $pensum->level;
                $curriculum = $level->curriculum;
                $pescolar = $curriculum->pescolar;
                $pastoral = $curriculum->pastoral;
            @endphp

            {{-- 'level_id','course_id','order','hour_t_week','hour_p_week','unid_credit','approved_credit_unir','enable_academic_index', --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($pensum->id == $pensum_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['level_id'] ?? ''}}">
                    <div>{{$level->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$curriculum->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$pescolar->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$pastoral->name ?? ''}}</div>
                </td>
                <td class="{{ $class['course_id'] ?? ''}}">{{$pensum->course->fullname ?? ''}}</td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="pensum-edit-{{$pensum->id}}" wire:click="edit({{ $pensum->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del wire:key="pensum-delete-{{$pensum->id}}" wire:click="delete({{ $pensum->id }})" >
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

    {{ $pensums->links() }}

</div>
