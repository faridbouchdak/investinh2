@extends('_layouts.main')

@section('body')
<section class="">
    <div class="flex flex-col lg:flex-row">
        <nav id="js-nav-menu" class="nav-menu hidden lg:block">
            @include('_nav.docmenu', ['items' => $page->navigation->kb_nav])
        </nav>

        <div class="DocSearch-content w-full break-words pb-16 lg:pl-4" v-pre>
            @yield('content')
            <p>Modified on: {{ date('F j, Y', $page->date) }}</p>
        </div>
    </div>
</section>
@endsection
