@includeWhen((Auth::user()->IsCoordinator()), 'layouts.partials.navigation.coordinator.navigation-links')