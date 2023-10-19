@extends('_layouts.main')

@php
    use Illuminate\Support\Str;
    $page->type = 'article';
@endphp

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->name }} cover image" class="mb-2 rounded shadow-md">
    @endif

    <h1 class="leading-none mb-2">{{ $page->name }}</h1>

    <p class="text-gray-700 text-xl md:mt-0">{{ $page->expertise }}</p>

    <div class="border-b border-green-700 mb-10 pb-4" v-pre>
        @yield('content')
        <p class=""><a href="{{ $page->linkedin }}" alt="link to linkedin-profile of {{ $page->name }}">Visit LinkedIn-profile</a></p>
    </div>
    
    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="{{ $next->title }}">
                    &LeftArrow; {{ $next->name }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="{{ $previous->title }}">
                    {{ $previous->name }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
