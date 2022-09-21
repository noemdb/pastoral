@php
    $class['iteration']="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50";
    $class['name']="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50";
    $class['legalname']="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50";
    $class['description']="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50";
    $class['assit_schedule']="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50";
    $class['action']="px-6 py-3 text-left text-gray-500 border-b border-gray-200 bg-gray-50";
    $table_id = 'table_id';
@endphp

<table class="min-w-full border-b border-gray-200 shadow">
    <thead>
        <tr class="text-center">
            <th class="{{ $class['iteration'] ?? ''}}">N</th>
            <th class="{{ $class['name'] ?? ''}}">{{$list_comment_pastoral['name'] ?? ''}}</th>
            <th class="{{ $class['legalname'] ?? ''}}">{{$list_comment_pastoral['legalname'] ?? ''}}</th>
            <th class="{{ $class['description'] ?? ''}}">{{$list_comment_pastoral['description'] ?? ''}}</th>
            <th class="{{ $class['action'] ?? ''}}">Acciones</th>
        </tr>
    </thead>

    <tbody id="tdatos">
    @foreach($pastorals as $pastoral)

        {{-- 'name', 'legalname', 'code', 'code_official', 'code_private', 'description', 'observations', 'header', 'body', 'footer', 'rif_institution', 'phone', 'address', 'city', 'state_code', 'country', 'email_institution', 'password', 'txt_contract_study' --}}

        <tr data-id="{{$pastoral->id}}" class="{{($pastoral->id == $pastoral_id) ? 'table-secondary' : null}}">
            <td class="{{ $class['iteration'] ?? ''}}">{{$loop->iteration}}</td>
            <td class="{{ $class['fullname'] ?? ''}}">{{$pastoral->name ?? ''}}</td>
            <td class="{{ $class['legalname'] ?? ''}}">{{$pastoral->legalname ?? ''}}</td>
            <td class="{{ $class['number_id'] ?? ''}}">{{$pastoral->description ?? ''}}</td>

            <td class="{{ $class_action ?? '' }}">

{{--                 <x-jet-button class="ml-4" wire:click="edit({{$pastoral->id}})">
                    {{ __('Editar') }}
                </x-jet-button> --}}

                {{-- <button wire:click="edit({{ $pastoral->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Editar</button> --}}

                {{-- <button wire:click="delete({{ $pastoral->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Eliminar</button> --}}


<div class="flex items-center justify-center mb-3">
  <div class="inline-flex shadow-md hover:shadow-lg focus:shadow-lg" role="group">
    <button type="button" wire:click="edit({{ $pastoral->id }})" class="rounded-l inline-block px-2 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out">Editar</button>
    <button type="button" wire:click="delete({{ $pastoral->id }})" class="rounded-r inline-block px-2 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-0 active:bg-red-800 transition duration-150 ease-in-out">Eliminar</button>
  </div>
</div>

            </td>
        </tr>
    @endforeach

    </tbody>

</table>