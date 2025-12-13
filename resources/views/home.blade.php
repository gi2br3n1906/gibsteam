@extends('layouts.app')

@section('title', 'Home')

@section('content')

<!-- Hero Section -->
<section class="pt-32 pb-20 px-4 sm:px-6 lg:px-8 bg-gradient-to-b from-white to-gray-50">
    <div class="max-w-7xl mx-auto">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            
            <!-- Left: Text Content -->
            <div class="space-y-6">
                <!-- Badge -->
                <div class="inline-flex items-center px-4 py-2 bg-gradient-to-r from-primary-50 to-blue-50 text-primary-700 rounded-full text-sm font-semibold border border-primary-100">
                    <span class="mr-2">🚀</span>
                    3.80 GPA Informatics Student & Lab Assistant
                </div>

                <!-- Headline -->
                <h1 class="text-5xl lg:text-6xl font-bold text-gray-900 tracking-tight leading-tight">
                    From <span class="text-transparent bg-clip-text bg-gradient-to-r from-purple-600 to-primary-600">Algorithms</span> to 
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-primary-600 to-blue-600">Modern Web Solutions</span>
                </h1>

                <!-- Sub-headline -->
                <p class="text-xl text-gray-600 leading-relaxed max-w-2xl">
                    Hi, I'm <span class="font-semibold text-gray-900">Gibran Ahmad Maulana</span>, an Informatics student at Universitas Diponegoro. 
                    I bridge the gap between complex algorithmic thinking and elegant web development, combining deep CS fundamentals with modern full-stack expertise. 
                    As a Lab Assistant teaching core systems and algorithms, I bring both technical depth and adaptability to every project.
                </p>

                <!-- CTA Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 pt-4">
                    <a href="{{ url('/projects') }}" 
                       class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-white bg-primary-600 hover:bg-primary-700 rounded-xl shadow-lg hover:shadow-xl transform hover:-translate-y-1 transition-all duration-200">
                        View Projects
                        <svg class="ml-2 h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                        </svg>
                    </a>
                    <a href="{{ url('/articles') }}" 
                       class="inline-flex items-center justify-center px-8 py-4 text-base font-semibold text-gray-700 bg-white hover:bg-gray-50 border-2 border-gray-200 hover:border-gray-300 rounded-xl shadow-sm hover:shadow-md transform hover:-translate-y-1 transition-all duration-200">
                        Read Articles
                    </a>
                </div>
            </div>

            <!-- Right: Image/Illustration -->
            <div class="hidden lg:block">
                <div class="relative">
                    <div class="absolute inset-0 bg-gradient-to-r from-primary-400 to-blue-500 rounded-3xl transform rotate-3 opacity-10"></div>
                    <div class="relative bg-gradient-to-br from-primary-50 to-blue-50 rounded-3xl p-8 shadow-2xl">
                        <div class="aspect-square bg-white rounded-2xl shadow-inner flex items-center justify-center">
                            <svg class="w-64 h-64 text-primary-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                            </svg>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Featured Projects Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-white">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Featured Projects</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                A selection of my recent work showcasing modern web development
            </p>
        </div>

        <!-- Projects Grid -->
        <div class="grid md:grid-cols-2 gap-8">
            
            <!-- Project Card 1 -->
            <div class="group bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="aspect-video bg-gradient-to-br from-primary-100 to-blue-100 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-primary-600 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors">
                        E-Commerce Platform
                    </h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        A full-featured online store built with Laravel and Vue.js, featuring real-time inventory management and payment integration.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-red-50 text-red-700 text-sm font-medium rounded-lg">Laravel</span>
                        <span class="px-3 py-1 bg-green-50 text-green-700 text-sm font-medium rounded-lg">Vue.js</span>
                        <span class="px-3 py-1 bg-blue-50 text-blue-700 text-sm font-medium rounded-lg">Tailwind</span>
                    </div>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="group bg-white border border-gray-200 rounded-2xl overflow-hidden hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
                <div class="aspect-video bg-gradient-to-br from-purple-100 to-pink-100 relative overflow-hidden">
                    <div class="absolute inset-0 flex items-center justify-center">
                        <svg class="w-24 h-24 text-purple-600 opacity-50" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5c1.747 0 3.332.477 4.5 1.253v13C19.832 18.477 18.247 18 16.5 18c-1.746 0-3.332.477-4.5 1.253" />
                        </svg>
                    </div>
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-primary-600 transition-colors">
                        Learning Management System
                    </h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        An interactive platform for online courses with video streaming, quizzes, and progress tracking capabilities.
                    </p>
                    <div class="flex flex-wrap gap-2">
                        <span class="px-3 py-1 bg-red-50 text-red-700 text-sm font-medium rounded-lg">Laravel</span>
                        <span class="px-3 py-1 bg-cyan-50 text-cyan-700 text-sm font-medium rounded-lg">React</span>
                        <span class="px-3 py-1 bg-orange-50 text-orange-700 text-sm font-medium rounded-lg">MySQL</span>
                    </div>
                </div>
            </div>
        </div>

        <!-- View All Link -->
        <div class="text-center mt-12">
            <a href="{{ url('/projects') }}" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold text-lg group">
                View all projects
                <svg class="ml-2 h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Latest Articles Section -->
