@extends('_layouts.main')

@section('body')
    <h1>{{ $page->title }}</h1>

    <div class="text-2xl border-b border-blue-200 mb-6 pb-10">
        @yield('content')
    </div>

    @php
        // Get category posts & sort by date descending
        $postsInCategory = $page->posts($posts)->sortByDesc('date')->values();

        $lastOddPost = '';

        if ((count($postsInCategory) % 2) !== 0) {
            $postsInCategory = $postsInCategory->take(count($postsInCategory) - 1);
            $lastOddPost = $page->posts($posts)->sortBy('date')->first();
        } else {
            $postsInCategory = $postsInCategory->take(count($postsInCategory));
            // TODO: Fix ordering of dates
        }

        $column1 = collect();
        $column2 = collect();

        // Distribute left-right order
        foreach ($postsInCategory as $index => $post) {
            if ($index % 2 == 0) {
                $column1->push($post); // Even indexes go to column 1
            } else {
                $column2->push($post); // Odd indexes go to column 2
            }
        }

        // Merge back in strict order
        $orderedPosts = $column1->concat($column2);

        if ($lastOddPost !== '') {
            $orderedPosts->push($lastOddPost);
        }
    @endphp

    <div class="columns-1 sm:columns-2 gap-6">
        @foreach ($orderedPosts as $post)
            <div class="break-inside-avoid mb-6">
                @include('_components.post-preview-inline')
            </div>
        @endforeach
    </div>

    @include('_components.newsletter-signup')
@stop
