{{-- @props(['error','porcentage']) --}}

{{-- <div {{ $attributes->merge(['class' => 'w-full bg-gray-200 h-5 mb-4 rounded-md  dark:bg-gray-900 dark:border-gray-700']) }}>
    <div class="h-5 text-white font-semibold text-center rounded-sm {{ ( $error ) ? ' bg-red-600 ' : ' bg-blue-900 ' }}" style="width: {{ $porcentage ?? null }}%"> {{ $porcentage ?? null }}% </div>
</div> --}}


<div class="w-full bg-gray-200 h-5 mb-4 rounded-md  dark:bg-gray-900 dark:border-gray-700">
    <div class="h-5 text-white font-semibold text-center rounded-sm {{ ( $error ) ? ' bg-red-600 ' : ' bg-blue-900 ' }}" style="width: {{ $porcentage ?? null }}%"> {{ $porcentage ?? null }}% </div>
</div>