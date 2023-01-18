{{-- 'pastoral_id'lastname','name','curriculum_id', 'phone'--}}
@php
    $class['iteration']="text-left px-4";
    $class['pastoral_id']="text-left px-4";
    $class['curriculum_id']="text-left px-4";
    $class['name']="text-left px-4";
    $class['lastname']="text-left px-4";
    $class['phone']="hidden lg:table-cell text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'enrollment.'.$name; @endphp
            <div class="flex justify-start">
                <x-jet-label for="{{$name}}" value="Buscar:" />
                <span class="text-gray-400 mx-2 font-medium">nombre, descripción</span>
            </div>
            <x-input wire:model.debounce.500ms="{{$name}}" name="{{$name}}" class="block w-full" />
        </div>
        <div class="w-1/5">
            <x-jet-label for="paginate" value="Registros" />
            <x-select  wire:model="paginate" name="paginate" class="w-full" :options="$paginate_list" />
        </div>
    </div>

    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        {{-- 'pastoral_id','curriculum_id',lastname','name', 'phone'--}}
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">N</div>
                </th>
                <th class="{{ $class['curriculum_id'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['curriculum_id'] ?? ''}} </div>
                        @if($enrollments->isNotEmpty())
                            <x-elements.crud.sort-by field="curriculum_id" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['name'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['name'] ?? ''}} </div>
                        @if($enrollments->isNotEmpty())
                            <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['lastname'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['lastname'] ?? ''}} </div>
                        @if($enrollments->isNotEmpty())
                            <x-elements.crud.sort-by field="lastname" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['phone'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['phone'] ?? ''}} </div>
                        @if($enrollments->isNotEmpty())
                            <x-elements.crud.sort-by field="phone" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($enrollments as $enrollment)

            @php
                $curriculum = $enrollment->curriculum;
                $pescolar = ($curriculum ) ? $curriculum->pescolar:null;
                $pastoral = $enrollment->pastoral;
            @endphp

            {{-- 'pastoral_id','curriculum_id',lastname','name', 'phone'--}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($enrollment->id == $enrollment_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['curriculum_id'] ?? ''}}">
                    <div>{{$curriculum->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$pescolar->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$pastoral->name ?? ''}}</div>
                </td>
                <td class="{{ $class['lastname'] ?? ''}}">{{$enrollment->lastname ?? ''}}</td>
                <td class="{{ $class['name'] ?? ''}}">{{$enrollment->name ?? ''}}</td>
                <td class="{{ $class['phone'] ?? ''}}">{{$enrollment->phone ?? ''}}</td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center mb-3 shadow">
                        <x-elements.form.button-incription :disabled="!$enrollment->status_inscription" class="mr-2" wire:key="enrollment-incription-{{$enrollment->id}}" wire:click="inscription({{ $enrollment->id }})" >
                            <x-icon-list class="w-4 h-4 mr-0.5" />
                        </x-elements.form.button-incription>
                        <div class="inline-flex hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit :disabled="!$enrollment->status_edit" wire:key="enrollment-edit-{{$enrollment->id}}" wire:click="edit({{ $enrollment->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del :disabled="!$enrollment->status_delete" wire:key="enrollment-delete-{{$enrollment->id}}" wire:click="delete({{ $enrollment->id }})" >
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

    {{ $enrollments->links() }}

</div>
