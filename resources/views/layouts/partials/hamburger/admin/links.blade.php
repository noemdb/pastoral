@includeWhen((Auth::user()->IsAdmin()), 'layouts.partials.navigation.admin.navigation-links')