<div class="font-semibold text-xl text-gray-800 leading-tight">
    Institución
</div>

<hr class=" my-1">

<div clas>
    {{-- {{ $pastorals_list ?? null}} --}}
    <x-jet-label for="pastoral_id" value="{{ __($comment_enrollment['pastoral_id']) }}" />

    {{-- <x-select name="pastoral_id" /> --}}
    <x-select name="pastoral_id" id="pastoral_id" :options="$pastorals_list" class=" w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />


    {{-- <x-jet-input id="name" class="block mt-1 w-full" type="name" name="name" :value="old('name')" required autofocus /> --}}
    {{-- <x-elements.form.select-option name="pastoral_id" :value="old('pastoral_id')" options="{{$options ?? []}}"/> --}}

    {{-- <x-select name="state" :options="['al' => 'Alabama', 'wi' => 'Wisconsin']" /> --}}

        {{-- <x-elements.form.select-option
            id="pastoral_id"
            name="pastoral_id"
            class="dual-listbox"
            :options="$pastorals_list"
            :selectedOptions="$selectedPastoralId"
            autofocus
        /> --}}

</div>
