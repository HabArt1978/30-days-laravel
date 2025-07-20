<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <ul>
        @foreach ($jobs as $job)
            <li class='mt-2 text-xl'>
                <a href="/jobs/{{ $job['id'] }}"
                   class='text-blue-800 hover:text-blue-600 hover:underline transition-all duration-300'>
                    <strong>{{ mb_ucfirst($job['title']) }}:</strong> Pays {{ $job['salary'] }} per
                    year.
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
