<div class="bg-white dark:bg-gray-800 relative container mx-auto px-4 lg:px-8">
    <div class="text-start w-full lg:w-1/2 py-12 px-4 sm:px-6 lg:py-16 lg:px-8 z-20">
        <h2 class="text-3xl font-extrabold text-black dark:text-white sm:text-4xl">
            {!! $cta->title !!}
        </h2>
        <p class="text-xl mt-4 text-gray-400">
            {!! $cta->message !!}
        </p>
        <div class="lg:mt-0 lg:flex-shrink-0">
            <div class="mt-12 inline-flex rounded-md">
                <a href="{{ $cta->button_link }}" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">{{ $cta->button_title }}</a>
            </div>
        </div>
    </div>
    <img src="{{ $cta->cover_image }}" class="absolute top-0 right-0 hidden h-full max-w-1/2 lg:block"/>
</div>