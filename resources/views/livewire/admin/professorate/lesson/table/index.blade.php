{{-- 'topic_id','duration','description','observations','color','header','body','attachment','footer',, --}}
@php
    $class['iteration']="text-left px-4";
    $class['topic_id']="text-left px-4";
    $class['description']="text-left px-4";
    $class['objetivo']="text-left px-4";
    $class['color']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'lesson.'.$name; @endphp
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

        {{-- 'topic_id','duration','description','observations','color','header','body','attachment','footer',, --}}

        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">N</div>
                </th>
                <th class="{{ $class['topic_id'] ?? ''}}">
                        <div class="flex justify-between">
                            <div> {{$list_comment['topic_id'] ?? ''}} </div>
                            @if($lessons->isNotEmpty())
                                <x-elements.crud.sort-by field="topic_id" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                            @endif
                        </div>
                    </th>
                <th class="{{ $class['objetivo'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['objetivo'] ?? ''}} </div>
                        @if($lessons->isNotEmpty())
                            <x-elements.crud.sort-by field="objetivo" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['description'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['description'] ?? ''}} </div>
                        @if($lessons->isNotEmpty())
                            <x-elements.crud.sort-by field="description" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['color'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['color'] ?? ''}} </div>
                        @if($lessons->isNotEmpty())
                            <x-elements.crud.sort-by field="color" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($lessons as $lesson)

            @php 
                $topic = $lesson->topic;
                $pevaluation = $topic->pevaluation;
                $teacher = $pevaluation->teacher;
                $pensum = $pevaluation->pensum;
                $curriculum = $pevaluation->curriculum;
                $lapse = $pevaluation->lapse;
                $section = $pevaluation->section;
            @endphp

            {{-- 'topic_id','duration','description','observations','color','header','body','attachment','footer',, --}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($lesson->id == $topic_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['topic_id'] ?? ''}}">
                    <div>{{$teacher->fullname ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{Str::limit($pevaluation->description,40) ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$curriculum->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$lapse->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$section->name ?? ''}}</div>
                </td>
                <td class="{{ $class['objetivo'] ?? ''}}">
                    {{$pensum->fullname ?? ''}}                    
                </td>
                         
                <td class="{{ $class['description'] ?? ''}}">{{$lesson->description ?? ''}}</td>

                <td class="{{ $class['color'] ?? ''}}">
                    <div class="h-10 w-10 rounded" style="background-color: {{$lesson->color ?? ''}}"> </div>
                </td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="lesson-edit-{{$lesson->id}}" wire:click="edit({{ $lesson->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del wire:key="lesson-delete-{{$lesson->id}}" wire:click="delete({{ $lesson->id }})" >
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

    {{ $lessons->links() }}

</div>
