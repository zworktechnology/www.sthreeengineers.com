<!doctype html>
<html lang="en">

<head>
    @include('components.guest.bheader')
</head>

<body class="authentication-bg" style="background-image: url({{url('assets/backend/images/bg.jpg')}}); background-size:cover; background-repeat: no-repeat;">
    @yield('content')
</body>

</html>
