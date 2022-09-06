<div class="py-4 font-semibold">
    Paso {{$step ?? null}}
    <div class="w-full bg-gray-200 h-5 mb-4">
        <div class="bg-blue-600 h-5 text-white font-semibold text-center " style="width: {{ $porcentage ?? null }}%"> {{ $porcentage ?? null }}% </div>
    </div>
</div>

<x-jet-validation-errors class="mb-4" /> 

<div> @if (session()->has('message')) <div class=" text-center bg-green-100 rounded-lg py-5 px-6 mb-4 text-base text-green-700 mb-3" role="alert"> {{ session('message') }} </div> @endif  </div>


{{-- <div class="mb-4">
    <x-jet-label for="citype_id" value="{{ __($comment_enrollment['citype_id']) }}" />
    <x-date-picker name="lastname" class="block mt-1 w-full @error('lastname') is-invalid @else is-valid @enderror" />
    @error('citype_id') <span class="text-sm text-red-600">{{ $message }}</span> @enderror
</div>
 --}}