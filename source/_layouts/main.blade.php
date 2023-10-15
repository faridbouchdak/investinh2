<!DOCTYPE html>
<html lang="{{ $page->language ?? 'en' }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
        <meta property="og:image" content="https://investinh2.com/assets/images/hydrogen_bubble.png" />

        <meta name="twitter:image:alt" content="{{ $page->siteName }}">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:site" content="@bouchdak">
        <meta name="twitter:creator" content="@bouchdak">
        <meta name="twitter:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}">
        <meta name="twitter:description" content="{{ $page->description ?? $page->siteDescription }}">
        <meta name="twitter:image" content="https://investinh2.com/assets/images/hydrogen_bubble.png">

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

            @if (count($clients)>0)
            <section class="container mx-auto px-4 lg:px-8 mt-6">
                <h3>Thrusted by</h3>
                <div class="grid grid-cols-2 gap-8 md:grid-cols-6 lg:grid-cols-5 mb-10">
                @foreach ($clients->where('featured', true) as $featuredClient)
                    <div class="flex items-center justify-center col-span-1 md:col-span-2 lg:col-span-1">
                        @if ($featuredClient->cover_image)
                            <img src="{{ $featuredClient->cover_image }}" alt="{{ $featuredClient->name }} cover image" class="h-12 text-gray-500 fill-current dark:text-gray-300" title="{{ $featuredClient->name }}">
                        @endif
                    </div>
                @endforeach
                </div>
            </section>
            @endif

            <hr class="block my-8 border lg:hidden">

            <div class="bg-white dark:bg-gray-800 relative container mx-auto px-4 lg:px-8">
                <div class="text-start w-full lg:w-1/2 py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
                    <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
                        <span class="block">
                            How can we
                        </span>
                        <span class="block text-green-500">
                            serve you?
                        </span>
                    </h2>
                    <p class="text-xl mt-4 text-gray-400">
                        If you think we’d be a good fit for your next project,<br/>please reach out and inquire with us.<br/>We look forward to hearing from you soon.
                    </p>
                    <div class="lg:mt-0 lg:flex-shrink-0">
                        <div class="mt-12 inline-flex rounded-md">
                            <a href="/contact" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Contact us &rarr;</a>
                        </div>
                    </div>
                </div>
                <img src="/assets/img/about.png" class="absolute top-0 right-0 hidden h-full max-w-1/2 lg:block"/>
            </div>
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
