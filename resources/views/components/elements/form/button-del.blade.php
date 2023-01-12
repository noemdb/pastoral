<button {{ $attributes->merge(['class' => 'rounded-r inline-block px-2 py-2.5 bg-red-600 text-white font-medium text-xs leading-tight uppercase hover:bg-red-700 focus:bg-red-700 focus:outline-none focus:ring-0 active:bg-red-800 transition duration-150 ease-in-out disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
