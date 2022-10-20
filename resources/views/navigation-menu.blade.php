<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-100">
    
    <!-- Primary Navigation Menu -->

    {{-- <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"> --}}
    <div class="max-w-8xl mx-auto px-4 sm:px-6 lg:px-8">
        
        <div class="flex justify-between h-16">

            <div class="flex">
                
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                        <x-app-logo class="block h-16 w-16"/>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-2 sm:-my-px sm:ml-2 sm:flex dark:text-white">

                    @includeWhen((Auth::user()->IsAdmin()), 'layouts.partials.navigation.admin.navigation-links')
                    @includeWhen((Auth::user()->IsDirector()), 'layouts.partials.navigation.director.navigation-links')

                    {{-- @include('layouts.partials.navigation-links')  --}}
                    
                </div>

            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                
                <!-- Teams Dropdown -->
                @includeWhen((Auth::user()->IsAdmin()), 'layouts.partials.dropdown.admin.teams')                

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    @includeWhen((Auth::user()->IsAdmin()), 'layouts.partials.dropdown.admin.settings')                    
                    @includeWhen((Auth::user()->IsDirector()), 'layouts.partials.dropdown.director.settings')                    
                </div>

                <div class=" mx-2"> <x-mode-dark-btn /> </div>

            </div>

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden ">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            
        </div>

    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">

        <!-- Navigation Links -->
        <div class="pt-2 pb-3 space-y-1">

            @includeWhen((Auth::user()->IsAdmin()), 'layouts.partials.navigation.admin.navigation-links')

        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">

            @includeWhen((Auth::user()->IsAdmin()), 'layouts.partials.hamburger.admin.settings')

            <div class=" mx-2"> <x-mode-dark-btn /> </div>

        </div>
    </div>

</nav>
