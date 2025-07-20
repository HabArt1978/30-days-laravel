<x-layout>
    <x-slot:heading>
        {{ mb_ucfirst($job['title']) }} vacancy
    </x-slot:heading>

    <h2 class='font-bold text-xl'>{{ mb_ucfirst($job['title']) }}</h2>

    <p class='text-lg font-medium text-gray-600'>
        This job pays {{ $job['salary'] }} per year.
    </p>

    <div class='w-full border border-b-2 border-gray-700 mt-6'></div>

    <div
         class='inline-block uppercase font-medium text-blue-700 max-w-2xl border-2 border-blue-700 mt-6 rounded-lg px-4 py-1 hover:bg-blue-700 hover:text-white transition-colors duration-150'>
        <a href="/jobs">go back to jobs</a>
    </div>
</x-layout>
