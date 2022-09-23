@php
    $class['iteration']="text-left px-4";
    $class['name']="text-left px-4";
    $class['legalname']="text-left px-4";
    $class['description']="text-left px-4";
    $class['assit_schedule']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4">
        @php $name = 'search'; $model = 'pastoral.'.$name; @endphp
        <div class="flex justify-between">
            <x-jet-label for="{{$name}}" value="Buscar" />
            <div wire:loading class="text-gray-400 text-sm"> Cargando... </div>
        </div>        
        <x-input wire:model.debounce.500ms="{{$name}}" name="{{$name}}" class="block mt-1 w-full" />
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">
                         N
                    </div>
                </th>
                <th class="{{ $class['name'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['name'] ?? ''}} </div>
                        <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                    </div>
                </th>
                <th class="{{ $class['legalname'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div>
                            {{$list_comment['legalname'] ?? ''}}
                        </div>
                        <x-elements.crud.sort-by field="legalname" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                    </div>
                </th>
                <th class="{{ $class['description'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div>
                            {{$list_comment['description'] ?? ''}}
                        </div>
                        <x-elements.crud.sort-by field="description" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                    </div>
                </th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>
        </thead>

        <tbody id="tdatos">
        @foreach($pastorals as $pastoral)

            {{-- 'name', 'legalname', 'code', 'code_official', 'code_private', 'description', 'observations', 'header', 'body', 'footer', 'rif_institution', 'phone', 'address', 'city', 'state_code', 'country', 'email_institution', 'password', 'txt_contract_study' --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($pastoral->id == $pastoral_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['fullname'] ?? ''}}">{{$pastoral->name ?? ''}}</td>
                <td class="{{ $class['legalname'] ?? ''}}">{{$pastoral->legalname ?? ''}}</td>
                <td class="{{ $class['number_id'] ?? ''}}">{{$pastoral->description ?? ''}}</td>

                <td class="{{ $class_action ?? '' }}">

                    <div class="flex items-center justify-center mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <button type="button" wire:key="pastoral-edit-{{$pastoral->id}}" wire:click="edit({{ $pastoral->id }})" class="rounded-l inline-block px-2 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Editar</button>
                            <button type="button" wire:key="pastoral-delete-{{$pastoral->id}}" wire:click="delete({{ $pastoral->id }})" class="rounded-r inline-block px-2 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-0 active:bg-red-800 transition duration-150 ease-in-out">Eliminar</button>
                        </div>
                    </div>

                </td>
            </tr>
        @endforeach

        </tbody>

    </table>

    {{-- paginations --}}

    {{-- <hr class="my-2"> --}}

    {{ $pastorals->links() }}

</div>
