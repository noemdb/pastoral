{{-- 'teacher_id','pensum_id','lapse_id','section_id','objetivo','description','observations','color','header','body','footer','attachment','status', --}}
@php
    $class['iteration']="text-left px-4";
    $class['pensum_id']="text-left px-4";
    $class['ci_profesor']="text-left px-4";
    $class['description']="text-left px-4";
    $class['section_id']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'pevaluation.'.$name; @endphp
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
        {{-- 'teacher_id','pensum_id','lapse_id','section_id','objetivo','description','observations','color','header','body','footer','attachment','status', --}}
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">N</div>
                </th>
                <th class="{{ $class['pensum_id'] ?? ''}}">
                        <div class="flex justify-between">
                            <div> {{$list_comment['pensum_id'] ?? ''}} </div>
                            @if($pevaluations->isNotEmpty())
                                <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                            @endif
                        </div>
                    </th>
                <th class="{{ $class['ci_profesor'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['ci_profesor'] ?? ''}} </div>
                        @if($pevaluations->isNotEmpty())
                            <x-elements.crud.sort-by field="ci_profesor" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['description'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['description'] ?? ''}} </div>
                        @if($pevaluations->isNotEmpty())
                            <x-elements.crud.sort-by field="description" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($pevaluations as $pevaluation)

            @php 
                $teacher = $pevaluation->teacher;
                $pensum = $pevaluation->pensum;
                $lapse = $pevaluation->lapse;
                $section = $pevaluation->section;
            @endphp

            {{-- 'teacher_id','pensum_id','lapse_id','section_id','objetivo','description','observations','color','header','body','footer','attachment','status', --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($pevaluation->id == $teacher_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['ci_profesor'] ?? ''}}">
                    <div>{{$teacher->fullname ?? ''}}</div>
                    {{-- <div class="flex justify-end text-gray-400 text-sm">{{$ti_teacher->name ?? ''}}</div> --}}
                </td>
                <td class="{{ $class['pensum_id'] ?? ''}}">
                    {{$pensum->fullname ?? ''}}
                    <div class="flex justify-end text-gray-400 text-sm">{{$lapse->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$section->name ?? ''}}</div>
                </td>
                
                
                <td class="{{ $class['description'] ?? ''}}">{{$pevaluation->description ?? ''}}</td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="pevaluation-edit-{{$pevaluation->id}}" wire:click="edit({{ $pevaluation->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del wire:key="pevaluation-delete-{{$pevaluation->id}}" wire:click="delete({{ $pevaluation->id }})" >
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

    {{ $pevaluations->links() }}

</div>
