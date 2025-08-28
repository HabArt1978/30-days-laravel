<x-layout>
    <x-slot:pageHeading>
        <h1 class='text-3xl font-bold tracking-wide text-gray-200'>Jobs Listings</h1>

        <a href='/jobs/create'
           class="rounded-md px-3 py-2 bg-blue-400 text-sm font-semibold text-white outline-0 hover:outline-1 hover:outline-white tracking-wider uppercase">
            create job
        </a>
    </x-slot:pageHeading>

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
