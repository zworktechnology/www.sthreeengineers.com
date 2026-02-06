@php
    $canonical = str_replace(
        ['http://', 'sthreeengineers.com/public', 'sthreeengineers.com/index.php'],
        ['https://', 'www.sthreeengineers.com', 'www.sthreeengineers.com'],
        url()->current()
    );
@endphp

<link rel="canonical" href="{{ $canonical }}" />

@if (Str::contains(url()->current(), ['/public/', '/index.php']))
    <meta name="robots" content="noindex, follow">
@endif

<link rel="shortcut icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="image/x-icon">
<link rel="icon" href="{{ asset('assets/frontend/images/favicon.png') }}" type="image/x-icon">

<link href="{{ asset('assets/frontend/css/bootstrap.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/style.css') }}" rel="stylesheet">
<link href="{{ asset('assets/frontend/css/ownstyle.css') }}" rel="stylesheet">

<link href="{{ asset('assets/frontend/css/responsive.css') }}" rel="stylesheet">

<link href="{{ asset('assets/frontend/css/color.css') }}" rel="stylesheet">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="../../css2?family=Barlow:wght@400;500;600;700&family=Roboto:wght@400;500;700;900&display=swap"
    rel="stylesheet">

