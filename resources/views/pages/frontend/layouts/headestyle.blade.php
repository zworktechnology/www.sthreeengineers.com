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

<script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebSite",
    "url": "https://www.sthreeengineers.com/",
    "name": "Sthree Engineers | Premier Construction Company in Trichy",
    "description": "Trustworthy, dependable, affordable, and cost-effective building solutions with 19 years of experience in Building Construction, Project Management, and Interior Works.",
    "potentialAction": {
      "@type": "SearchAction",
      "target": "https://www.sthreeengineers.com/?s={search_term_string}",
      "query-input": "required name=search_term_string"
    }
  },
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "url": "https://www.sthreeengineers.com/",
    "inLanguage": "en-US",
    "primaryImageOfPage": "https://www.sthreeengineers.com/assets/images/logo.png",
    "isPartOf": {"@id": "https://www.sthreeengineers.com/#organization"}
  },
  {
    "@context": "https://schema.org",
    "@type": "ConstructionCompany",
    "@id": "https://www.sthreeengineers.com/#organization",
    "name": "Sthree Engineers",
    "url": "https://www.sthreeengineers.com/",
    "telephone": "+91-78713-13987",
    "email": "admin@sthreeengineers.com",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "43F, 1st Floor, Pudukottai Main Road, Subramaniyapuram, Upstair Canara Bank ATM",
      "addressLocality": "Trichy",
      "addressRegion": "Tamilnadu",
      "postalCode": "620020",
      "addressCountry": "IN"
    },
    "areaServed": [
      {"@type": "City", "name": "Tiruchirappalli"},
      {"@type": "City", "name": "Perambalur"}
    ]
  }
</script>
