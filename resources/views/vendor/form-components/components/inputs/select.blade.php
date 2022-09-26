<div class="form-text-container {{ $maxWidth }}">
    @include('form-components::partials.leading-addons')

    <select name="{{ $name }}"
        {!! $attributes->merge(['class' => 'my-1 bg-white border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm dark:text-gray-100 dark:bg-gray-800 dark:border-gray-700']) !!}
            @if ($id) id="{{ $id }}" @endif
            @if ($multiple) multiple @endif

            @if ($hasErrorsAndShow($name))
                aria-invalid="true"

                @if (! $attributes->offsetExists('aria-describedby'))
                    aria-describedby="{{ $id }}-error"
                @endif
            @endif

            {{ $attributes->merge(['class' => $inputClass()]) }}

            {{ $required ?? null}}
            {{-- @if ($required) id="{{ $id }}" @endif --}}
    >
        {{ $slot }}

        <option value>Seleccione</option>
        @foreach ($options as $key => $label)
            <option value="{{ $key }}" @if ($isSelected($key)) selected @endif>
                {{ $label }}
            </option>
        @endforeach

        {{ $append ?? '' }}
    </select>

    @include('form-components::partials.trailing-addons')
</div>
