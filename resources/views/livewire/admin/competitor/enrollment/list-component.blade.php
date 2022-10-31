<div>

        <div class="flex justify-between pt-2">
    
            <div class="text-right mb-4 ml-4 text-lg leading-7 font-semibold dark:text-gray-100">
                <div class="flex justify-start pt-2">
                    <x-icon-clipboard-user class="w-6 h-6 mr-0.5" />
                    <div class="mr-2">Preinscripciones registradas</div>                
                </div>            
            </div>
    
            {{-- <div>       
                <div wire:loading class="text-gray-400 text-sm"> Cargando... </div>
                <x-jet-button type="button" class="mx-1 bg-blue-900 shadow w-8 h-8 !p-0 flex justify-center items-center shadow" wire:click="create">
                    <x-icon-plus class="w-4 h-4" />
                </x-jet-button>    
            </div> --}}
    
        </div>
    
        @if ($modeEdit)
    
            <div class="mb-4 pb-4"> 
                {{-- @include('livewire.admin.institution.course.form.edit') --}}
            </div>
    
        @endif
        
    
        @if ($modeCreate)
    
            <div class="mb-4 pb-4">
                {{-- @include('livewire.admin.institution.course.form.create') --}}
            </div>
    
        @endif

        @if ($modeIncriptions)
    
            <div class="mb-4 pb-4">
                @include('livewire.admin.competitor.enrollment.form.inscriptions.create')...
                {{-- /home/nuser/code/pastoral/resources/views/livewire/admin/competitor/enrollment/form/inscriptions/create.blade.php --}}
            </div>
    
        @endif
    
    
    
        <div class="mx-4 px-4">
            @include('livewire.admin.competitor.enrollment.table.index')
            {{-- //views/livewire/admin/competitor/enrollment/table/index.blade.php --}}
        </div>
    
    
    </div>
