@php
    $class['iteration']="text-left px-4";
    $class['name']="text-left px-4";
    $class['legalname']="hidden md:table-cell text-left px-4";
    $class['description']="hidden lg:table-cell text-left px-4";
    $class['count_pescolars']="hidden lg:table-cell text-left px-4";
    $class['assit_schedule']="hidden lg:table-cell text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'pastoral.'.$name; @endphp
            <div class="flex justify-between">
                <x-jet-label for="{{$name}}" value="Buscar" />
                <div wire:loading class="text-black font-semibold fixed	 bottom-0 right-0 z-10 bg-white rounded border shadow mr-2 mb-2 dark:text-gray-100"> Cargando... </div>
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
                <th class="{{ $class['name'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div>{{$list_comment['name'] ?? ''}}</div>
                        @if($pastorals->isNotEmpty())
                            <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['legalname'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div>{{$list_comment['legalname'] ?? ''}}</div>
                        @if($pastorals->isNotEmpty())
                            <x-elements.crud.sort-by field="legalname" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['description'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div>{{$list_comment['description'] ?? ''}}</div>
                        @if($pastorals->isNotEmpty())
                            <x-elements.crud.sort-by field="description" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['count_pescolars'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div>{{$list_comment['count_pescolars'] ?? ''}}</div>
                        {{-- @if($pastorals->isNotEmpty())
                            <x-elements.crud.sort-by field="description" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif --}}
                    </div>
                </th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>
        </thead>

        <tbody id="tdatos">
        @forelse($pastorals as $pastoral)
            @php $count_pescolars = $pastoral->pescolars->count()
            @endphp
            {{-- 'name', 'legalname', 'code', 'code_official', 'code_private', 'description', 'observations', 'header', 'body', 'footer', 'rif_institution', 'phone', 'address', 'city', 'state_code', 'country', 'email_institution', 'password', 'txt_contract_study' --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($pastoral->id == $pastoral_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['name'] ?? ''}}">{{$pastoral->name ?? ''}}</td>
                <td class="{{ $class['legalname'] ?? ''}}">{{$pastoral->legalname ?? ''}}</td>
                <td class="{{ $class['description'] ?? ''}}">{{$pastoral->description ?? ''}}</td>
                <td class="{{ $class['count_pescolars'] ?? ''}}">{{$count_pescolars ?? ''}}</td>

                <td class="{{ $class['action'] ?? '' }}">

                        <div class="flex items-center justify-center justify-between mb-3 shadow">
                            <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                                <x-elements.form.button-edit wire:key="pastoral-edit-{{$pastoral->id}}" wire:click="edit({{ $pastoral->id }})" >
                                    <x-icon-pen class="w-4 h-4 mr-0.5" />
                                </x-elements.form.button>
                                <x-elements.form.button-del :disabled="!$pastoral->status_delete" wire:key="pastoral-delete-{{$pastoral->id}}" wire:click="delete({{ $pastoral->id }})" >
                                    <x-icon-trash-can class="w-4 h-4 mr-0.5" />
                                </x-elements.form.button>
                            </div>
                        </div>

                </td>
            </tr>
        @empty
            <tr><td colspan="7">No hay datos.<td></tr>
        @endforelse

        </tbody>

    </table>

    {{-- paginations --}}

    {{-- <hr class="my-2"> --}}

    {{ $pastorals->links() }}

</div>
