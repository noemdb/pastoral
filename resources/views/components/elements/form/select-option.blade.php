@props([
    // 'options' => ['al' => 'Alabama', 'wi' => 'Wisconsin'],
    // 'options' => [],
    'selectedoptions' => []
])

{{-- {{$options ?? null}} --}}
<select {{ $attributes->merge(['class' => 'border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm']) }}>
    <option>Seleccione</option>
    @foreach($options as $value => $label)
        <option value="{{ $value }}" isSelected($value)>{{ $label }}</option>
        {{-- <option {{ $isSelected($value) ? 'selected="selected"' : '' }} value="{{ $value }}"> --}}
        {{-- <option value="{{ $value }}"> --}}
            {{-- {{ $label }} --}}
        {{-- </option> --}}
    @endforeach
</select>
