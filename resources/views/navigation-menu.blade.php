<nav x-data="{ open: false }" class="bg-white border-b border-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:text-gray-100">
    
    <!-- Primary Navigation Menu -->

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
                    @includeWhen((Auth::user()->IsCoordinator()), 'layouts.partials.navigation.coordinator.navigation-links')
                    @includeWhen((Auth::user()->IsSubcoordinator()), 'layouts.partials.navigation.subcoordinator.navigation-links')
                    @includeWhen((Auth::user()->IsCooperator()), 'layouts.partials.navigation.cooperator.navigation-links')
                    @includeWhen((Auth::user()->IsReligious()), 'layouts.partials.navigation.religious.navigation-links')
                    @includeWhen((Auth::user()->IsEstudiant()), 'layouts.partials.navigation.estudiant.navigation-links')
                    @includeWhen((Auth::user()->IsPresident()), 'layouts.partials.navigation.president.navigation-links')
                    @includeWhen((Auth::user()->IsSecretary()), 'layouts.partials.navigation.secretary.navigation-links')
                    @includeWhen((Auth::user()->IsTeacher()), 'layouts.partials.navigation.teacher.navigation-links')
                    @includeWhen((Auth::user()->IsRepresentant()), 'layouts.partials.navigation.representant.navigation-links')
                </div>

            </div>

            <div class="hidden sm:flex sm:items-center sm:ml-6">
                
                <!-- Teams Dropdown -->
                @includeWhen((Auth::user()->IsAdmin()), 'layouts.partials.dropdown.admin.teams')                

                <!-- Settings Dropdown -->
                <div class="ml-3 relative">
                    @includeWhen((Auth::user()->IsAdmin()), 'layouts.partials.dropdown.admin.settings')                    
                    @includeWhen((Auth::user()->IsDirector()), 'layouts.partials.dropdown.director.settings')                    
                    @includeWhen((Auth::user()->IsCoordinator()), 'layouts.partials.dropdown.coordinator.settings')                    
                    @includeWhen((Auth::user()->IsSubcoordinator()), 'layouts.partials.dropdown.subcoordinator.settings')                    
                    @includeWhen((Auth::user()->IsCooperator()), 'layouts.partials.dropdown.cooperator.settings')                    
                    @includeWhen((Auth::user()->IsReligious()), 'layouts.partials.dropdown.religious.settings')                    
                    @includeWhen((Auth::user()->IsEstudiant()), 'layouts.partials.dropdown.estudiant.settings')                    
                    @includeWhen((Auth::user()->IsPresident()), 'layouts.partials.dropdown.president.settings')                    
                    @includeWhen((Auth::user()->IsSecretary()), 'layouts.partials.dropdown.secretary.settings')                    
                    @includeWhen((Auth::user()->IsTeacher()), 'layouts.partials.dropdown.teacher.settings')                    
                    @includeWhen((Auth::user()->IsRepresentant()), 'layouts.partials.dropdown.representant.settings')                    
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

            @includeWhen((Auth::user()->IsAdmin()), 'layouts.partials.hamburger.admin.links')
            @includeWhen((Auth::user()->IsDirector()), 'layouts.partials.hamburger.director.links')
            @includeWhen((Auth::user()->IsCoordinator()), 'layouts.partials.hamburger.coordinator.links')
            @includeWhen((Auth::user()->IsSubcoordinator()), 'layouts.partials.hamburger.subcoordinator.links')
            @includeWhen((Auth::user()->IsCooperator()), 'layouts.partials.hamburger.cooperator.links')
            @includeWhen((Auth::user()->IsReligious()), 'layouts.partials.hamburger.religious.links')
            @includeWhen((Auth::user()->IsEstudiant()), 'layouts.partials.hamburger.estudiant.links')
            @includeWhen((Auth::user()->IsPresident()), 'layouts.partials.hamburger.president.links')
            @includeWhen((Auth::user()->IsSecretary()), 'layouts.partials.hamburger.secretary.links')
            @includeWhen((Auth::user()->IsTeacher()), 'layouts.partials.hamburger.teacher.links')
            @includeWhen((Auth::user()->IsRepresentant()), 'layouts.partials.hamburger.representant.links')

        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">

            @includeWhen((Auth::user()->IsAdmin()), 'layouts.partials.hamburger.admin.settings')
            @includeWhen((Auth::user()->IsDirector()), 'layouts.partials.hamburger.director.settings')
            @includeWhen((Auth::user()->IsCoordinator()), 'layouts.partials.hamburger.coordinator.settings')
            @includeWhen((Auth::user()->IsSubcoordinator()), 'layouts.partials.hamburger.subcoordinator.settings')
            @includeWhen((Auth::user()->IsCooperator()), 'layouts.partials.hamburger.cooperator.settings')
            @includeWhen((Auth::user()->IsReligious()), 'layouts.partials.hamburger.religious.settings')
            @includeWhen((Auth::user()->IsEstudiant()), 'layouts.partials.hamburger.estudiant.settings')
            @includeWhen((Auth::user()->IsPresident()), 'layouts.partials.hamburger.president.settings')
            @includeWhen((Auth::user()->IsSecretary()), 'layouts.partials.hamburger.secretary.settings')
            @includeWhen((Auth::user()->IsTeacher()), 'layouts.partials.hamburger.teacher.settings')
            @includeWhen((Auth::user()->IsRepresentant()), 'layouts.partials.hamburger.representant.settings')

            <div class=" mx-2"> <x-mode-dark-btn /></div>

        </div>
    </div>

</nav>
