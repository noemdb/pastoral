<div class="form-text-container {{ $maxWidth }}">
    @include('form-components::partials.leading-addons')

    <input
        {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) }}

        name="{{ $name }}"
        @if ($id) id="{{ $id }}" @endif
        type="{{ $type }}"

        @if ($value && ! $attributes->whereStartsWith('wire:model')->first()) value="{{ $value }}" @endif

        @if ($hasErrorsAndShow($name))
            aria-invalid="true"

            @if (! $attributes->offsetExists('aria-describedby'))
                aria-describedby="{{ $id }}-error"
            @endif
        @endif
    />

    @include('form-components::partials.trailing-addons')
</div>
