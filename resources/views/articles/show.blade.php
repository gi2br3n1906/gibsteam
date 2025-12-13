@extends('layouts.app')

@section('title', $article->title)

@section('content')

<!-- Article Header -->
<article class="pt-32 pb-20">
    <!-- Back Button -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-8">
        <a href="{{ route('articles.index') }}" 
           class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group">
            <svg class="mr-2 h-5 w-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
            Back to Articles
        </a>
    </div>

    <!-- Article Title & Meta -->
    <header class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
        <div class="text-center">
            <div class="text-primary-600 font-semibold mb-4">
                {{ $article->published_at->format('F d, Y') }}
            </div>
            <h1 class="text-4xl lg:text-5xl font-bold text-gray-900 mb-6 leading-tight">
                {{ $article->title }}
            </h1>
            <p class="text-xl text-gray-600 leading-relaxed">
                {{ $article->excerpt }}
            </p>
        </div>
    </header>

    <!-- Featured Image -->
    @if($article->image)
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 mb-12">
            <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
                <img src="{{ $article->image }}" 
                     alt="{{ $article->title }}" 
                     class="w-full h-full object-cover">
            </div>
        </div>
    @endif

    <!-- Article Content -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg prose-primary max-w-none
                    prose-headings:font-bold prose-headings:text-gray-900
                    prose-h1:text-4xl prose-h1:mb-6
                    prose-h2:text-3xl prose-h2:mt-12 prose-h2:mb-6
                    prose-h3:text-2xl prose-h3:mt-8 prose-h3:mb-4
                    prose-p:text-gray-700 prose-p:leading-relaxed prose-p:mb-6
                    prose-a:text-primary-600 prose-a:no-underline hover:prose-a:text-primary-700
                    prose-strong:text-gray-900 prose-strong:font-semibold
                    prose-code:text-primary-600 prose-code:bg-gray-100 prose-code:px-1.5 prose-code:py-0.5 prose-code:rounded prose-code:font-semibold prose-code:before:content-none prose-code:after:content-none
                    prose-pre:bg-gray-900 prose-pre:text-gray-100 prose-pre:rounded-xl prose-pre:shadow-lg
                    prose-ul:my-6 prose-ul:list-disc prose-ul:pl-6
                    prose-ol:my-6 prose-ol:list-decimal prose-ol:pl-6
                    prose-li:my-2 prose-li:text-gray-700
                    prose-blockquote:border-l-4 prose-blockquote:border-primary-500 prose-blockquote:pl-6 prose-blockquote:italic prose-blockquote:text-gray-700
                    prose-img:rounded-xl prose-img:shadow-lg">
            {!! Str::markdown($article->content) !!}
        </div>
    </div>

    <!-- Article Footer -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 mt-16 pt-8 border-t border-gray-200">
        <div class="flex flex-col sm:flex-row justify-between items-center gap-4">
            <a href="{{ route('articles.index') }}" 
               class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group">
                <svg class="mr-2 h-5 w-5 transform group-hover:-translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
                </svg>
                Back to Articles
            </a>
            
            <div class="text-gray-600 text-sm">
                Published on {{ $article->published_at->format('F d, Y') }}
            </div>
        </div>
    </div>
</article>

@endsection
