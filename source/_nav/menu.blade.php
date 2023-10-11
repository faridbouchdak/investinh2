<nav class="hidden lg:flex items-center justify-end text-lg">
    @php
        $items = $page->navigation->top_nav
    @endphp

    @foreach ($items as $label => $item)
    <a title="{{ $page->siteName }} {{ $label }}" href="{{ $item }}"
        class="ml-6 hover:text-blue-600 {{ $page->isActive($item) ? 'active text-blue-600' : 'text-green-800' }}">
        {{ $label }}
    </a>
    @endforeach
</nav>
