{{-- 'ti_teacher_id','ci_profesor','lastname','name','gender','date_birth','city_birth','dir_address','phone','cellphone','email','status', --}}
@php
    $class['iteration']="text-left px-4";
    $class['name']="text-left px-4";
    $class['ci_profesor']="text-left px-4";
    $class['email']="text-left px-4";
    $class['phone']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'teacher.'.$name; @endphp
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
        {{-- 'ti_teacher_id','ci_profesor','lastname','name','gender','date_birth','city_birth','dir_address','phone','cellphone','email','status', --}}
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">N</div>
                </th>
                <th class="{{ $class['name'] ?? ''}}">
                        <div class="flex justify-between">
                            <div> {{$list_comment['name'] ?? ''}} </div>
                            @if($teachers->isNotEmpty())
                                <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                            @endif
                        </div>
                    </th>
                <th class="{{ $class['ci_profesor'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['ci_profesor'] ?? ''}} </div>
                        @if($teachers->isNotEmpty())
                            <x-elements.crud.sort-by field="ci_profesor" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['email'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['email'] ?? ''}} </div>
                        @if($teachers->isNotEmpty())
                            <x-elements.crud.sort-by field="email" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['phone'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['phone'] ?? ''}} </div>
                        @if($teachers->isNotEmpty())
                            <x-elements.crud.sort-by field="phone" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($teachers as $teacher)

            @php 
                $ti_teacher = $teacher->ti_teacher;
            @endphp

            {{-- 'name','ci_profesor','email'--}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($teacher->id == $teacher_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['ci_profesor'] ?? ''}}">
                    <div>{{$teacher->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$ti_teacher->name ?? ''}}</div>
                </td>
                <td class="{{ $class['ci_profesor'] ?? ''}}">{{$teacher->ci_profesor ?? ''}}</td>
                
                
                <td class="{{ $class['email'] ?? ''}}">{{$teacher->email ?? ''}}</td>
                <td class="{{ $class['phone'] ?? ''}}">{{$teacher->phone ?? ''}}</td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="teacher-edit-{{$teacher->id}}" wire:click="edit({{ $teacher->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del wire:key="teacher-delete-{{$teacher->id}}" wire:click="delete({{ $teacher->id }})" >
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

    {{ $teachers->links() }}

</div>
