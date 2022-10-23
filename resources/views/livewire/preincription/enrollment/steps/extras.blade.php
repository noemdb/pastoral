<div wire:key="patologies">
{{--

extracathedra
institution
academic_level
academic_section

--}}

    <div class="animate__animated animate__fadeIn" >

        <div class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            Datos académicos.
        </div>       

        <div class="mb-4">
            <x-jet-label for="institution" value="{{ __($comment_enrollment['institution']) }}" />
            <x-input wire:model.lazy="institution" name="patology" id="institution" class="block mt-1 w-full " />
            @error('institution') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="academic_level" value="{{ __($comment_enrollment['academic_level']) }}" class="inline" />
            <x-select wire:model="academic_level" name="academic_level" :options="$academic_level_list" class=" w-full " />
            @error('academic_level') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>        

        <div class="mb-4">
            <x-jet-label for="academic_section" value="{{ __($comment_enrollment['academic_section']) }}" class="inline" />
            <x-select wire:model="academic_section" name="academic_section" :options="$academic_section_list" class=" w-full " />
            @error('academic_section') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>  
        
        <div class="mb-4">
            <x-jet-label for="extracathedra" value="{{ __($comment_enrollment['extracathedra']) }}" />
            <x-input wire:model.lazy="extracathedra" name="patology" id="extracathedra" class="block mt-1 w-full " />
            @error('extracathedra') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="font-semibold text-xl text-gray-800 leading-tight dark:text-gray-100">
            Condición Médica
        </div>

        <div class="mb-4">
            <x-jet-label for="patology" value="{{ __($comment_enrollment['patology']) }}" />
            <x-input wire:model.lazy="patology" name="patology" id="patology" class="block mt-1 w-full " />
            @error('patology') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

        <div class="mb-4">
            <x-jet-label for="status_patology" value="{{ __($comment_enrollment['status_patology']) }}" class="inline" />
            <x-select wire:model="status_patology" name="status_patology" :options="[1=>'SI',0=>'NO']" class=" w-full " />
            @error('status_patology') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>

    </div>

</div>
