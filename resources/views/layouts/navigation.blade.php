<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 flex justify-between">

        <!-- Primary Navigation Menu -->
        <div class="py-4 max-w-7xl">
            <div class="flex-shrink-0 flex items-center">
                <a href="{{ route('welcome') }}">
                    <x-application-logo class="block h-10 w-auto fill-current text-gray-600 hover:text-gray-300 transition-colors" />
                </a>
            </div>
        </div>

        <div class="py-4 max-w-7xl">
            <div class="flex-shrink-0 flex items-center">
                @if(Auth::check())
                <x-route-button :route="route('dashboard')">
                    Dashboard
                </x-route-button>
                <hr class="mx-4 h-8 w-1 border-2 border-gray-600">
                <x-route-button :route="route('profile.edit')">
                    {{ Auth::user()->name }}
                </x-route-button>
                @else
                <x-route-button :route="route('login')">
                    Login
                </x-route-button>
                <hr class="mx-4 h-8 w-1 border-2 border-gray-600">
                <x-route-button :route="route('register')">
                    Register
                </x-route-button>
                @endif
            </div>
        </div>
</nav>