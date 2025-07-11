@props(['active' => false])

<?php
$classes = ['rounded-md px-3 py-2 text-sm font-medium'];
$classes[] = $active ? 'bg-gray-900 text-white' : 'text-gray-300 hover:bg-gray-700 hover:text-white';
?>

<a class="{{ join(' ', $classes) }}"
   aria-current="{{ request()->is('/') ? 'page' : 'false' }}"
   {{ $attributes }}>
    {{ $slot }}
</a>
