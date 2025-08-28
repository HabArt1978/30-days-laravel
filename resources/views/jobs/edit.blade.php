<x-layout>
    <x-slot:pageHeading>
        {{ mb_ucfirst('edit job :') }} {{ $job->title }}
    </x-slot:pageHeading>

    <form id='delete_form'
          method='POST'
          action="/jobs/{{ $job->id }}"
          class='hidden'>
        @csrf
        @method('DELETE')
    </form>

    <form method='POST' action="/jobs/{{ $job->id }}">
        {{-- Cross-Site Request Forgery --}}
        @csrf
        @method('PATCH')

        <div class="space-y-12">
            <div class="border-b border-white/10 pb-12">
                <h2 class="text-base/7 font-semibold text-white tracking-wider">
                    Edit selected job
                </h2>
                <p class="mt-1 text-sm/6 text-gray-400">
                    Here you can edit a previously created job.
                </p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-4">
                        <label for="title"
                               class="block text-sm/6 font-medium text-white tracking-wider">Title</label>
                        <div class="mt-2">
                            <div
                                 class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">

                                <input id="title"
                                       type="text"
                                       name="title"
                                       placeholder="Add job title"
                                       class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                                       value="{{ $job->title }}"
                                       required />

                            </div>
                        </div>

                        @error('title')
                            <span class='text-xs text-red-400 tracking-wider'>{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="sm:col-span-4">
                        <label for="salary"
                               class="block text-sm/6 font-medium text-white tracking-wider">Salary</label>
                        <div class="mt-2">
                            <div
                                 class="flex items-center rounded-md bg-white/5 pl-3 outline-1 -outline-offset-1 outline-white/10 focus-within:outline-2 focus-within:-outline-offset-2 focus-within:outline-indigo-500">

                                <input id="salary"
                                       type="text"
                                       name="salary"
                                       placeholder="50000"
                                       class="block min-w-0 grow bg-transparent py-1.5 pr-3 pl-1 text-base text-white placeholder:text-gray-500 focus:outline-none sm:text-sm/6"
                                       value="{{ $job->salary }}"
                                       required />
                            </div>
                        </div>
                    </div>
                </div>

                @error('salary')
                    <span class='text-xs text-red-400 tracking-wider'>{{ $message }}</span>
                @enderror
            </div>

            <div class='flex justify-between'>
                <div class="mt-6 flex items-center gap-x-6">
                    <button type="submit"
                            class="rounded-md px-3 py-2 bg-green-600 text-sm font-semibold text-white outline-0 hover:outline-1 hover:outline-white tracking-wider uppercase">update</button>
                    <a href='/jobs/{{ $job->id }}'
                       class="rounded-md px-3 py-2 bg-red-400 text-sm font-semibold text-white outline-0 hover:outline-1 hover:outline-white tracking-wider uppercase">cancel</a>
                </div>

                <div class="mt-6 flex items-center gap-x-6">
                    <button type="submit"
                            form='delete_form'
                            class="rounded-md px-3 py-2 bg-red-600 text-sm font-semibold text-white outline-0 hover:outline-1 hover:outline-white tracking-wider uppercase">delete</button>
                </div>
            </div>
        </div>
    </form>
</x-layout>
