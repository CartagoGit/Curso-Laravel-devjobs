{{-- @if (Route::has($route)) --}}
@php
    $classes = 'rounded-md text-sm text-gray-600 underline hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-400 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }} ">
    {{ $slot }}
</a>
{{-- @endif --}}
