{{-- 'pastoral_id','name','code','finicial','ffinal','description','observations','color','header','body','footer', --}}
@php
    $class['iteration']="text-left px-4";
    $class['pastoral_id']="text-left px-4";
    $class['name']="text-left px-4";
    $class['finicial']="hidden md:table-cell text-left px-4";
    $class['ffinal']="hidden md:table-cell text-left px-4";
    $class['description']="hidden lg:table-cell text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'pescolar.'.$name; @endphp
            <div class="flex justify-start">
                <x-jet-label for="{{$name}}" value="Buscar:" />
                <span class="text-gray-400 mx-2 font-medium">nombre, ci</span>                
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
                <th class="{{ $class['pastoral_id'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['pastoral_id'] ?? ''}} </div>
                        @if($pescolars->isNotEmpty())
                            <x-elements.crud.sort-by field="pastoral_id" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['name'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['name'] ?? ''}} </div>
                        @if($pescolars->isNotEmpty())
                            <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                
                <th class="{{ $class['finicial'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['finicial'] ?? ''}} </div>
                        @if($pescolars->isNotEmpty())
                            <x-elements.crud.sort-by field="finicial" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['ffinal'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['ffinal'] ?? ''}} </div>
                        @if($pescolars->isNotEmpty())
                            <x-elements.crud.sort-by field="ffinal" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['description'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['description'] ?? ''}} </div>
                        @if($pescolars->isNotEmpty())
                            <x-elements.crud.sort-by field="description" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($pescolars as $pescolar)

            {{-- 'pastoral_id','name','code','finicial','ffinal','description','observations','color','header','body','footer', --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($pescolar->id == $pescolar_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['pastoral_id'] ?? ''}}">{{$pescolar->pastoral->name ?? ''}}</td>
                <td class="{{ $class['name'] ?? ''}}">{{$pescolar->name ?? ''}}</td>
                <td class="{{ $class['finicial'] ?? ''}}">{{$pescolar->finicial ?? ''}}</td>
                <td class="{{ $class['ffinal'] ?? ''}}">{{$pescolar->ffinal ?? ''}}</td>
                <td class="{{ $class['description'] ?? ''}}">{{$pescolar->description ?? ''}}</td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="pescolar-edit-{{$pescolar->id}}" wire:click="edit({{ $pescolar->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del wire:key="pescolar-delete-{{$pescolar->id}}" wire:click="delete({{ $pescolar->id }})" >
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

    {{ $pescolars->links() }}

</div>
