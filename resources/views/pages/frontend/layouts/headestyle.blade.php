@php
    $canonical = str_replace(
        ['http://', 'vernaconstruction.com/public', 'vernaconstruction.com/index.php'],
        ['https://', 'www.vernaconstruction.com', 'www.vernaconstruction.com'],
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

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "LocalBusiness",
  "name": "Sthree Engineers",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "No:43F, First Floor, Canara Bank ATM Upstair, Pudukottai Main Rd, Subramaniapuram",
    "addressLocality": "Tiruchirapalli",
    "addressRegion": "Tamil Nadu",
    "postalCode": "620020",
    "addressCountry": "IN"
  },
  "telephone": "+91-7871313987",
  "url": "https://www.sthreeengineers.com",
  "openingHours": [
    "Mo-Sa 09:00-20:00"
  ],
  "image": "https://www.sthreeengineers.com/assets/frontend/images/logo-light.png",
  "logo": "https://www.sthreeengineers.com/assets/frontend/images/logo-light.png"
}
</script>
