<x-app-layout>

    @if (Session::has('sessionMessege'))
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 shadow" role="alert">
                <p class="font-bold">{{Session::get('sessionMessege')}}</p>
                <p>Fuiste redirigido.</p>
            </div>
        </div>
    @endif

    <div class="py-2">
        <div class="max-w-7xl {{-- p-1 --}} mx-auto sm:px-6 lg:px-8 border-gray-900">
            <div class="bg-white {{-- p-1 --}} {{-- overflow-hidden shadow-xl --}} sm:rounded-lg">
                <x-jet-welcome />
            </div>
        </div>
    </div>
    
</x-app-layout>
