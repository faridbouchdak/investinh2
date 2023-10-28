@extends('_layouts.main')

@php
    use Illuminate\Support\Str;
    $page->type = 'article';
@endphp

@section('body')

@yield('content')

    <h2>Our team</h2>
    @foreach ($team->where('featured', true)->take(4)->chunk(2) as $row)
        <div class="flex flex-col md:flex-row md:-mx-6 max-w-4xl mx-auto">
            @foreach ($row as $teammember)
                <div class="w-full md:w-1/2 md:mx-6">
                    <div class="flex flex-col mb-4 rounded overflow-hidden shadow-lg p-6">
                        <figure>
                            <img src="{{ $teammember->cover_image }}"
                                    alt="Photo of {{ $teammember->name }}"
                                    class="flex rounded-full w-full bg-contain">
                        </figure>
                        <div class="font-bold text-xl mt-2">{{ $teammember->name }}</div>
                        <p class="">{!! $teammember->expertise !!}</p>
                        {{ $teammember->getExcerpt() }}
                        <p><a href="{{ $teammember->getUrl() }}"
                        title="Read more about {{ $teammember->name }}"
                        class="uppercase font-semibold tracking-wide mb-2"
                        >Read more</a></p>
                    </div>
                </div>

                @if (! $loop->last)
                    <hr class="block md:hidden w-full border-b mt-2 mb-6">
                @endif
            @endforeach
        </div>

        <!-- @if (! $loop->last)
            <hr class="w-full border-b mt-2 mb-6">
        @endif -->
    @endforeach
@endsection