<nav class="hidden lg:flex items-center justify-end text-lg menu">
    <a href="https://jcos.io/about/"
       class="ml-6 font-light text-[#a9a9b3] hover:text-[#b99128] hover:underline">
        About
    </a>

    <a title="{{ $page->siteName }} Posts" href="/posts"
        class="ml-6 font-light text-[#a9a9b3] hover:text-[#b99128] hover:underline {{ $page->isActive('/blog') ? 'active text-[#b99128]' : '' }}">
        Posts
    </a>

    <a href="https://projects.jcos.io/"
        class="ml-6 font-light text-[#a9a9b3] hover:text-[#b99128] hover:underline">
        Projects
    </a>

    <a href="https://resume.jcos.io/"
        class="ml-6 font-light text-[#a9a9b3] hover:text-[#b99128] hover:underline">
        Resume
    </a>
    
    <span class="theme-toggle ml-6 font-light text-[#a9a9b3] hover:text-[#b99128] hover:underline">
    <svg class="theme-toggler" width="24" height="24" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M22 41C32.4934 41 41 32.4934 41 22C41 11.5066 32.4934 3 22
              3C11.5066 3 3 11.5066 3 22C3 32.4934 11.5066 41 22 41ZM7 22C7
              13.7157 13.7157 7 22 7V37C13.7157 37 7 30.2843 7 22Z">
          </path>
        </svg>
    </span>
</nav>
