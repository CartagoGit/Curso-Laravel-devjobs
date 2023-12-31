<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status
        class="mb-4"
        :status="session('status')"
    />

    <form
        method="POST"
        action="{{ route('login') }}"
    >
        @csrf

        <!-- Credentials - Username or email -->
        <div>
            <x-input-label
                for="credential"
                :value="__('Email or Username')"
            />
            <x-text-input
                class="mt-1 block w-full"
                id="credential"
                name="credential"
                type="text"
                :value="old('credential')"
                required
                autofocus
                autocomplete="username"
            />
            <x-input-error
                class="mt-2"
                :messages="$errors->get('username')"
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
                autocomplete="current-password"
            />

            <x-input-error
                class="mt-2"
                :messages="$errors->get('password')"
            />
        </div>

        <!-- Remember Me -->
        <div class="mt-4 block flex items-center justify-between">
            <label
                class="inline-flex items-center"
                for="remember_me"
            >
                <input
                    class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:border-gray-700 dark:bg-gray-900 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"
                    id="remember_me"
                    name="remember"
                    type="checkbox"
                >
                <span
                    class="ml-2 text-sm text-gray-600 dark:text-gray-400">{{ __('Remember me') }}</span>
            </label>
            <x-primary-button>
                {{ __('Log in') }}
            </x-primary-button>
        </div>

        <div class="mt-4 flex items-center justify-between">

            <x-link :route="'password.request'">
                {{ __('Forgot your password?') }}
            </x-link>
            <x-link :route="'register'">
                ¿{{ __('Register') }}?
            </x-link>
        </div>
    </form>
</x-guest-layout>
