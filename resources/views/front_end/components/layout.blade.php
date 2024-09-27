<!doctype html>
<html lang="en-AU">
<head>

    <link rel="icon" href="{{ asset('asset/img/logo.png') }}" type="image/x-icon" >
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-54PDXK3Z');
    </script>
    <!-- End Google Tag Manager -->

    <script type="application/ld+json">
        {
          "@context": "https://schema.org",
          "@type": "Organization",
          "name": "Mobile Smash Repair",
          "url": "https://www.mobilesmashrepair.com/",
          "logo": "https://www.mobilesmashrepair.com/asset/images/mainLogo.png"
        }
        </script>


    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--    @vite('resources/css/app.css') --}}
    @vite('resources/css/app.css')
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://kit.fontawesome.com/4e2c7ef5ef.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/js/swiffy-slider.min.js" crossorigin="anonymous"
        defer></script>
    <link href="https://cdn.jsdelivr.net/npm/swiffy-slider@1.6.0/dist/css/swiffy-slider.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <style>
        /*@import "https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap";*/
        @import "https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap";
        /*@import "https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;0,900;1,300;1,400;1,500;1,700;1,900&amp;display=swap";*/
    </style>
    <link rel="canonical" href="{{ $seos->first()->canonical ?? url()->current() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.9.3/min/dropzone.min.js"></script>

    @php
        $seo = $seos->first();
    @endphp

    @if ($seo && $seo->title)
        <title>{{ $seo->title }}</title>
    @endif

    @if ($seo && $seo->description)
        <meta name="description" content="{!! $seo->description !!} ">
    @endif

    {{--    @if ($seo && $seo->canonical) --}}
    {{--        <link rel="canonical" href="{{ $seo->canonical }}"> --}}
    {{--    @endif --}}

    <!-- Open Graph data -->
    @if ($seo && $seo->og_title)
        <meta property="og:title" content="{{ $seo->og_title }}">
    @endif

    @if ($seo && $seo->og_description)
        <meta property="og:description" content="{!! $seo->og_description !!}">
    @endif

    @if ($seo && $seo->og_type)
        <meta property="og:type" content="{{ $seo->og_type }}">
    @endif

    @if ($seo && $seo->og_url)
        <meta property="og:url" content="{{ $seo->og_url }}">
    @endif

    @if ($seo && $seo->og_image)
        <meta property="og:image" content="{{ $seo->og_image }}">
    @endif

    @if ($seo && $seo->og_site_name)
        <meta property="og:site_name" content="{{ $seo->og_site_name }}">
    @endif

    @if ($seo && $seo->og_locale)
        <meta property="og:locale" content="{{ $seo->og_locale }}">
    @endif

    <!-- Twitter data -->
    @if ($seo && $seo->twitter_label1)
        <meta name="twitter:card" content="{{ $seo->twitter_label1 }}">
    @endif

    @if ($seo && $seo->twitter_data1)
        <meta name="twitter:title" content="{!! $seo->twitter_data1  !!}">
    @endif

    @if ($seo && $seo->twitter_label2)
        <meta name="twitter:description" content="{{ $seo->twitter_label2 }}">
    @endif
    @if ($seo && $seo->twitter_data2)
        <meta name="twitter:url" content="{{ $seo->twitter_data2 }}">
    @endif




</head>

<body class="font-montserrat">

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-54PDXK3Z" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    @include('front_end.components.header')
    @yield('content')
    @include('front_end.components.footer')

    <div class="w-max h-max fixed right-4 bottom-4">
        <a href="tel:+61449599000" target="_blank"
            class="text-[#56eb6c] text-[70px] hover:text-[#eeb21c] transition ease-in duration-2000 ">
            <img src="{{ asset('asset/images/image-removebg-preview.png') }}" alt="Mobile Smash Repair Services in Melbourne" style="width: 80px; height: auto;">
        </a>
    </div>


    <script type="application/ld+json">
    {!! $seos->first()->schema_js ?? '{}' !!}
</script>
</body>

</html>
