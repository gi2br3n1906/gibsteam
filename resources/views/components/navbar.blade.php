<nav x-data="{ open: false, scrolled: false }" 
     @scroll.window="scrolled = window.pageYOffset > 20"
     :class="scrolled ? 'glass shadow-md' : 'bg-white'"
     class="fixed top-0 left-0 right-0 z-50 transition-all duration-300">
    
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16 lg:h-20">
            
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="{{ url('/') }}" class="text-2xl font-bold tracking-tight text-gray-900 hover:text-primary-600 transition-colors duration-200">
                    GibsTeam<span class="text-primary-600">.site</span>
                </a>
            </div>

            <!-- Desktop Menu -->
            <div class="hidden md:flex items-center space-x-1 lg:space-x-2">
                <a href="{{ url('/') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                    Beranda
                </a>
                <a href="{{ url('/about') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                    Tentang Saya
                </a>
                <a href="{{ url('/projects') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                    Proyek
                </a>
                <a href="{{ url('/articles') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                    Artikel
                </a>
                <a href="{{ url('/tech-stack') }}" class="px-4 py-2 text-sm font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-lg transition-all duration-200">
                    Teknologi
                </a>
                <a href="{{ url('/contact') }}" class="ml-4 px-5 py-2.5 text-sm font-semibold text-white bg-primary-600 hover:bg-primary-700 rounded-lg shadow-sm hover:shadow-md transform hover:-translate-y-0.5 transition-all duration-200">
                    Kontak
                </a>
            </div>

            <!-- Mobile Menu Button -->
            <div class="md:hidden">
                <button @click="open = !open" type="button" class="inline-flex items-center justify-center p-2 rounded-lg text-gray-700 hover:text-primary-600 hover:bg-gray-50 focus:outline-none transition-colors duration-200">
                    <svg class="h-6 w-6" :class="{'hidden': open, 'block': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                    </svg>
                    <svg class="h-6 w-6" :class="{'block': open, 'hidden': !open }" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform scale-95"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-95"
         class="md:hidden bg-white border-t border-gray-100 shadow-lg">
        <div class="px-4 pt-2 pb-4 space-y-1">
            <a href="{{ url('/') }}" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-lg transition-colors duration-200">
                Beranda
            </a>
            <a href="{{ url('/about') }}" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-lg transition-colors duration-200">
                Tentang Saya
            </a>
            <a href="{{ url('/projects') }}" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-lg transition-colors duration-200">
                Proyek
            </a>
            <a href="{{ url('/articles') }}" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-lg transition-colors duration-200">
                Artikel
            </a>
            <a href="{{ url('/tech-stack') }}" class="block px-4 py-3 text-base font-medium text-gray-700 hover:text-primary-600 hover:bg-gray-50 rounded-lg transition-colors duration-200">
                Teknologi
            </a>
            <a href="{{ url('/contact') }}" class="block mx-4 mt-4 px-4 py-3 text-center text-base font-semibold text-white bg-primary-600 hover:bg-primary-700 rounded-lg shadow-sm transition-colors duration-200">
                Kontak
            </a>
        </div>
    </div>
</nav>
