@props(['active'])

@php
$essentialClasses = 'inline-flex py-3 px-4 items-center text-text-medium font-secondary font-semibold leading-5 transition duration-150 ease-in-out hover:text-[#7B5AFF]';

$stateClasses = ($active ?? false)
            ? 'text-primary-500'
            : $essentialClasses;

$classes = $essentialClasses . ' ' . $stateClasses;
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
