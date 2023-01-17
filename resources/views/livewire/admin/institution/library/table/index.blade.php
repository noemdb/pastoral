{{-- 'curriculum_id','level_id','code','code_sm','name','description','observations','autor','color','header','body','attachment','footer','status',  --}}
@php
    $class['iteration']="text-left px-4";
    $class['curriculum_id']="text-left px-4";
    $class['level_id']="text-left px-4";
    $class['description']="text-left px-4";
    $class['observations']="text-left px-4";
    $class['color']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'library.'.$name; @endphp
            <div class="flex justify-start">
                <x-jet-label for="{{$name}}" value="Buscar:" />
                <span class="text-gray-400 mx-2 font-medium">Nombre, descripción, nivel</span>
            </div>
            <x-input wire:model.debounce.500ms="{{$name}}" name="{{$name}}" class="block w-full" />
        </div>
        <div class="w-1/5">
            <x-jet-label for="paginate" value="Registros" />
            <x-select  wire:model="paginate" name="paginate" class="w-full" :options="$paginate_list" />
        </div>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        {{-- 'curriculum_id','level_id','code','code_sm','name','description','observations','autor','color','header','body','attachment','footer','status', --}}

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">N</div>
                </th>
                <th class="{{ $class['curriculum_id'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['curriculum_id'] ?? ''}} </div>
                        @if($libraries->isNotEmpty())
                            <x-elements.crud.sort-by field="curriculum_id" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>

                <th class="{{ $class['description'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['description'] ?? ''}} </div>
                        @if($libraries->isNotEmpty())
                            <x-elements.crud.sort-by field="description" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['observations'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['observations'] ?? ''}} </div>
                        @if($libraries->isNotEmpty())
                            <x-elements.crud.sort-by field="observations" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['color'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['color'] ?? ''}} </div>
                        @if($libraries->isNotEmpty())
                            <x-elements.crud.sort-by field="color" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>

                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($libraries as $library)

            @php
                $curriculum = $library->curriculum;
                $level = $library->level;
            @endphp

            {{-- 'user_id','curriculum_id','description','observations','color','header','body','footer','attachment','status', --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($library->id == $library_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['curriculum_id'] ?? ''}}">
                    {{$curriculum->name ?? ''}}
                    <div class="flex justify-end text-gray-400 text-sm">{{$level->name ?? ''}}</div>
                </td>
                <td class="{{ $class['description'] ?? ''}}">
                    <div>{{ Str::limit($library->description,40) ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$description->name ?? ''}}</div>
                </td>

                <td class="{{ $class['observations'] ?? ''}}">{{$library->description ?? ''}}</td>

                <td class="{{ $class['color'] ?? ''}}">
                    <div class="h-10 w-10 rounded" style="background-color: {{$library->color ?? ''}}"> </div>
                </td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="library-edit-{{$library->id}}" wire:click="edit({{ $library->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del :disabled="!$library->status_delete" wire:key="library-delete-{{$library->id}}" wire:click="delete({{ $library->id }})" >
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

    {{ $libraries->links() }}

</div>
