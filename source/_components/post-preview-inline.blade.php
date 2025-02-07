<div class="flex flex-col mb-4">
    <p class="text-gray-200 font-medium my-2">
        {{ $post->getDate()->format('F j, Y') }}
    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-[#a9a9b3] font-extrabold hover:text-[#b99128]"
        >{{ $post->title }}</a>
    </h2>

    <p class="mb-4 mt-0 text-gray-400">{{ $post->description }}</p>
</div>