<section class="py-20 px-4 sm:px-6 lg:px-8 bg-gray-50">
    <div class="max-w-7xl mx-auto">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-gray-900 mb-4">Latest Articles</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                Thoughts on web development, tutorials, and tech insights
            </p>
        </div>

        <!-- Articles Grid -->
        <div class="grid md:grid-cols-3 gap-8">
            
            <!-- Article 1 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="text-sm text-primary-600 font-semibold mb-2">Dec 10, 2024</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-primary-600 transition-colors">
                        <a href="#">Getting Started with Laravel 11</a>
                    </h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Explore the new features and improvements in Laravel 11 and how to migrate your existing projects.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium group">
                        Read more
                        <svg class="ml-1 h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 2 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="text-sm text-primary-600 font-semibold mb-2">Dec 5, 2024</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-primary-600 transition-colors">
                        <a href="#">Tailwind CSS Best Practices</a>
                    </h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        Learn how to write maintainable and scalable Tailwind CSS code for large-scale applications.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium group">
                        Read more
                        <svg class="ml-1 h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>

            <!-- Article 3 -->
            <article class="bg-white rounded-xl overflow-hidden shadow-sm hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="p-6">
                    <div class="text-sm text-primary-600 font-semibold mb-2">Nov 28, 2024</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-3 hover:text-primary-600 transition-colors">
                        <a href="#">Building RESTful APIs</a>
                    </h3>
                    <p class="text-gray-600 mb-4 leading-relaxed">
                        A comprehensive guide to designing and implementing robust RESTful APIs with Laravel.
                    </p>
                    <a href="#" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-medium group">
                        Read more
                        <svg class="ml-1 h-4 w-4 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </a>
                </div>
            </article>
        </div>

        <!-- View All Link -->
        <div class="text-center mt-12">
            <a href="{{ url('/articles') }}" class="inline-flex items-center text-primary-600 hover:text-primary-700 font-semibold text-lg group">
                View all articles
                <svg class="ml-2 h-5 w-5 transform group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
                </svg>
            </a>
        </div>
    </div>
</section>

