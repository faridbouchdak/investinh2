<nav class="hidden lg:flex items-center justify-end text-lg">
    @php
        $items = $page->navigation->top_nav
    @endphp

    @foreach ($items as $label => $item)
    <a title="{{ $page->siteName }} {{ $label }}" href="{{ $item }}"
        class="ml-6 hover:text-blue-500 {{ $page->isActive($item) ? 'active text-blue-500' : 'text-gray-700' }}">
        {{ $label }}
    </a>
    @endforeach
</nav>
