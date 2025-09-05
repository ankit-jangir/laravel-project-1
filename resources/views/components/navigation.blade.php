<nav x-data="{ open: false, dropdownOpen: false, scrolled: false, mobileProductsOpen: false }"
     @scroll.window="scrolled = (window.pageYOffset > 50)"
     class="fixed w-full z-30 transition-all duration-300"
     :class="{ 'bg-transparent': !scrolled, 'bg-white shadow-md': scrolled }">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-20">
            <!-- Logo -->
            <div class="flex-shrink-0">
                <a href="/" class="flex items-center">
                    <img class="h-8 w-auto" src="{{ asset('images/icon.png') }}" alt="Laxmi and Sons">
                </a>
            </div>

            <!-- Centered Navigation -->
            <div class="hidden md:flex justify-center flex-grow">
                 <div class="bg-white/30 backdrop-blur-sm rounded-full px-4 py-2">
                     <div class="flex items-center space-x-2">
                        <a href="/" class="px-3 py-2 rounded-full text-sm font-medium text-green-500 hover:text-green-700">Home</a>
                        <a href="/about-us" class="px-3 py-2 rounded-full text-sm font-medium text-green-500 hover:text-green-700">About Us</a>
                        <!-- Products Dropdown -->
                        <div @mouseenter="dropdownOpen = true" @mouseleave.debounce.200ms="dropdownOpen = false" class="relative">
                            <button class="px-3 py-2 rounded-full text-sm font-medium flex items-center text-green-500 hover:text-green-700">
                                <span>Products</span>
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                            <div x-show="dropdownOpen" x-transition class="absolute mt-2 w-64 rounded-md shadow-lg z-50" style="display: none;">
                                <div class="py-1 rounded-md shadow-xs" :class="{'bg-black': !scrolled, 'bg-white': scrolled}">
                                    <a href="{{ route('products.category', ['category' => 'thermocouples']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Thermocouples</a>
                                    <a href="{{ route('products.category', ['category' => 'rtd']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Resistance Temperature Detector</a>
                                    <a href="{{ route('products.category', ['category' => 'thermowells']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Thermowells & Accessories</a>
                                    <a href="{{ route('products.category', ['category' => 'cables']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Cables And Wires</a>
                                    <a href="{{ route('products.category', ['category' => 'mi-cables']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">MI Cables</a>
                                    <a href="{{ route('products.category', ['category' => 'alloys']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Nickel And Thermocouple Alloy</a>
                                    <a href="{{ route('products.category', ['category' => 'pyrometers']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Pyrometers</a>
                                    <a href="{{ route('products.category', ['category' => 'heaters']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Industrial Heaters</a>
                                    <a href="{{ route('products.category', ['category' => 'transmitters']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Pressure Transmitter</a>
                                    <a href="{{ route('products.category', ['category' => 'gauges']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Temperature / Pressure Gauges</a>
                                    <a href="{{ route('products.category', ['category' => 'temp-transmitters']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Temperature Transmitters</a>
                                    <a href="{{ route('products.category', ['category' => 'connectors']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Connectors (RTB / Thermocouple)</a>
                                    <a href="{{ route('products.category', ['category' => 'controllers']) }}" class="block px-4 py-2 text-sm" :class="{'text-white hover:bg-gray-800': !scrolled, 'text-gray-700 hover:bg-gray-100': scrolled}">Digital Controllers And Indicator</a>
                                </div>
                            </div>
                        </div>
                        <a href="/contact" class="px-3 py-2 rounded-full text-sm font-medium text-green-500 hover:text-green-700">Contact</a>
                     </div>
                 </div>
            </div>

            <!-- Let's Talk Button -->
            <div class="hidden md:flex items-center">
                 <a href="/contact"
                    class="rounded-full py-2 px-6 font-semibold border-2 transition duration-300 flex items-center"
                    :class="{
                        'bg-green-500 border-green-500 text-white hover:bg-green-600': !scrolled,
                        'border-green-500 hover:bg-green-500 text-green-500 hover:text-white': scrolled
                    }">
                    Let's talk
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                 </a>
            </div>

            <!-- Mobile menu button -->
            <div class="-mr-2 flex md:hidden">
                <button @click="open = !open" class="inline-flex items-center justify-center p-2 rounded-md text-green-500">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile menu -->
    <div :class="{'block': open, 'hidden': !open}" class="hidden md:hidden bg-white">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
            <a href="/" class="block px-3 py-2 rounded-md text-base font-medium text-green-800 hover:bg-gray-100">Home</a>
            <a href="/about-us" class="block px-3 py-2 rounded-md text-base font-medium text-green-800 hover:bg-gray-100">About Us</a>
            
            <!-- Products Dropdown for Mobile -->
            <div>
                <button @click="mobileProductsOpen = !mobileProductsOpen" class="w-full text-left block px-3 py-2 rounded-md text-base font-medium text-green-800 hover:bg-gray-100">
                    <span class="flex justify-between items-center">
                        Products
                        <svg class="w-5 h-5 transition-transform duration-200" :class="{'transform rotate-180': mobileProductsOpen}" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
                    </span>
                </button>
                <div x-show="mobileProductsOpen" x-transition class="pl-4 mt-2 space-y-1" style="display: none;">
                    <a href="{{ route('products.category', ['category' => 'thermocouples']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Thermocouples</a>
                    <a href="{{ route('products.category', ['category' => 'rtd']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Resistance Temperature Detector</a>
                    <a href="{{ route('products.category', ['category' => 'thermowells']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Thermowells & Accessories</a>
                    <a href="{{ route('products.category', ['category' => 'cables']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Cables And Wires</a>
                    <a href="{{ route('products.category', ['category' => 'mi-cables']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">MI Cables</a>
                    <a href="{{ route('products.category', ['category' => 'alloys']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Nickel And Thermocouple Alloy</a>
                    <a href="{{ route('products.category', ['category' => 'pyrometers']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Pyrometers</a>
                    <a href="{{ route('products.category', ['category' => 'heaters']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Industrial Heaters</a>
                    <a href="{{ route('products.category', ['category' => 'transmitters']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Pressure Transmitter</a>
                    <a href="{{ route('products.category', ['category' => 'gauges']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Temperature / Pressure Gauges</a>
                    <a href="{{ route('products.category', ['category' => 'temp-transmitters']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Temperature Transmitters</a>
                    <a href="{{ route('products.category', ['category' => 'connectors']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Connectors (RTB / Thermocouple)</a>
                    <a href="{{ route('products.category', ['category' => 'controllers']) }}" class="block px-3 py-2 rounded-md text-base font-medium text-gray-600 hover:bg-gray-50">Digital Controllers And Indicator</a>
                </div>
            </div>
            
            <a href="/contact" class="block px-3 py-2 rounded-md text-base font-medium text-green-800 hover:bg-gray-100">Contact</a>
        </div>
    </div>
</nav>
