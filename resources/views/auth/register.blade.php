<x-guest-layout>
    <form
        method="POST"
        action="{{ route('register') }}"
    >
        @csrf

        <!-- Name -->
        <div>
            <x-input-label
                for="name"
                :value="__('Name')"
            />
            <x-text-input
                class="mt-1 block w-full"
                id="name"
                name="name"
                type="text"
                :value="old('name')"
                required
                autofocus
                autocomplete="name"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->get('name')"
            />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label
                for="email"
                :value="__('Email')"
            />
            <x-text-input
                class="mt-1 block w-full"
                id="email"
                name="email"
                type="email"
                :value="old('email')"
                required
                autocomplete="username"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->get('email')"
            />
        </div>

        <!-- Role Address -->
        <div class="mt-4">
            <x-input-label
                for="role"
                :value="'Tipo de cuenta'"
            />
            <select
                class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 dark:focus:border-indigo-600 dark:focus:ring-indigo-600"
                id="role"
                name="role"
            >
                <option value="">-- Selecciona un rol --</option>
                <option value="1">Developer - Buscar empleo</option>
                <option value="2">Recruiter - Buscar empleados</option>
            </select>

            <x-input-error
                class="mt-2"
                :messages="$errors->get('role')"
            />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label
                for="password"
                :value="__('Password')"
            />

            <x-text-input
                class="mt-1 block w-full"
                id="password"
                name="password"
                type="password"
                required
                autocomplete="new-password"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('password')"
            />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label
                for="password_confirmation"
                :value="__('Confirm Password')"
            />

            <x-text-input
                class="mt-1 block w-full"
                id="password_confirmation"
                name="password_confirmation"
                type="password"
                required
                autocomplete="new-password"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('password_confirmation')"
            />
        </div>

        <div class="mt-4 flex items-center justify-between">

            <x-link :route="'login'">
                {{ __('Already registered?') }}
            </x-link>

            <x-primary-button class="ml-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
