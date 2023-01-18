<button {{ $attributes->merge(['class' => 'rounded-l inline-block px-2 py-2.5 bg-blue-500 text-white font-medium text-xs leading-tight uppercase hover:bg-blue-700 focus:bg-blue-700 focus:outline-none focus:ring-0 active:bg-blue-800 transition duration-150 ease-in-out disabled:opacity-25']) }}>
    {{ $slot }}
</button>
