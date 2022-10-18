{{-- 'name','email','email_verified_at','password','current_team_id','profile_photo_path','status','last_login_at','last_loginout_at','last_login_ip','work_id','card_id','biometric_id' --}}
@php
    $class['iteration']="text-left px-4";
    $class['name']="text-left px-4";
    $class['role']="text-left px-4";
    $class['email']="text-left px-4";
    $class['phone']="text-left px-4";
    $class['action']="text-left px-4";
    $table_id = 'table_id';
@endphp


<div class="overflow-x-auto relative shadow-md sm:rounded-lg">

    <div class="mb-4 flex justify-between">
        <div class="w-3/4">
            @php $name = 'search'; $model = 'user.'.$name; @endphp
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
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">

            <tr class="text-center">
                <th class="{{ $class['iteration'] ?? ''}}">
                    <div class="flex  justify-between">N</div>
                </th>
                <th class="{{ $class['name'] ?? ''}}">
                        <div class="flex justify-between">
                            <div> {{$list_comment['name'] ?? ''}} </div>
                            @if($users->isNotEmpty())
                                <x-elements.crud.sort-by field="name" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                            @endif
                        </div>
                    </th>
                <th class="{{ $class['role'] ?? ''}}">
                    <div class="flex justify-between">
                        <div> {{$list_comment['role'] ?? ''}} </div>
                        @if($users->isNotEmpty())
                            <x-elements.crud.sort-by field="role" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['email'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['email'] ?? ''}} </div>
                        @if($users->isNotEmpty())
                            <x-elements.crud.sort-by field="email" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['phone'] ?? ''}}">
                    <div class="flex  justify-between">
                        <div> {{$list_comment['phone'] ?? ''}} </div>
                        @if($users->isNotEmpty())
                            <x-elements.crud.sort-by field="phone" :sortBy="$sortBy" :sortDirection="$sortDirection" />
                        @endif
                    </div>
                </th>
                <th class="{{ $class['action'] ?? ''}}">Acciones</th>
            </tr>

        </thead>

        <tbody id="tdatos">
        @forelse($users as $user)

            @php 
                //$ti_user = $user->ti_user;
            @endphp

            {{-- 'name','role','email'--}}

            <tr class="bg-white border-b dark:bg-gray-900 dark:border-gray-700 {{($user->id == $user_id) ? 'bg-gray-200' : null}}">
                <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
                <td class="{{ $class['role'] ?? ''}}">
                    <div>{{$user->name ?? ''}}</div>
                    <div class="flex justify-end text-gray-400 text-sm">{{$ti_user->name ?? ''}}</div>
                </td>
                <td class="{{ $class['role'] ?? ''}}">{{$user->role ?? ''}}</td>
                
                
                <td class="{{ $class['email'] ?? ''}}">{{$user->email ?? ''}}</td>
                <td class="{{ $class['phone'] ?? ''}}">{{$user->phone ?? ''}}</td>

                <td class="{{ $class['action'] ?? '' }}">

                    <div class="flex items-center justify-center justify-between mb-3 shadow">
                        <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
                            <x-elements.form.button-edit wire:key="user-edit-{{$user->id}}" wire:click="edit({{ $user->id }})" >
                                <x-icon-pen class="w-4 h-4 mr-0.5" />
                            </x-elements.form.button-edit>
                            <x-elements.form.button-del wire:key="user-delete-{{$user->id}}" wire:click="delete({{ $user->id }})" >
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

    {{ $users->links() }}

</div>
