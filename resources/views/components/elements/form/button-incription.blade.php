<button {{ $attributes->merge(['class' => 'rounded inline-block px-2 py-2.5 bg-green-500 text-white font-medium text-xs leading-tight uppercase hover:bg-green-700 focus:bg-green-700 focus:outline-none focus:ring-0 active:bg-green-800 transition duration-150 ease-in-out']) }}>
    {{ $slot }}
</button>