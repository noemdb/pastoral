{{-- 'pescolar_id','code','name','order','capacity','description','observations','status_build_promotion','title','profile','status','color','header','body','footer', --}}
@php
    $class['iteration']="text-left px-4"; // hidden md:table-cell // hidden lg:table-cell
    $class['pescolar_id']="text-left px-4";
    $class['code']="hidden md:table-cell text-left px-4";
    $class['name']="text-left px-4";
    $class['capacity']="hidden md:table-cell text-left px-4";
    $class['description']="hidden lg:table-cell text-left px-4";
    $class['count_lapses']="hidden lg:table-cell text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'curriculum.'.$name; @endphp
            <div class="flex justify-start">
                <x-jet-label for="{{$name}}" value="Buscar:" />
                <span class="text-gray-400 mx-2 font-medium">nombre, descripción</span>
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
                <th class="{{ $class['pescolar_id'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['pescolar_id'] ?? ''}} </div>
                        @if($curricula->isNotEmpty())
                            <x-elements.crud.sort-by field="pescolar_id" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['code'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['code'] ?? ''}} </div>
                        @if($curricula->isNotEmpty())
                            <x-elements.crud.sort-by field="code" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['name'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['name'] ?? ''}} </div>
                        @if($curricula->isNotEmpty())
                            <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>

                <th class="{{ $class['capacity'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['capacity'] ?? ''}} </div>
                        @if($curricula->isNotEmpty())
                            <x-elements.crud.sort-by field="capacity" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['description'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['description'] ?? ''}} </div>
                        @if($curricula->isNotEmpty())
                            <x-elements.crud.sort-by field="description" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['count_lapses'] ?? ''}}">{{$list_comment['count_lapses'] ?? ''}}</th>

                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($curricula as $curriculum)

            @php
                $pescolar = $curriculum->pescolar;
                $pastoral = $pescolar->pastoral;
            @endphp

            {{-- 'pescolar_id','name','code','capacity','ffinal','description','observations','color','header','body','footer', --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($curriculum->id == $curriculum_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['pescolar_id'] ?? ''}}">
                    <div>{{$pescolar->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$pastoral->name ?? ''}}</div>
                </td>
                <td class="{{ $class['code'] ?? ''}}">{{$curriculum->code ?? ''}}</td>
                <td class="{{ $class['name'] ?? ''}}">{{$curriculum->name ?? ''}}</td>
                <td class="{{ $class['capacity'] ?? ''}}">{{$curriculum->capacity ?? ''}}</td>
                <td class="{{ $class['description'] ?? ''}}">{{$curriculum->description ?? ''}}</td>
                <td class="{{ $class['count_lapses'] ?? '' }}">{{$curriculum->count_lapses ?? ''}}</td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="curriculum-edit-{{$curriculum->id}}" wire:click="edit({{ $curriculum->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del :disabled="!$curriculum->status_delete" wire:key="curriculum-delete-{{$curriculum->id}}" wire:click="delete({{ $curriculum->id }})" >
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

    {{ $curricula->links() }}

</div>
