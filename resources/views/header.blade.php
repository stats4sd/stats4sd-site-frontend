<header class="absolute top-0 left-0 w-full z-10" x-data="{ open: false }">
    <div class="container mx-auto flex justify-between items-center py-4">
        <!-- Logo -->
        <div class="flex items-center space-x-4 min-w-[100px]">
            @if (!request()->is('/') && !request()->is('home'))
                <a href="/home">
                    <img src="/images/Stats4SD_logo.png" alt="Stats4SD logo" class="h-4 w-auto">
                </a>
            @endif
        </div>

        <!-- Hamburger Menu (visible on small screens) -->
        <button 
            class="sm:hidden text-gray-800 focus:outline-none" 
            x-on:click="open = !open">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>

        <!-- Nav Items (hidden on small screens) -->
        <nav class="hidden sm:flex">
            <ul class="flex space-x-6 font-semibold">
                <!-- What We Do Dropdown -->
                <li class="relative nav-item group">
                    <a href="/we-do" class="nav-link uppercase font-semibold flex items-center space-x-1">
                        <span>{{ t("What we do") }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="we-do-dropdown-menu">
                        <a class="we-do-dropdown-item" href="/we-do/sustainable-devlopment uppercase">{{ t("Sustainable development") }}</a>
                        <a class="we-do-dropdown-item" href="/we-do/research-methods uppercase">{{ t("Research methods and analysis") }}</a>
                        <a class="we-do-dropdown-item" href="/we-do/food-systems uppercase">{{ t("Agriculture and food systems") }}</a>
                        <a class="we-do-dropdown-item" href="/we-do/data-systems uppercase">{{ t("Data systems and platforms") }}</a>
                        <a class="we-do-dropdown-item" href="/we-do/m-and-e uppercase">{{ t("M&E and impact assessment") }}</a>
                        <a class="we-do-dropdown-item" href="/we-do/e-learning uppercase">{{ t("E-learning") }}</a>
                    </div>
                </li>
                <li><a href="/team" class="flex items-center uppercase">
                    {{ t("Our team") }}
                </a></li>
                <li><a href="/where-we-work" class="flex items-center uppercase">
                    {{ t("Where we work") }}
                </a></li>
                <li><a href="/about" class="flex items-center uppercase">{{ t("About us") }}
                </a></li>
                <li><a href="http://resources.stats4sdtest.online" class="flex items-center uppercase">
                    {{ t("Resources library") }}
                </a></li>
                 <!-- Language Dropdown -->
                 <li class="relative nav-item dropdown" x-data="{ langOpen: false }">
                    <a class="nav-link uppercase dropdown-toggle cursor-pointer flex items-center space-x-1"
                        role="button" aria-expanded="false" x-on:click="langOpen = !langOpen">
                        <span>{{ t("Change language") }}</span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-menu" x-show="langOpen" x-on:click.outside="langOpen = false" style="display:none">
                        <a class="dropdown-item" href="">English</a>
                        <a class="dropdown-item" href="{{ URL::current() . '?locale=es' }}">Español</a>
                        <a class="dropdown-item" href="{{ URL::current() . '?locale=fr' }}">Français</a>
                    </div>
                </li>
            </ul>
        </nav>
        
    </div>

    <!-- Nav Items (visible on small screens) -->
    <div 
        class="sm:hidden" 
        x-show="open"
        x-on:click.outside="open = false" 
        style="display: none;">
        <nav class="bg-white text-right">
            <ul class="flex flex-col space-y-2 px-6 pb-4">
                <li class="relative nav-item" x-data="{ weDoOpen: false }">
                    <div 
                        class="text-gray-800 uppercase"
                        x-on:click="weDoOpen = !weDoOpen">
                        {{ t("What we do") }}
                    </div>
                    <ul class="ml-4 text-sm" x-show="weDoOpen" x-transition x-cloak>
                        <li><a href="/we-do" class="text-gray-800 py-2">{{ t("Overview") }}</a></li>
                        <li><a href="/we-do/sustainable-devlopment" class="text-gray-800 py-2">{{ t("Sustainable development") }}</a></li>
                        <li><a href="/we-do/research-methods" class="text-gray-800 py-2">{{ t("Research methods and analysis") }}</a></li>
                        <li><a href="/we-do/food-systems" class="text-gray-800 py-2">{{ t("Agriculture and food systems") }}</a></li>
                        <li><a href="/we-do/data-systems" class="text-gray-800 py-2">{{ t("Data systems and platforms") }}</a></li>
                        <li><a href="/we-do/m-and-e" class="text-gray-800 py-2">{{ t("M&E and impact assessment") }}</a></li>
                        <li><a href="/we-do/e-learning" class="text-gray-800 py-2">{{ t("E-learning") }}</a></li>
                    </ul>
                </li>
                <li><a href="/team" class="text-gray-800 uppercase">{{ t("Our team") }}</a></li>
                <li><a href="/where-we-work" class="text-gray-800 uppercase">{{ t("Where we work") }}</a></li>
                <li><a href="/about" class="text-gray-800 uppercase">{{ t("About us") }}</a></li>
                <li><a href="/resources-library" class="text-gray-800 uppercase">{{ t("Resources library") }}</a></li>
                <li class="relative nav-item pt-2 text-gray-800 uppercase" x-data="{ langOpen: false }">
                    <a class="nav-link uppercase" role="button" x-on:click="langOpen = !langOpen">
                        {{ t("Change language") }}
                    </a>
                    <ul class="language-options" x-show="langOpen" x-on:click.outside="langOpen = false" style="display:none">
                        <li><a class="pt-2" href="{{ URL::current() . '?locale=en' }}">English</a></li>
                        <li><a class="py-2" href="{{ URL::current() . '?locale=es' }}">Español</a></li>
                        <li><a href="{{ URL::current() . '?locale=fr' }}">Français</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</header>
