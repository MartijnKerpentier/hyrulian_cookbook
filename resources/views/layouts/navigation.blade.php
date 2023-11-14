<nav x-data="{ open: false }" class="bg-green-800 border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <a href="{{ route('home') }}">
                        <img class="block h-9 w-auto fill-current text-white" src="/logo.png" alt="Hyrulian Cookbook Logo" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex text-white">
                    <x-nav-link :href="route('home')" :active="request()->routeIs('home')">
                        {{ __('Home') }}
                    </x-nav-link>

                    <!-- Add more navigation links as needed -->
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-white hover:text-gray-300 focus:outline-none focus:text-gray-300 transition ease-in-out duration-150">
                            <div>{{ 'Link' }}</div>

                            <div class="ms-1">
                                <!-- LoZ Triforce icon or other LoZ-themed icon -->
                                <img class="h-4 w-4" src="icon" alt="icon" />
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('login')" class="text-gray-700">
                            {{ __('Log In') }}
                        </x-dropdown-link>
                        <x-dropdown-link :href="route('register')" class="text-gray-700">
                            {{ __('Register') }}
                        </x-dropdown-link>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-white hover:text-gray-300 hover:bg-gray-700 focus:outline-none focus:bg-gray-700 focus:text-gray-300 transition duration-150 ease-in-out">
                    <img class="h-6 w-6" src="loz-menu-icon.svg" alt="LoZ Menu Icon" />
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('home')" :active="request()->routeIs('home')">
                {{ __('Home') }}
            </x-responsive-nav-link>
            <!-- Add more responsive navigation links as needed -->
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-white">{{ 'Link' }}</div>
                <div class="font-medium text-sm text-gray-500">{{ 'Link@email.com' }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('login')" class="text-gray-700">
                    {{ __('Log In') }}
                </x-responsive-nav-link>
                <x-responsive-nav-link :href="route('register')" class="text-gray-700">
                    {{ __('Register') }}
                </x-responsive-nav-link>
            </div>
        </div>
    </div>
</nav>
