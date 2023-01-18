{{-- 'user_id','citype_id','ci','name','phone','email','whatsapp','telegram','twitter','instagram','status_adviders' --}}
@php
    $class['iteration']="text-left px-4";
    $class['name']="text-left px-4";
    $class['ci']="text-left px-4";
    $class['phone']="text-left px-4";
    $class['count_estudiants']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'representant.'.$name; @endphp
            <div class="flex justify-start">
                <x-jet-label for="{{$name}}" value="Buscar:" />
                <span class="text-gray-400 mx-2 font-medium">nombre, CI</span>
            </div>
            <x-input wire:model.debounce.500ms="{{$name}}" name="{{$name}}" class="block w-full" />
        </div>
        <div class="w-1/5">
            <x-jet-label for="paginate" value="Registros" />
            <x-select  wire:model="paginate" name="paginate" class="w-full" :options="$paginate_list" />
        </div>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        {{-- 'user_id','citype_id','ci','name','phone','email','whatsapp','telegram','twitter','instagram','status_adviders' --}}
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">N</div>
                </th>
                <th class="{{ $class['name'] ?? ''}}">
                        <div class="flex justify-between">
                            <div> {{$list_comment['name'] ?? ''}} </div>
                            @if($representants->isNotEmpty())
                                <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                            @endif
                        </div>
                    </th>
                <th class="{{ $class['ci'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['ci'] ?? ''}} </div>
                        @if($representants->isNotEmpty())
                            <x-elements.crud.sort-by field="ci" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['phone'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['phone'] ?? ''}} </div>
                        @if($representants->isNotEmpty())
                            <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>

                <th class="{{ $class['count_estudiants'] ?? ''}}">{{$list_comment['count_estudiants'] ?? ''}}</th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($representants as $representant)

            {{-- 'user_id','citype_id','ci','name','phone','email','whatsapp','telegram','twitter','instagram','status_adviders' --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($representant->id == $representant_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['name'] ?? ''}}">{{$representant->name ?? ''}}</td>
                <td class="{{ $class['ci'] ?? ''}}">{{$representant->ci ?? ''}}</td>

                <td class="{{ $class['phone'] ?? ''}}">{{$representant->phone ?? ''}}</td>

                <td class="{{ $class['count_estudiants'] ?? ''}}">{{$representant->count_estudiants ?? ''}}</td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="representant-edit-{{$representant->id}}" wire:click="edit({{ $representant->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del :disabled="!$representant->status_delete" wire:key="representant-delete-{{$representant->id}}" wire:click="delete({{ $representant->id }})" >
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

    {{ $representants->links() }}

</div>
