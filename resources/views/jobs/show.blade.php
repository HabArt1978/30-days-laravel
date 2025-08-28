<x-layout>
    <x-slot:pageHeading>
        Vacancy : {{ mb_ucfirst($job['title']) }}
    </x-slot:pageHeading>

    <div class='tracking-wider'>
        <h2 class='font-bold text-xl text-gray-300'>{{ mb_ucfirst($job->title) }}</h2>

        <p class='text-lg font-medium text-gray-400'>
            This job pays <span class='text-gray-300'>${{ $job->salary }}</span> per year.
        </p>
    </div>



    <div class='w-full border border-b-2 border-gray-900 mt-6'></div>

    <div class='flex justify-between'>
        <div
             class='uppercase font-medium text-gray-300 w-fit border-2 border-green-800 mt-6 rounded-lg px-4 py-1 hover:bg-green-800 hover:text-white transition-colors duration-150'>
            <a href="/jobs/{{ $job->id }}/edit">edit job</a>

        </div>

        <div
             class='uppercase font-medium text-gray-300 w-fit border-2 border-blue-800 mt-6 rounded-lg px-4 py-1 hover:bg-blue-800 hover:text-white transition-colors duration-150'>
            <a href="/jobs">go back to jobs</a>
        </div>
    </div>


</x-layout>
