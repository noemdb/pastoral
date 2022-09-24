@props([
    'field' => [],
    'sortBy' => [],
    'sortDirection' => []
])

<div>
    

@if ($sortBy == $field)
    @if($sortDirection=="asc") <x-icon-sort-amount-down wire:click="getSortBy('{{$sortBy}}','asc')" wire:key="btn-sort-{{Str::random(40)}}" class="cursor-pointer w-4 h-4 text-gray-600 dark:text-gray-200" /> @endif
    @if($sortDirection=="desc") <x-icon-sort-amount-up wire:click="getSortBy('{{$sortBy}}','desc')" wire:key="btn-sort-{{Str::random(40)}}" class="cursor-pointer w-4 h-4 text-gray-600 dark:text-gray-200" /> @endif                                
@else
    <x-icon-sort-alt wire:click="getSortBy('{{$field}}','asc')" wire:key="btn-sort-{{Str::random(40)}}" class="cursor-pointer w-4 h-4 text-gray-600 dark:text-gray-200" />
@endif

</div>