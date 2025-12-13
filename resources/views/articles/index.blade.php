@extends('layouts.app')

@section('title', 'Articles')

@section('content')

<!-- Page Header -->
<section class="pt-32 pb-16 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto text-center">
        <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 mb-6">Articles</h1>
        <p class="text-xl text-gray-600 max-w-2xl mx-auto">
            Thoughts on web development, tutorials, and tech insights
        </p>
    </div>
</section>

<!-- Articles Grid -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        @if($articles->isEmpty())
            <div class="text-center py-20">
                <svg class="mx-auto h-24 w-24 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                </svg>
                <h3 class="mt-6 text-2xl font-semibold text-gray-900">No articles yet</h3>
                <p class="mt-2 text-gray-600">Check back soon for new content!</p>
            </div>
        @else
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($articles as $article)
                    <article class="bg-white rounded-2xl overflow-hidden shadow-sm hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
                        <!-- Article Image -->
                        @if($article->image)
                            <div class="aspect-video overflow-hidden bg-gray-100">
                                <img src="{{ $article->image }}" 
                                     alt="{{ $article->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-300">
                            </div>
                        @else
                            <div class="aspect-video bg-gradient-to-br from-primary-100 to-blue-100 flex items-center justify-center">
                                <svg class="w-24 h-24 text-primary-600 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                </svg>
                            </div>
                        @endif

                        <!-- Article Content -->
                        <div class="p-6">
                            <!-- Date -->
                            <div class="text-sm text-primary-600 font-semibold mb-3">
                                {{ $article->published_at->format('M d, Y') }}
                            </div>

                            <!-- Title -->
                            <h2 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors line-clamp-2">
                                <a href="{{ route('articles.show', $article->slug) }}">
                                    {{ $article->title }}
                                </a>
                            </h2>

                            <!-- Excerpt -->
                            <p class="text-gray-600 mb-4 leading-relaxed line-clamp-3">
                                {{ $article->excerpt }}
                            </p>

                            <!-- Read More Link -->
                            <a href="{{ route('articles.show', $article->slug) }}" 
                               class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold group/link">
                                Read Article
                                <svg class="ml-2 h-5 w-5 transform group-hover/link:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                                </svg>
                            </a>
                        </div>
                    </article>
                @endforeach
            </div>
        @endif
    </div>
</section>

@endsection
