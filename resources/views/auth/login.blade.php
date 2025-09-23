<x-layout>
    <x-slot:pageHeading>
        <span class='w-2/3 text-center mx-auto'>Log-in</span>
    </x-slot:pageHeading>

    <form method='POST'
          action="/login"
          class='w-2/3 mx-auto'>
        {{-- Cross-Site Request Forgery --}}
        @csrf

        <div class="space-y-6">
            <div class="border-b border-white/10 pb-6">
                <h2 class="text-base/7 font-semibold text-white tracking-wider">
                    Login to the system
                </h2>
                <p class="mt-1 text-sm/6 text-gray-400">
                    Enter data in the fields corresponding to the authentication rules.
                </p>

                <x-form.field-container>
                    <x-form.field>
                        <x-form.label for="email">
                            Email
                        </x-form.label>

                        <x-form.input id="email"
                                      type="email"
                                      name="email"
                                      placeholder="example@mail.com"
                                      :value="old('email')"
                                      required />

                        <x-form.error name="email" />
                    </x-form.field>

                    <x-form.field>
                        <x-form.label for="password">
                            Password
                        </x-form.label>

                        <x-form.input id="password"
                                      type="password"
                                      name="password"
                                      placeholder="********"
                                      required />

                        <x-form.error name="password" />
                    </x-form.field>
                </x-form.field-container>
            </div>

            <div class='flex justify-between'>
                <div class="mt-6 flex items-center gap-x-6">
                    <x-form.button>login</x-form.button>
                    <a href='/jobs'
                       class="rounded-md px-3 py-2 bg-red-400 text-sm font-semibold text-white outline-0 hover:outline-1 hover:outline-white tracking-wider uppercase">cancel</a>
                </div>
            </div>
        </div>
    </form>
</x-layout>
