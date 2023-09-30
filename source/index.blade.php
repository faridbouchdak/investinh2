@extends('_layouts.main')

@section('body')
<div class="relative isolate flex items-center overflow-hidden bg-gray-50 px-6 sm:px-3.5 sm:py-2.5 rounded">
    <div class="flex flex-wrap items-center gap-x-4 gap-y-2">
        <div class="absolute left-[max(-7rem,calc(50%-52rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
        </div>
        <p class="text-sm leading-6 text-gray-900">
            <strong class="font-semibold">Hydrogen Academy 2023</strong><svg viewBox="0 0 2 2" class="mx-2 inline h-0.5 w-0.5 fill-current" aria-hidden="true"><circle cx="1" cy="1" r="1" /></svg>Join us in Antwerpen for the fourth edition (starts september 25).
        </p>
        <a href="https://www.waterstofnet.eu/nl/events/hydrogen-academy-2023-waterstof-van-a-tot-z" class="flex-none rounded-full bg-gray-900 px-3.5 py-1 text-sm font-semibold text-white shadow-sm hover:bg-gray-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-gray-900">Register now <span aria-hidden="true">&rarr;</span></a>
        <div class="absolute left-[max(45rem,calc(50%+8rem))] top-1/2 -z-10 -translate-y-1/2 transform-gpu blur-2xl" aria-hidden="true">
            <div class="aspect-[577/310] w-[36.0625rem] bg-gradient-to-r from-[#ff80b5] to-[#9089fc] opacity-30" style="clip-path: polygon(74.8% 41.9%, 97.2% 73.2%, 100% 34.9%, 92.5% 0.4%, 87.5% 0%, 75% 28.6%, 58.5% 54.6%, 50.1% 56.8%, 46.9% 44%, 48.3% 17.4%, 24.7% 53.9%, 0% 27.9%, 11.9% 74.2%, 24.9% 54.1%, 68.6% 100%, 74.8% 41.9%)"></div>
        </div>
    </div>
</div>

<section class="max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-8 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1>Invest in <span class="text-green-500">green Hydrogen</span></h1>

            <h2 class="font-light mt-4">{{ $page->siteDescription }}</h2>

            <p class="text-lg font-bold">Consider us part of your team. <br class="hidden sm:block">We are a small team of highly experienced financial, procurement and project management enthousiasts.</p>

            <div class="flex my-10">
                <a href="/contact" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Get Started</a>

                <a href="/kb/getting-started" title="H2 explained" class="bg-gray-400 hover:bg-gray-600 text-blue-100 font-normal hover:text-white rounded py-2 px-6">H<sub>2</sub> explained</a>
            </div>
        </div>

        <img src="/assets/images/hydrogen_bubble.png" alt="{{ $page->siteName }} large logo" class="mx-auto max-w-sm">
    </div>

    <hr class="block my-8 border lg:hidden">

    <h3>Our services</h3>
    <div class="md:flex -mx-2 -mx-4">
        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-warp-pipe.svg" class="h-12 w-12" alt="icon of a pipe">

            <h3 id="intro-project-pipeline" class="text-2xl text-blue-900 mb-0">Project pipeline<br/>&amp; Feasibility Study</h3>

            <p>We offer support to governments and various organisations in executing energy infrastructure projects. Our assistance includes establishing a project pipeline, prioritising projects based on factors such as urgency, impact, budget availability, and feasibility, along with other elements of project management.</p>
            <p>Our comprehensive assessment of your infrastructure project's viability considers technical, economic, legal, environmental, and social factors to aid in making well-informed decisions. Our experts pinpoint potential risks and devise mitigation strategies, guaranteeing your project is primed for success.</p>
        </div>

        <div class="mb-8 mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-wallet.svg" class="h-12 w-12" alt="terminal icon">

            <h3 id="intro-funding-financing" class="text-2xl text-blue-900 mb-0">Funding<br/>&amp; Financing</h3>

            <p>We identify potential sources of funding and/or financing, which can include government grants, public-private partnerships, loans, or bonds. Create a financial plan and secure the necessary funding to proceed with the project.</p>
            <span class="font-medium text-sm font-mono mb-3">Key Features:</span>
            <ul class="list-disc list-inside">
                <li>Funding source identification</li>
                <li>Financial planning and budgeting</li>
                <li>Funding application and grant management</li>
                <li>Public-private partnership (PPP) expertise</li>
                <li>Loan and bond procurement</li>
            </ul>
        </div>

        <div class="mx-3 px-2 md:w-1/3">
            <img src="/assets/img/icon-contract-solid.svg" class="h-12 w-12" alt="stack icon">

            <h3 id="intro-procurement-implementation" class="text-2xl text-blue-900 mb-0">Procurement<br/>&amp; implementation</h3>

            <p>We prepare bid documents and contracts, conducting a competitive bidding process to select contractors and suppliers. Awards are given to the winning bidders, and the physical construction of the energy infrastructure project commences.</p>
            <p>Project management and quality control measures are implemented to ensure the project remains on schedule and within budget. Additionally, we monitor and address any unexpected issues or changes that may arise.</p>
            <span class="font-medium text-sm font-mono mb-3">Key Features:</span>
            <ul class="list-disc list-inside">
                <li>Bid document preparation</li>
                <li>Competitive bidding process</li>
                <li>Contractor and supplier selection</li>
                <li>Contract awarding and negotiation</li>
                <li>Contract management and compliance</li>
            </ul>
        </div>
    </div>
</section>

<hr class="block my-8 border lg:hidden">

<section class="max-w-6xl mx-auto px-6 py-10 md:py-12">
    <h2>News</h2>
    @foreach ($posts->where('featured', true) as $featuredPost)
        <div class="w-full mb-6">
            @if ($featuredPost->cover_image)
                <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image" class="mb-6 rounded shadow-md">
            @endif

            <p class="text-gray-700 font-medium my-2">
                {{ $featuredPost->getDate()->format('F j, Y') }}
            </p>

            <h2 class="text-3xl mt-0">
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="text-gray-900 font-extrabold">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                Read
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    @include('_components.newsletter-signup')

    @foreach ($posts->where('featured', false)->take(4)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6">
            @foreach ($row as $post)
                <div class="w-full md:w-1/2 md:mx-6">
                    @include('_components.post-preview-inline')
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif
    @endforeach
</section>
@stop
