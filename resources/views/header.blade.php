<app-header
    :brand="'{{ config('app.name', 'Laravel') }}'"
    :links="[
        {href: '/about', name: 'About'},
        {href: '/contact', name: 'Contact'}
    ]"
    :auth="{{ Auth::check() ? 'true' : 'false' }}"
></app-header>
