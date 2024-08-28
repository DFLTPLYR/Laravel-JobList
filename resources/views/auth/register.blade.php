<x-layout>
    <x-slot:heading>
        Registration
    </x-slot:heading>
    <form class="p-10 w-full h-full flex flex-col " method="POST" action="/register">
        @csrf
        <div class="space-y-12 flex flex-col">
            <div class="border-b border-gray-900/10 pb-12 flex flex-col items-center justify-center">
                <h2 class="text-base font-semibold leading-7 text-gray-900">Create a User</h2>
                <p class="mt-1 text-sm leading-6 text-gray-600">We just need handful of details.</p>

                <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <x-form-field>
                        <x-form-label for='firstName'>First Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="firstName" name="firstName" type="text" required />
                            <x-form-error name="firstName" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for='lastName'>Last Name</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="lastName" name="lastName" type="text" required />
                            <x-form-error name="lastName" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <label for="Email" class="block text-sm font-medium leading-6 text-gray-900">Email
                            Address</label>
                        <div class="mt-2">
                            <x-form-input id="email" name="email" type="text" required />
                            <x-form-error name="email" />

                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for='password'>Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password" name="password" type="password" required />
                            <x-form-error name="password" />
                        </div>
                    </x-form-field>

                    <x-form-field>
                        <x-form-label for='password_confirmation'>Confirm Password</x-form-label>
                        <div class="mt-2">
                            <x-form-input id="password_confirmation" name="password_confirmation" type="password"
                                required />
                            <x-form-error name="password_confirmation" />
                        </div>
                    </x-form-field>
                </div>
            </div>
        </div>

        <div class="mt-6 flex items-center justify-end gap-x-6">
            <a href="/Jobs" class="text-sm font-semibold leading-6 text-gray-900">Cancel</a>
            <x-form-button>Register</x-form-button>
        </div>
    </form>
</x-layout>
