@props(['active' => false])

<a {{ $attributes->merge(
    $active
        ? ['class' => 'bg-gray-700 text-orange-400 rounded-md px-3 py-2 text-sm font-medium']
        : [
            'class' =>
                'text-gray-300 hover:text-orange-400 rounded-md px-3 py-2 text-sm font-medium',
        ],
) }}
   aria-current="{{ request()->is('/') ? 'page' : 'false' }}">
    {{ $slot }}
</a>