<!-- Tech Stack Marquee -->
<section class="py-16 px-4 sm:px-6 lg:px-8 bg-white border-t border-b border-gray-100 overflow-hidden">
    <div class="mb-8 text-center">
        <h2 class="text-2xl font-bold text-gray-900">Technologies I Work With</h2>
    </div>
    
    <div class="relative">
        <div class="flex space-x-16 animate-marquee">
            <!-- Tech Icons (Duplicated for seamless loop) -->
            <div class="flex space-x-16 flex-shrink-0">
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-red-600" viewBox="0 0 24 24" fill="currentColor"><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">Laravel</span>
                </div>
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-cyan-500" viewBox="0 0 24 24" fill="currentColor"><path d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">React</span>
                </div>
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">Tailwind</span>
                </div>
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-blue-700" viewBox="0 0 24 24" fill="currentColor"><path d="M0 12v12h24V0H0zm19.341-.956c.61.152 1.074.423 1.501.865.221.236.549.666.575.77.008.03-1.036.73-1.668 1.123-.023.015-.115-.084-.217-.236-.31-.45-.633-.644-1.128-.678-.728-.05-1.196.331-1.192.967a.88.88 0 00.102.45c.16.331.458.53 1.39.933 1.719.74 2.454 1.227 2.911 1.92.51.773.625 2.008.278 2.926-.38.998-1.325 1.676-2.655 1.9-.411.073-1.386.062-1.828-.018-.964-.172-1.878-.648-2.442-1.273-.221-.244-.651-.88-.625-.925.011-.016.11-.077.22-.141.108-.061.511-.294.892-.515l.69-.4.145.214c.202.308.643.731.91.872.766.404 1.817.347 2.335-.118a.883.883 0 00.313-.72c0-.278-.035-.4-.18-.61-.186-.266-.567-.49-1.649-.96-1.238-.533-1.771-.864-2.259-1.39a3.165 3.165 0 01-.659-1.2c-.091-.339-.114-1.189-.042-1.531.255-1.197 1.158-2.03 2.461-2.278.423-.08 1.406-.05 1.821.053zm-5.634 1.002l.008.983H10.59v8.876H8.38v-8.876H5.258v-.964c0-.534.011-.98.026-.99.012-.016 1.913-.024 4.217-.02l4.195.012z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">TypeScript</span>
                </div>
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-blue-600" viewBox="0 0 24 24" fill="currentColor"><path d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z"/><path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">MySQL</span>
                </div>
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-gray-700" viewBox="0 0 24 24" fill="currentColor"><path d="M11.998 0c-1.294 0-2.348 1.054-2.348 2.348 0 1.294 1.054 2.348 2.348 2.348s2.348-1.054 2.348-2.348C14.346 1.054 13.292 0 11.998 0zM5.241 4.696c-1.294 0-2.348 1.054-2.348 2.348 0 1.294 1.054 2.348 2.348 2.348 1.294 0 2.348-1.054 2.348-2.348 0-1.294-1.054-2.348-2.348-2.348zm13.514 0c-1.294 0-2.348 1.054-2.348 2.348 0 1.294 1.054 2.348 2.348 2.348 1.294 0 2.348-1.054 2.348-2.348 0-1.294-1.054-2.348-2.348-2.348zM5.241 14.608c-1.294 0-2.348 1.054-2.348 2.348 0 1.294 1.054 2.348 2.348 2.348 1.294 0 2.348-1.054 2.348-2.348 0-1.294-1.054-2.348-2.348-2.348zm13.514 0c-1.294 0-2.348 1.054-2.348 2.348 0 1.294 1.054 2.348 2.348 2.348 1.294 0 2.348-1.054 2.348-2.348 0-1.294-1.054-2.348-2.348-2.348zM11.998 19.304c-1.294 0-2.348 1.054-2.348 2.348C9.65 22.946 10.704 24 11.998 24s2.348-1.054 2.348-2.348c0-1.294-1.054-2.348-2.348-2.348z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">Git</span>
                </div>
            </div>
            <!-- Duplicate for seamless loop -->
            <div class="flex space-x-16 flex-shrink-0" aria-hidden="true">
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-red-600" viewBox="0 0 24 24" fill="currentColor"><path d="M23.642 5.43a.364.364 0 01.014.1v5.149c0 .135-.073.26-.189.326l-4.323 2.49v4.934a.378.378 0 01-.188.326L9.93 23.949a.316.316 0 01-.066.027c-.008.002-.016.008-.024.01a.348.348 0 01-.192 0c-.011-.002-.02-.008-.03-.012-.02-.008-.042-.014-.062-.025L.533 18.755a.376.376 0 01-.189-.326V2.974c0-.033.005-.066.014-.098.003-.012.01-.02.014-.032a.369.369 0 01.023-.058c.004-.013.015-.022.023-.033l.033-.045c.012-.01.025-.018.037-.027.014-.012.027-.024.041-.034H.53L5.043.05a.375.375 0 01.375 0L9.93 2.647h.002c.015.01.027.021.04.033l.038.027c.013.014.02.03.033.045.008.011.02.021.025.033.01.02.017.038.024.058.003.011.01.021.013.032.01.031.014.064.014.098v9.652l3.76-2.164V5.527c0-.033.004-.066.013-.098.003-.01.01-.02.013-.032a.487.487 0 01.024-.059c.007-.012.018-.02.025-.033.012-.015.021-.03.033-.043.012-.012.025-.02.037-.028.014-.01.026-.023.041-.032h.001l4.513-2.598a.375.375 0 01.375 0l4.513 2.598c.016.01.027.021.042.031.012.01.025.018.036.028.013.014.022.03.034.044.008.012.019.021.024.033.011.02.018.04.024.06.006.01.012.021.015.032zm-.74 5.032V6.179l-1.578.908-2.182 1.256v4.283zm-4.51 7.75v-4.287l-2.147 1.225-6.126 3.498v4.325zM1.093 3.624v14.588l8.273 4.761v-4.325l-4.322-2.445-.002-.003H5.04c-.014-.01-.025-.021-.04-.031-.011-.01-.024-.018-.035-.027l-.001-.002c-.013-.012-.021-.025-.031-.04-.01-.011-.021-.022-.028-.036h-.002c-.008-.014-.013-.031-.02-.047-.006-.016-.014-.027-.018-.043a.49.49 0 01-.008-.057c-.002-.014-.006-.027-.006-.041V5.789l-2.18-1.257zM5.23.81L1.47 2.974l3.76 2.164 3.758-2.164zm1.956 13.505l2.182-1.256V3.624l-1.58.91-2.182 1.255v9.435zm11.581-10.95l-3.76 2.163 3.76 2.163 3.759-2.164zm-.376 4.978L16.21 7.087 14.63 6.18v4.283l2.182 1.256 1.58.908zm-8.65 9.654l5.514-3.148 2.756-1.572-3.757-2.163-4.323 2.489-3.941 2.27z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">Laravel</span>
                </div>
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-cyan-500" viewBox="0 0 24 24" fill="currentColor"><path d="M14.23 12.004a2.236 2.236 0 0 1-2.235 2.236 2.236 2.236 0 0 1-2.236-2.236 2.236 2.236 0 0 1 2.235-2.236 2.236 2.236 0 0 1 2.236 2.236zm2.648-10.69c-1.346 0-3.107.96-4.888 2.622-1.78-1.653-3.542-2.602-4.887-2.602-.41 0-.783.093-1.106.278-1.375.793-1.683 3.264-.973 6.365C1.98 8.917 0 10.42 0 12.004c0 1.59 1.99 3.097 5.043 4.03-.704 3.113-.39 5.588.988 6.38.32.187.69.275 1.102.275 1.345 0 3.107-.96 4.888-2.624 1.78 1.654 3.542 2.603 4.887 2.603.41 0 .783-.09 1.106-.275 1.374-.792 1.683-3.263.973-6.365C22.02 15.096 24 13.59 24 12.004c0-1.59-1.99-3.097-5.043-4.032.704-3.11.39-5.587-.988-6.38-.318-.184-.688-.277-1.092-.278zm-.005 1.09v.006c.225 0 .406.044.558.127.666.382.955 1.835.73 3.704-.054.46-.142.945-.25 1.44-.96-.236-2.006-.417-3.107-.534-.66-.905-1.345-1.727-2.035-2.447 1.592-1.48 3.087-2.292 4.105-2.295zm-9.77.02c1.012 0 2.514.808 4.11 2.28-.686.72-1.37 1.537-2.02 2.442-1.107.117-2.154.298-3.113.538-.112-.49-.195-.964-.254-1.42-.23-1.868.054-3.32.714-3.707.19-.09.4-.127.563-.132zm4.882 3.05c.455.468.91.992 1.36 1.564-.44-.02-.89-.034-1.345-.034-.46 0-.915.01-1.36.034.44-.572.895-1.096 1.345-1.565zM12 8.1c.74 0 1.477.034 2.202.093.406.582.802 1.203 1.183 1.86.372.64.71 1.29 1.018 1.946-.308.655-.646 1.31-1.013 1.95-.38.66-.773 1.288-1.18 1.87-.728.063-1.466.098-2.21.098-.74 0-1.477-.035-2.202-.093-.406-.582-.802-1.204-1.183-1.86-.372-.64-.71-1.29-1.018-1.946.303-.657.646-1.313 1.013-1.954.38-.66.773-1.286 1.18-1.868.728-.064 1.466-.098 2.21-.098zm-3.635.254c-.24.377-.48.763-.704 1.16-.225.39-.435.782-.635 1.174-.265-.656-.49-1.31-.676-1.947.64-.15 1.315-.283 2.015-.386zm7.26 0c.695.103 1.365.23 2.006.387-.18.632-.405 1.282-.66 1.933-.2-.39-.41-.783-.64-1.174-.225-.392-.465-.774-.705-1.146zm3.063.675c.484.15.944.317 1.375.498 1.732.74 2.852 1.708 2.852 2.476-.005.768-1.125 1.74-2.857 2.475-.42.18-.88.342-1.355.493-.28-.958-.646-1.956-1.1-2.98.45-1.017.81-2.01 1.085-2.964zm-13.395.004c.278.96.645 1.957 1.1 2.98-.45 1.017-.812 2.01-1.086 2.964-.484-.15-.944-.318-1.37-.5-1.732-.737-2.852-1.706-2.852-2.474 0-.768 1.12-1.742 2.852-2.476.42-.18.88-.342 1.356-.494zm11.678 4.28c.265.657.49 1.312.676 1.948-.64.157-1.316.29-2.016.39.24-.375.48-.762.705-1.158.225-.39.435-.788.636-1.18zm-9.945.02c.2.392.41.783.64 1.175.23.39.465.772.705 1.143-.695-.102-1.365-.23-2.006-.386.18-.63.406-1.282.66-1.933zM17.92 16.32c.112.493.2.968.254 1.423.23 1.868-.054 3.32-.714 3.708-.147.09-.338.128-.563.128-1.012 0-2.514-.807-4.11-2.28.686-.72 1.37-1.536 2.02-2.44 1.107-.118 2.154-.3 3.113-.54zm-11.83.01c.96.234 2.006.415 3.107.532.66.905 1.345 1.727 2.035 2.446-1.595 1.483-3.092 2.295-4.11 2.295-.22-.005-.406-.05-.553-.132-.666-.38-.955-1.834-.73-3.703.054-.46.142-.944.25-1.438zm4.56.64c.44.02.89.034 1.345.034.46 0 .915-.01 1.36-.034-.44.572-.895 1.095-1.345 1.565-.455-.47-.91-.993-1.36-1.565z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">React</span>
                </div>
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-blue-500" viewBox="0 0 24 24" fill="currentColor"><path d="M12.001 4.8c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624C13.666 10.618 15.027 12 18.001 12c3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C16.337 6.182 14.976 4.8 12.001 4.8zm-6 7.2c-3.2 0-5.2 1.6-6 4.8 1.2-1.6 2.6-2.2 4.2-1.8.913.228 1.565.89 2.288 1.624 1.177 1.194 2.538 2.576 5.512 2.576 3.2 0 5.2-1.6 6-4.8-1.2 1.6-2.6 2.2-4.2 1.8-.913-.228-1.565-.89-2.288-1.624C10.337 13.382 8.976 12 6.001 12z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">Tailwind</span>
                </div>
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-blue-700" viewBox="0 0 24 24" fill="currentColor"><path d="M0 12v12h24V0H0zm19.341-.956c.61.152 1.074.423 1.501.865.221.236.549.666.575.77.008.03-1.036.73-1.668 1.123-.023.015-.115-.084-.217-.236-.31-.45-.633-.644-1.128-.678-.728-.05-1.196.331-1.192.967a.88.88 0 00.102.45c.16.331.458.53 1.39.933 1.719.74 2.454 1.227 2.911 1.92.51.773.625 2.008.278 2.926-.38.998-1.325 1.676-2.655 1.9-.411.073-1.386.062-1.828-.018-.964-.172-1.878-.648-2.442-1.273-.221-.244-.651-.88-.625-.925.011-.016.11-.077.22-.141.108-.061.511-.294.892-.515l.69-.4.145.214c.202.308.643.731.91.872.766.404 1.817.347 2.335-.118a.883.883 0 00.313-.72c0-.278-.035-.4-.18-.61-.186-.266-.567-.49-1.649-.96-1.238-.533-1.771-.864-2.259-1.39a3.165 3.165 0 01-.659-1.2c-.091-.339-.114-1.189-.042-1.531.255-1.197 1.158-2.03 2.461-2.278.423-.08 1.406-.05 1.821.053zm-5.634 1.002l.008.983H10.59v8.876H8.38v-8.876H5.258v-.964c0-.534.011-.98.026-.99.012-.016 1.913-.024 4.217-.02l4.195.012z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">TypeScript</span>
                </div>
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-blue-600" viewBox="0 0 24 24" fill="currentColor"><path d="M5.625 1.5c-1.036 0-1.875.84-1.875 1.875v17.25c0 1.035.84 1.875 1.875 1.875h12.75c1.035 0 1.875-.84 1.875-1.875V12.75A3.75 3.75 0 0016.5 9h-1.875a1.875 1.875 0 01-1.875-1.875V5.25A3.75 3.75 0 009 1.5H5.625zM7.5 15a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5A.75.75 0 017.5 15zm.75 2.25a.75.75 0 000 1.5H12a.75.75 0 000-1.5H8.25z"/><path d="M12.971 1.816A5.23 5.23 0 0114.25 5.25v1.875c0 .207.168.375.375.375H16.5a5.23 5.23 0 013.434 1.279 9.768 9.768 0 00-6.963-6.963z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">MySQL</span>
                </div>
                <div class="flex flex-col items-center grayscale hover:grayscale-0 transition-all duration-300 cursor-pointer">
                    <svg class="w-16 h-16 text-gray-700" viewBox="0 0 24 24" fill="currentColor"><path d="M11.998 0c-1.294 0-2.348 1.054-2.348 2.348 0 1.294 1.054 2.348 2.348 2.348s2.348-1.054 2.348-2.348C14.346 1.054 13.292 0 11.998 0zM5.241 4.696c-1.294 0-2.348 1.054-2.348 2.348 0 1.294 1.054 2.348 2.348 2.348 1.294 0 2.348-1.054 2.348-2.348 0-1.294-1.054-2.348-2.348-2.348zm13.514 0c-1.294 0-2.348 1.054-2.348 2.348 0 1.294 1.054 2.348 2.348 2.348 1.294 0 2.348-1.054 2.348-2.348 0-1.294-1.054-2.348-2.348-2.348zM5.241 14.608c-1.294 0-2.348 1.054-2.348 2.348 0 1.294 1.054 2.348 2.348 2.348 1.294 0 2.348-1.054 2.348-2.348 0-1.294-1.054-2.348-2.348-2.348zm13.514 0c-1.294 0-2.348 1.054-2.348 2.348 0 1.294 1.054 2.348 2.348 2.348 1.294 0 2.348-1.054 2.348-2.348 0-1.294-1.054-2.348-2.348-2.348zM11.998 19.304c-1.294 0-2.348 1.054-2.348 2.348C9.65 22.946 10.704 24 11.998 24s2.348-1.054 2.348-2.348c0-1.294-1.054-2.348-2.348-2.348z"/></svg>
                    <span class="mt-2 text-sm font-medium text-gray-700">Git</span>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
