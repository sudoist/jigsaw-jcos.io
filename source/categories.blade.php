---
title: Categories
description: List of site categories
---
@extends('_layouts.main')

@section('body')
    <h1>Categories</h1>

    <hr class="border-b my-6">

<div class="">
    <div class="grid grid-cols-2 gap-4">

        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-none px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="min-w-0 flex-1">
                <a href="/posts/categories/anything-goes/" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-2xl lg:text-4xl font-bold text-[#a9a9b3]">Anything Goes</p>
                    <p class="truncate text-sm text-gray-400">All posts that does not fit in any specific topic.</p>
                </a>
            </div>
        </div>

        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-none px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="min-w-0 flex-1">
                <a href="/posts/categories/dev/" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-2xl lg:text-4xl font-bold text-[#a9a9b3]">Development</p>
                    <p class="truncate text-sm text-gray-400">Posts about development and tech related topics.</p>
                </a>
            </div>
        </div>

        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-none px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="min-w-0 flex-1">
                <a href="/posts/categories/gaming/" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-2xl lg:text-4xl font-bold text-[#a9a9b3]">Gaming</p>
                    <p class="truncate text-sm text-gray-400">Posts about gaming related topics.</p>
                </a>
            </div>
        </div>

        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-none px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="min-w-0 flex-1">
                <a href="/posts/categories/gunpla/" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-2xl lg:text-4xl font-bold text-[#a9a9b3]">Gunpla</p>
                    <p class="truncate text-sm text-gray-400">Posts about gunpla builds, edits and paints.</p>
                </a>
            </div>
        </div>

        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-none px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="min-w-0 flex-1">
                <a href="/posts/categories/manga/" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-2xl lg:text-4xl font-bold text-[#a9a9b3]">Manga</p>
                    <p class="truncate text-sm text-gray-400">Posts about manga(Manga is from Japan) related topics.</p>
                </a>
            </div>
        </div>

        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-none px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="min-w-0 flex-1">
                <a href="/posts/categories/manhwa/" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-2xl lg:text-4xl font-bold text-[#a9a9b3]">Manhwa</p>
                    <p class="truncate text-sm text-gray-400">Posts about manhwa(Manhwa is from South Korea) related topics.</p>
                </a>
            </div>
        </div>

        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-none px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="min-w-0 flex-1">
                <a href="/posts/categories/photography/" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-2xl lg:text-4xl font-bold text-[#a9a9b3]">Photography</p>
                    <p class="truncate text-sm text-gray-400">Posts about photography related topics.</p>
                </a>
            </div>
        </div>

        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-none px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="min-w-0 flex-1">
                <a href="/posts/categories/project/" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-2xl lg:text-4xl font-bold text-[#a9a9b3]">Project</p>
                    <p class="truncate text-sm text-gray-400">Posts about my projects. Includes both personal and work related.</p>
                </a>
            </div>
        </div>

        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-none px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="min-w-0 flex-1">
                <a href="/posts/categories/reading/" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-2xl lg:text-4xl font-bold text-[#a9a9b3]">Reading</p>
                    <p class="truncate text-sm text-gray-400">Posts about reading related topics. Books, manga, manhwa and everything else.</p>
                </a>
            </div>
        </div>

        <div class="relative flex items-center space-x-3 rounded-lg border border-gray-300 bg-none px-6 py-5 shadow-sm focus-within:ring-2 focus-within:ring-indigo-500 focus-within:ring-offset-2 hover:border-gray-400">
            <div class="min-w-0 flex-1">
                <a href="/posts/categories/travel/" class="focus:outline-none">
                    <span class="absolute inset-0" aria-hidden="true"></span>
                    <p class="text-2xl lg:text-4xl font-bold text-[#a9a9b3]">Travel</p>
                    <p class="truncate text-sm text-gray-400">Posts about travel related topics.</p>
                </a>
            </div>
        </div>

    </div>
</div>
@endsection
