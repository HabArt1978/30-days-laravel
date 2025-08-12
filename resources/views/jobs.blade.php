<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <div class='flex flex-col gap-y-4'>
        @foreach ($jobs as $job)
            <a href="/jobs/{{ $job['id'] }}"
               class='text-gray-300 text-xl block p-5 border-2 rounded-md border-gray-600 shadow-lg tracking-wider'>
                <div class='text-blue-400'>
                    {{ $job->employer->name }}
                </div>

                <div>
                    <strong>{{ mb_ucfirst($job['title']) }}:</strong> Pays
                    <span class='font-bold text-orange-400'>${{ $job['salary'] }}</span> per
                    year.
                </div>
            </a>
        @endforeach
    </div>
</x-layout>
