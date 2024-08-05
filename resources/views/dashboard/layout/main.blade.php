<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title') | PSDA</title>
    @include('dashboard.layout.partial.link')
    @include('dashboard.layout.partial.script')
</head>

<body>

    <div class="flex h-screen bg-gray-50 dark:bg-gray-900" :class="{ 'overflow-hidden': isSideMenuOpen }">
        @include('dashboard.layout.partial.header')

        @yield('dashboard-content')

    </div>
    </div>
</body>

</html>
