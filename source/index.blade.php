@extends('_layouts.main')

@section('body')

@include('_components.event', array('position'=>'top'))

<section class="max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-8 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1>{!! $page->hero->header !!}</h1>

            <h2 class="font-light mt-4">{!! $page->hero->pay_off !!}</h2>

            <p class="text-lg font-bold">{!! $page->hero->first_message !!} <br class="hidden sm:block">{!! $page->hero->second_message !!}</p>

            <div class="flex my-10">
                <a href="{{ $page->hero->first_button->link }}" title="{{ $page->siteName }}: {!! $page->hero->first_button->title !!}" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">{!! $page->hero->first_button->title !!}</a>

                <a href="{{ $page->hero->second_button->link }}" title="{{ $page->hero->second_button->title }}" class="bg-green-800 hover:bg-green-600 text-green-100 font-normal hover:text-white rounded py-2 px-6">{!! $page->hero->second_button->title !!}</a>
            </div>
        </div>
        <figure class="">
            <img src="{{ $page->hero->image->link }}" alt="{{ $page->siteName }}: {{ $page->hero->image->alt }}" class="my-auto">
        </figure>
    </div>
</section>

<hr class="block my-8 border lg:hidden">

<section class="max-w-6xl mx-auto px-6 py-10 md:py-12">
    <h2>Our services</h2>
    <div class="md:flex -mx-2 -mx-4">
        @foreach ($services->where('featured', true) as $featuredService)
            <div class="@if (!$loop->last)mb-8 @endif mx-3 px-2 md:w-1/3">
                @if ($featuredService->card_image)
                    <img src="{{ $featuredService->card_image }}" alt="{{ $featuredService->title }} icon" class="h-12 w-12">
                @endif

                {!! $featuredService !!}

            </div>

            @if (! $loop->last)
                <hr class="border-b my-6">
            @endif
        @endforeach
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
                <a href="{{ $featuredPost->getUrl() }}" title="Read {{ $featuredPost->title }}" class="font-extrabold text-green-800">
                    {{ $featuredPost->title }}
                </a>
            </h2>

            <p class="mt-0 mb-4">{!! $featuredPost->getExcerpt() !!}</p>

            <a href="{{ $featuredPost->getUrl() }}" title="Read - {{ $featuredPost->title }}" class="uppercase tracking-wide mb-4">
                Read more
            </a>
        </div>

        @if (! $loop->last)
            <hr class="border-b my-6">
        @endif
    @endforeach

    @include('_components.event', array('position'=>'middle'))

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
