<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
{{--    @vite('resources/css/app.css')--}}
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
            defer>

    </script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
          crossorigin="anonymous">
    <style>
        @import "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap";
    </style>

      <title>{{ $seos->first()->title ?? 'Default title' }}</title>
    <meta name="description" content="{{ $seos->first()->description ?? 'Default Description' }}">
    <link rel="canonical" href="{{ $seos->first()->canonical ?? url()->current() }}">
    <!-- Open Graph data -->
    <meta property="og:title" content="{{ $seos->first()->og_title ?? 'Default OG Title' }}">
    <meta property="og:description" content="{{ $seos->first()->og_description ?? 'Default OG Description' }}">
    <meta property="og:type" content="{{ $seos->first()->og_type ?? 'website' }}">
    <meta property="og:url" content="{{ $seos->first()->og_url ?? url()->current() }}">
    <meta property="og:image" content="{{ $seos->first()->og_image ?? asset('default-image.jpg') }}">
    <meta property="og:site_name" content="{{ $seos->first()->og_site_name ?? 'Default Site Name' }}">
    <meta property="og:locale" content="{{ $seos->first()->og_locale ?? 'en_US' }}">
    <!-- Twitter data -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $seos->first()->og_title ?? 'Default Twitter Title' }}">
    <meta name="twitter:description" content="{{ $seos->first()->og_description ?? 'Default Twitter Description' }}">
    <meta name="twitter:image" content="{{ $seos->first()->og_image ?? asset('default-image.jpg') }}">
</head>
<body class="font-roboto">
@include('front_end.components.header')
@yield('content')
@include('front_end.components.footer')


<script type="application/ld+json">
    {!! $seos->first()->schema_js ?? '{}' !!}
</script>
</body>
</html>
