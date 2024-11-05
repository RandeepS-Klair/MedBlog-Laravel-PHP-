<header class="flex items-center justify-between py-4 px-8 border-b border-gray-700 bg-gray-900">
    <div id="header-left" class="flex items-center">
        <a href="{{route('home')}}">
             <x-application-logo/>
        </a>
        <nav class="ml-12">
            <ul class="flex space-x-8">
                <li>
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200"
                        href="http://127.0.0.1:8000">
                        Home
                    </a>
                </li>
                <li>
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200"
                        href="http://127.0.0.1:8000/blog">
                        Blog
                    </a>
                </li>
                <li>
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200"
                        href="http://127.0.0.1:8000/about">
                        About Us
                    </a>
                </li>
                <li>
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200"
                        href="http://127.0.0.1:8000/contact">
                        Contact Us
                    </a>
                </li>
                <li>
                    <a class="text-sm font-medium text-gray-300 hover:text-white transition-colors duration-200"
                        href="http://127.0.0.1:8000/terms">
                        Terms
                    </a>
                </li>
            </ul>
        </nav>
    </div>
    <div id="header-right" class="flex items-center space-x-6">
        @guest
            @include('layouts.partials.header-right-guest')
        @endguest

        @auth()
            @include('layouts.partials.header-right-auth')
        @endauth
    </div>
</header>
