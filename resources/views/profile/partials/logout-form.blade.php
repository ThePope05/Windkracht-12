<section>
    <header>
        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
            {{ __('Log Out') }}
        </h2>

        <p class="mt-1 mb-4 text-sm text-gray-600 dark:text-gray-400">
            {{ __('Ensure to log out of your account when you are done.') }}
        </p>
    </header>

    <form method="post" action="{{ route('logout') }}">
        @csrf

        <x-secondary-button type="submit" class="w-full">
            {{ __('Log Out') }}
        </x-secondary-button>
    </form>
</section>