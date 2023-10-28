@extends('_layouts.main')

@php
    use Illuminate\Support\Str;
    $page->type = 'article';
@endphp

@section('body')
<h1 class="text-9xl tracking-tight text-right">Knowledge Base</h1>

<hr class="border-b my-6">

<section class="flex flex-col lg:flex-row">
    <nav id="js-nav-menu" class="nav-menu"> <!-- hidden lg:block -->
        @include('_nav.docmenu', ['items' => $page->navigation->kb_nav])
    </nav>

    <div class="DocSearch-content w-full break-words pb-16 lg:pl-4" v-pre>
        @yield('content')
        <p>Last modified on: {{ date('F j, Y', $page->getModifiedTime()) }}</p>
    </div>
</section>

@endsection
