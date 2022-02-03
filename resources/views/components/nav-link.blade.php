@props(['active'])

@php
$classes = ($active ?? false)
            ? 'btn btn-customized active'
            : 'btn btn-customized-2';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
