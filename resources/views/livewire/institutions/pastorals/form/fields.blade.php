<div wire:key="institution">
    
    <div class="animate__animated animate__fadeIn" >

        <div class="mb-4 ml-4 text-lg leading-7 font-semibold">
            Institución
        </div>
        
        {{-- <hr class=" my-1"> --}}
        
        <div class="mb-4">
            <x-jet-label for="name" value="{{ __($comment_pastoral['name']) }}" />
            <x-input wire:model="pastoral.name" name="name" class="block mt-1 w-full @error('name') is-invalid @else is-valid @enderror" />
            @error('name') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
        </div>
        

        
    </div>
</div>