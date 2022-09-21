<div class="form-text-container {{ $maxWidth }}">
    @include('form-components::partials.leading-addons')

    <textarea name="{{ $name }}"
        {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm dark:text-gray-100 dark:bg-gray-800 dark:border-gray-700']) }}
        @if ($id) id="{{ $id }}" @endif
        @if ($hasErrorsAndShow($name))
            aria-invalid="true"

            @if (! $attributes->offsetExists('aria-describedby'))
                aria-describedby="{{ $id }}-error"
            @endif
        @endif

        {!! $attributes->merge(['class' => $inputClass(), 'rows' => 3]) !!}
    >@if (($slot || $value) && ! $attributes->whereStartsWith('wire:model')->first()){!! $value ?? old($name, $slot) !!}@endif</textarea>

    @include('form-components::partials.trailing-addons')
</div>
