<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large"/>
        <meta name="googlebot" value="indexifembedded" />

        <link rel="canonical" href="{{ $page->getUrl() }}">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">
        <meta name="keywords" content="{{ $page->siteKeywords }}" />
        <meta name="author" content="{{ $page->siteAuthor }}" />

        <meta property="og:site_name" content="{{ $page->siteName }}"/>
        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}" />
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />
        <meta property="og:image" content="https://investinh2.com/assets/img/hydrogen_bubble.png" />

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@bouchdak">
        <meta name="twitter:creator" content="@bouchdak">
        <meta name="twitter:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}">
        <meta name="twitter:description" content="{{ $page->description ?? $page->siteDescription }}">
        <meta name="twitter:image" content="https://investinh2.com/assets/img/hydrogen_bubble.png">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <meta name="generator" content="tighten_jigsaw_doc">
        @endif

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}/">
        <link rel="apple-touch-icon" sizes="180x180" href="/assets/images/favicon/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="/assets/images/favicon/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="/assets/images/favicon/favicon-16x16.png">
        <link rel="manifest" href="/assets/images/favicon/site.webmanifest">
        <link rel="icon" href="/favicon.ico">

        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @stack('meta')

        @if ($page->production)
        <script src="https://beamanalytics.b-cdn.net/beam.min.js" data-token="295754a8-180d-46c0-9e15-be385e2555f8" async></script>
        @endif

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="/assets/build/css/main.css">

        @if ($page->docsearchApiKey && $page->docsearchIndexName)
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/docsearch.js@2/dist/cdn/docsearch.min.css" />
        @endif
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-sky-50/50 text-green-800 leading-normal font-sans">
        <header class="flex items-center shadow bg-white border-b h-24 py-4" role="banner">
            <div class="container flex items-center mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }}" class="inline-flex items-center">
                        <img class="h-8 md:h-10 mr-3" src="/assets/images/investinh2-logo.svg" alt="{{ $page->siteName }} logo" />

                        <h1 class="text-lg md:text-2xl font-semibold hover:text-blue-600 my-0">Invest in H<sub>2</sub></h1>
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    <search></search>

                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full container mx-auto py-16 px-6">
            @yield('body')
        </main>

        <footer class="bg-white text-sm mt-12 py-4" role="contentinfo">

            @if (count($clients->where('featured', true))>0)
                @include('_components.trustedby')
            @endif

            <hr class="block my-8 border lg:hidden">

            @include('_components.cta-large', array('cta'=>$cta['cta-footer']))

            <ul class="flex justify-center flex-col md:flex-row list-none mt-8">
                <li class="md:mr-2">
                    &copy; <a href="/" title="Invest in H2 website">Invest in H<sub>2</sub></a> {{ date('Y') }}.
                </li>

                <!-- <li>
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li> -->
            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')
    </body>
</html>
