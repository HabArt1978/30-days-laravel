<x-layout>
    <x-slot:heading>
        Jobs Listings
    </x-slot:heading>

    <div class="pb-6">
        {{ $jobs->links() }}
    </div>

    <div class='flex-1'>
        <div class='grid grid-cols-3 gap-4'>
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
    </div>
</x-layout>
