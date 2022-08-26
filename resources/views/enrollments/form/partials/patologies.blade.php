<div class="font-semibold text-xl text-gray-800 leading-tight">
    Condición Médica
</div>
<div>
    <x-jet-label for="patology" value="{{ __($comment_enrollment['patology']) }}" />
    <x-jet-input id="patology" class="block mt-1 w-full" type="patology" name="patology" :value="old('patology')"   />
</div>

<div>
    <x-jet-label for="status_patology" value="{{ __($comment_enrollment['status_patology']) }}" class="inline" />
    {{-- <x-jet-checkbox id="status_patology" type="status_patology" name="status_patology" :value="old('status_patology')"   /> --}}
    <x-select name="status_patology" :options="[1=>'SI',0=>'NO']" class=" w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm" />
</div>
