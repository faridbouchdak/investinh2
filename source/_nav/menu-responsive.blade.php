<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-gray-200 shadow hidden lg:hidden">
    <ul class="my-0 list-none">
        @php
            $items = $page->navigation->top_nav
        @endphp
        @foreach ($items as $label => $item)
        <li class="pl-4">
            <a title="{{ $page->siteName }} {{ $label }}" href="{{ $item }}"
                class="ml-6 hover:text-blue-600 {{ $page->isActive($item) ? 'active text-blue-600' : 'text-green-800' }}">
                {{ $label }}
            </a>
        </li>
        @endforeach
    </ul>
</nav>
