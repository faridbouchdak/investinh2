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