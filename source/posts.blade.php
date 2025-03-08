---
title: Blog
description: The list of blog posts for the site
pagination:
    collection: posts
    perPage: 8
---
@extends('_layouts.main')

@section('body')
    <h1>Posts</h1>

    <hr class="border-b my-6">

    <div class="columns-1 sm:columns-2 gap-6">
        @foreach ($pagination->items as $post)
            <div class="break-inside-avoid mb-6">
                @include('_components.post-preview-inline')
            </div>

        @endforeach
    </div>

    @if ($pagination->pages->count() > 1)
        <nav class="flex flex-wrap justify-center text-base my-8">
        @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Previous Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 my-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Go to Page {{ $pageNumber }}"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 my-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-gray-600' : 'text-gray-700' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Next Page"
                    class="bg-gray-200 hover:bg-gray-400 rounded mr-3 my-3 px-5 py-3 "
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
