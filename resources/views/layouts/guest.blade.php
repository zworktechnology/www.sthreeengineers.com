<!doctype html>
<html lang="en">

<head>
    @include('components.guest.header')
    @turnstileScripts()
</head>

<body class="authentication-bg">
    @yield('content')
</body>

@include('components.guest.footer')

</html>
