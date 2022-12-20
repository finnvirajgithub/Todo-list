<!DOCTYPE html>
<head>
    <title>todo</title>

    @include('libraries.styles')
</head>
<body>
    @include('components.nav')

    @yield('content')

    @include('libraries.scripts')
</body>
</html>

