<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-gray-200 shadow hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                href="https://jcos.io/about/"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/blog') ? 'active [#b99128]' : 'text-gray-800 hover:[#b99128]' }}"
            >About</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Posts"
                href="/posts"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/about') ? 'active [#b99128]' : 'text-gray-800 hover:[#b99128]' }}"
            >Posts</a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Categories"
                href="/categories"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/about') ? 'active [#b99128]' : 'text-gray-800 hover:[#b99128]' }}"
            >Categories</a>
        </li>
        <li class="pl-4">
            <a
                href="https://projects.jcos.io/"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/contact') ? 'active [#b99128]' : 'text-gray-800 hover:[#b99128]' }}"
            >Projects</a>
        </li>
        <li class="pl-4">
            <a
                href="https://resume.jcos.io/"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/contact') ? 'active [#b99128]' : 'text-gray-800 hover:[#b99128]' }}"
            >Resume</a>
        </li>
    </ul>
</nav>
