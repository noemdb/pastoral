@php
    $class['iteration']="d-none d-sm-table-cell";
    $class['name']="d-none d-sm-table-cell";
    $class['legalname']="d-none d-sm-table-cell";
    $class['description']="d-none d-md-table-cell";
    $class['assit_schedule']="d-none d-md-table-cell";
    $class['action']="d-none d-sm-table-cell";
    $table_id = 'table_id';
@endphp

<table width="100%" class="table table-striped table-hover table-sm small p-1" id="{{$table_id}}">
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

                <x-jet-button class="ml-4" wire:click="edit({{$pastoral->id}})">
                    {{ __('Editar') }}
                </x-jet-button>

            </td>
        </tr>
    @endforeach

    </tbody>

</table>