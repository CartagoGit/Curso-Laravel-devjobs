{{-- @if (Route::has($route)) --}}
@php
    $classes = 'text-xs rounded-md text-sm text-gray-500 hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:text-gray-300 dark:hover:text-gray-100 dark:focus:ring-offset-gray-800';
@endphp

<a {{ $attributes->merge(['class' => $classes, 'href' => route( $route)]) }} ">
    {{ $slot }}
</a>
{{-- @endif --}}
