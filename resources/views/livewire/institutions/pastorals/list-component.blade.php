<div>

	<div class="flex mb-4">
	  <div class="flex-1 w-1/2  px-2">  	
	  	<livewire:powergrid.institutions.pastoral-table/>
	  </div>

	  @if ($modeEdit)

	  	<div class="flex-1 w-1/2  px-2">
	  		@include('livewire.institutions.pastorals.form.fields')
			{{-- <div class="flex-1 bg-gray-500 h-12"></div> --}}
		</div>

	  @endif

	</div>
    

</div>
