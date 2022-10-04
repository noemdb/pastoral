{{-- 'excercise_id','description','observations','color','header','body','attachment','footer', --}}
@php
    $class['iteration']="text-left px-4";
    $class['pevaluation_id']="text-left px-4";
    $class['description']="text-left px-4";
    $class['objetivo']="text-left px-4";
    $class['color']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'resolution.'.$name; @endphp
            <div class="flex justify-start">
                <x-jet-label for="{{$name}}" value="Buscar:" />
                <span class="text-gray-400 mx-2 font-medium">Catequista, asignatura, descripción</span>                
            </div>        
            <x-input wire:model.debounce.500ms="{{$name}}" name="{{$name}}" class="block w-full" />
        </div>
        <div class="w-1/5">
            <x-jet-label for="paginate" value="Registros" />
            <x-select  wire:model="paginate" name="paginate" class="w-full" :options="$paginate_list" />
        </div>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">

        {{-- 'excercise_id','description','observations','color','header','body','attachment','footer', --}}

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">N</div>
                </th>
                <th class="{{ $class['pevaluation_id'] ?? ''}}">
                        <div class="flex justify-between">
                            <div> {{$list_comment['pevaluation_id'] ?? ''}} </div>
                            @if($resolutions->isNotEmpty())
                                <x-elements.crud.sort-by field="pevaluation_id" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                            @endif
                        </div>
                    </th>
                <th class="{{ $class['pensum'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['pensum'] ?? ''}} </div>
                        {{-- @if($resolutions->isNotEmpty())
                            <x-elements.crud.sort-by field="objetivo" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif --}}
                    </div>
                </th>
                <th class="{{ $class['description'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['description'] ?? ''}} </div>
                        @if($resolutions->isNotEmpty())
                            <x-elements.crud.sort-by field="description" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['color'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['color'] ?? ''}} </div>
                        @if($resolutions->isNotEmpty())
                            <x-elements.crud.sort-by field="color" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($resolutions as $resolution)

            @php 
                $pevaluation = $resolution->pevaluation;
                $teacher = $pevaluation->teacher;
                $pensum = $pevaluation->pensum;
                $curriculum = $pevaluation->curriculum;
                $lapse = $pevaluation->lapse;
                $section = $pevaluation->section;
            @endphp

            {{-- 'excercise_id','description','observations','color','header','body','attachment','footer', --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($resolution->id == $resolution_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['pevaluation_id'] ?? ''}}">
                    <div>{{$teacher->fullname ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{Str::limit($pevaluation->description,40) ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$curriculum->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$lapse->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$section->name ?? ''}}</div>
                </td>
                <td class="{{ $class['pensum'] ?? ''}}">
                    {{$pensum->fullname ?? ''}}                    
                </td>
                         
                <td class="{{ $class['description'] ?? ''}}">{{$resolution->description ?? ''}}</td>

                <td class="{{ $class['color'] ?? ''}}">
                    <div class="h-10 w-10 rounded" style="background-color: {{$resolution->color ?? ''}}"> </div>
                </td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="resolution-edit-{{$resolution->id}}" wire:click="edit({{ $resolution->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del wire:key="resolution-delete-{{$resolution->id}}" wire:click="delete({{ $resolution->id }})" >
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

    {{ $resolutions->links() }}

</div>
