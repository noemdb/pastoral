@if ($errors->any())
    <div {{ $attributes->merge(['class' => 'bg-red-50 mt-6 px-6 py-4 font-medium text-gray-900 rounded-lg border border-gray-200 dark:bg-gray-700 dark:border-gray-600 dark:text-white']) }}>
        <div class="font-medium text-red-600 font-semibold">{{ __('Upsss! Algunas cosas estan mal.') }} {{$errors->count() ?? null}} errores encontrados.</div>

        <ul class="mt-3 list-disc list-inside text-sm text-red-600">
            @foreach ($errors->all() as $error)
                <li class="py-2 px-4 w-full rounded-t-lg border-b border-gray-200 dark:border-gray-600">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
