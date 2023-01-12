{{-- 'tauthority_id','pescolar_id','pastoral_id','name','lastname','ci','position','profile_professional','photo','finicial','ffinal', --}}
@php
    $class['iteration']="text-left px-4";
    $class['tauthority_id']="hidden md:table-cell text-left px-4";
    $class['pastoral_id']="hidden lg:table-cell text-left px-4";
    $class['name']="text-left px-4";
    $class['ci']="text-left px-4";
    $class['position']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'authority.'.$name; @endphp
            <div class="flex justify-start">
                <x-jet-label for="{{$name}}" value="Buscar:" />
                <span class="text-gray-400 mx-2 font-medium">nombre, ci</span>
                {{-- <div wire:loading class="text-black font-semibold fixed	 bottom-0 right-0 z-10 bg-white rounded border shadow mr-2 mb-2 dark:text-gray-100"> Cargando... </div> --}}
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
                    <div class="flex  justify-between">
                        N
                    </div>
                </th>
                <th class="{{ $class['pastoral_id'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['pastoral_id'] ?? ''}} </div>
                        @if($authorities->isNotEmpty())
                            <x-elements.crud.sort-by field="pastoral_id" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['tauthority_id'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['tauthority_id'] ?? ''}} </div>
                        @if($authorities->isNotEmpty())
                            <x-elements.crud.sort-by field="tauthority_id" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['name'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['name'] ?? ''}} </div>
                        @if($authorities->isNotEmpty())
                            <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['ci'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['ci'] ?? ''}} </div>
                        @if($authorities->isNotEmpty())
                            <x-elements.crud.sort-by field="ci" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['position'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['position'] ?? ''}} </div>
                        @if($authorities->isNotEmpty())
                            <x-elements.crud.sort-by field="position" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($authorities as $authority)

            @php
                $pastoral = $authority->pastoral;
            @endphp

            {{-- 'tauthority_id','pescolar_id','pastoral_id','name','lastname','ci','position','profile_professional','photo','finicial','ffinal', --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($authority->id == $authority_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['pastoral_id'] ?? ''}}">{{$authority->pastoral->name ?? ''}}</td>
                <td class="{{ $class['tauthority_id'] ?? ''}}"> {{$authority->tauthority->name ?? ''}} </td>
                <td class="{{ $class['name'] ?? ''}}">{{$authority->fullname ?? ''}}</td>
                <td class="{{ $class['ci'] ?? ''}}">{{$authority->ci ?? ''}}</td>
                <td class="{{ $class['position'] ?? ''}}">{{$authority->position ?? ''}} <div class=" text-gray-400">[{{f_date($authority->finicial)}} - {{f_date($authority->ffinal)}}]</div></td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="authority-edit-{{$authority->id}}" wire:click="edit({{ $authority->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del :disabled="!$authority->status_delete" wire:key="authority-delete-{{$authority->id}}" wire:click="delete({{ $authority->id }})" >
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

    {{-- paginations --}}

    {{-- <hr class="my-2"> --}}

    {{ $authorities->links() }}

</div>
