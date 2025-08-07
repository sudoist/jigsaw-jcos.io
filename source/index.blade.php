@extends('_layouts.main')

@section('body')
    <h1>Handpicked</h1>

    <hr class="border-b my-6">

    <div class="columns-1 sm:columns-2 gap-6">

        @foreach ($posts->where('featured', true)->take(4) as $featuredPost)
            <div class="break-inside-avoid mb-6">

                <div class="flex flex-col mb-4">
                    @if ($featuredPost->cover_image)
                        <a
                                href="{{ $featuredPost->getUrl() }}"
                                title="Read more - {{ $featuredPost->title }}"
                                class="text-[#a9a9b3] font-extrabold hover:text-[#b99128]"
                        >
                            <img src="{{ $featuredPost->cover_image }}" alt="{{ $featuredPost->title }} cover image"
                                 class="mb-6 w-full rounded-2xl">
                        </a>
                    @endif

                    <p class="text-gray-200 font-medium my-2">
                        {{ $featuredPost->getDate()->format('F j, Y') }}
                    </p>

                    <h2 class="text-3xl mt-0">
                        <a
                                href="{{ $featuredPost->getUrl() }}"
                                title="Read more - {{ $featuredPost->title }}"
                                class="text-[#a9a9b3] font-extrabold hover:text-[#b99128]"
                        >{{ $featuredPost->title }}</a>
                    </h2>

                    <p class="mb-4 mt-0 text-gray-400">{{ $featuredPost->description }}</p>
                </div>

            </div>
        @endforeach
    </div>

    @include('_components.newsletter-signup')

    @php
        // Get non-featured posts & sort by date descending
        $posts = $posts->where('featured', false)->take(8)->sortByDesc('date')->values();

        $column1 = collect();
        $column2 = collect();

        // Distribute left-right order
        foreach ($posts as $index => $post) {
            if ($index % 2 == 0) {
                $column1->push($post); // Even indexes go to column 1
            } else {
                $column2->push($post); // Odd indexes go to column 2
            }
        }

        // Merge back in strict order
        $orderedPosts = $column1->concat($column2);
    @endphp

    <h1>Recent Posts</h1>

    <hr class="border-b my-6">

    <div class="columns-1 sm:columns-2 gap-6">
        @foreach ($orderedPosts as $post)
            <div class="break-inside-avoid mb-6">
                @include('_components.post-preview-inline')
            </div>
        @endforeach
    </div>

@stop
