@props([
    'field' => [],
    'sortBy' => [],
    'sortDirection' => []
])

<div>
    

@if ($sortBy == $field)
    @if($sortDirection=="asc") 
        <x-fas-arrow-down wire:click="getSortBy('{{$sortBy}}','asc')" class="w-4 h-4 text-gray-400" />
    @endif
    @if($sortDirection=="desc")
        <x-fas-arrow-up wire:click="getSortBy('{{$sortBy}}','desc')" class="w-4 h-4 text-gray-400" />
    @endif                                
@else
    <x-fas-arrow-up class="w-4 h-4 text-gray-400" />
@endif

</div>