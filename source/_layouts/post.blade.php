@extends('_layouts.main')

@php
    $page->type = 'article';
@endphp

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2 w-full rounded-2xl">
    @endif

    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    <p class="text-gray-300 text-xl md:mt-0">{{ date('F j, Y', $page->date) }}</p>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/posts/categories/' . $category }}"
                title="View posts in {{ $category }}"
                class="inline-block bg-gray-300 hover:bg-blue-200 leading-loose tracking-wide text-gray-800 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div class="mb-10 pb-4" v-pre>
        @yield('content')

        <div class="commentbox"></div>
        <script src="https://unpkg.com/commentbox.io/dist/commentBox.min.js"></script>
        <script>
            commentBox('5657989755174912-proj', {
                textColor: '#fff'
            });
        </script>

    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Older Post: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Newer Post: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>
@endsection
