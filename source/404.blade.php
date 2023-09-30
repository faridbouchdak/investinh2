@extends('_layouts.main')

@section('body')
    <div class="flex flex-col items-center text-gray-700 mt-32">
        <h1 class="text-6xl font-light leading-none mb-2">404</h1>

        <h2 class="text-3xl">Page not found.</h2>

        <hr class="block w-full max-w-sm mx-auto border my-8">

        <p class="text-xl">
            Sorry the information you were looking for could not be found.<br/>
            If the problem persists, <a href="/contact">contact us</a> to report this fault.<br/>
            <a title="Back to home" href="/">Back to home</a>.
        </p>
    </div>
@endsection
