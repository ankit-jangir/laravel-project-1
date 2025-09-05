<div class="bg-white pt-12 font-sans">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-gray-800 mb-4">
            Leading Provider of Process Control Instruments
        </h2>
        <div class="flex justify-center mb-6">
            <span class="w-2 h-2 bg-green-500 rounded-full"></span>
        </div>
        <p class="max-w-3xl mx-auto text-gray-600 mb-10 text-sm sm:text-base">
            For over 30 years, Laxmi and Sons has been a trusted partner for industries requiring precise measurement and control. We deliver high-quality instruments and exceptional service to ensure your processes run efficiently and safely.
        </p>

        <!-- Tabs -->
        <div x-data="{ activeTab: 'mission' }">
            <div class="flex flex-col sm:flex-row justify-center space-y-2 sm:space-y-0 sm:space-x-2 md:space-x-4 mb-8 bg-gray-100 p-2 rounded-full max-w-2xl mx-auto">
                <button @click="activeTab = 'mission'"
                        :class="{'bg-gray-300': activeTab !== 'mission', 'bg-green-500 text-white': activeTab === 'mission'}"
                        class="flex-1 text-xs sm:text-sm md:text-base font-semibold py-2 sm:py-3 px-4 rounded-full transition duration-300 flex items-center justify-center space-x-2">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 19v-6a2 2 0 00-2-2H5a2 2 
                              0 00-2 2v6a2 2 0 002 2h2a2 2 
                              0 002-2zm0 0V9a2 2 0 012-2h2a2 2 
                              0 012 2v10m-6 0a2 2 0 002 2h2a2 2 
                              0 002-2m0 0V5a2 2 0 012-2h2a2 2 
                              0 012 2v14a2 2 0 01-2 2h-2a2 2 
                              0 01-2-2z"/>
                    </svg>
                    <span>Our Mission</span>
                </button>
                <button @click="activeTab = 'choice'"
                        :class="{'bg-gray-300': activeTab !== 'choice', 'bg-green-500 text-white': activeTab === 'choice'}"
                        class="flex-1 text-xs sm:text-sm md:text-base font-semibold py-2 sm:py-3 px-4 rounded-full transition duration-300 flex items-center justify-center space-x-2">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M9 12l2 2 4-4m6 2a9 9 
                              0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                    <span>Why Choose Us</span>
                </button>
                <button @click="activeTab = 'presence'"
                        :class="{'bg-gray-300': activeTab !== 'presence', 'bg-green-500 text-white': activeTab === 'presence'}"
                        class="flex-1 text-xs sm:text-sm md:text-base font-semibold py-2 sm:py-3 px-4 rounded-full transition duration-300 flex items-center justify-center space-x-2">
                    <svg class="w-4 h-4 sm:w-5 sm:h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M3.055 11H5a2 2 
                              0 012 2v1a2 2 0 002 2h8a2 2 
                              0 002-2v-1a2 2 0 012-2h1.945C18.055 
                              5.241 13.298 1 7.5 1S-2.945 5.241 
                              3.055 11zM15 11a3 3 0 
                              11-6 0 3 3 0 016 0z"/>
                    </svg>
                    <span>Our Presence</span>
                </button>
            </div>

            <!-- Tab Content -->
            <div class="bg-gray-50 p-6 sm:p-8 rounded-lg shadow-inner max-w-4xl mx-auto text-left relative z-10">
                <div x-show="activeTab === 'mission'">
                    <h3 class="text-xl sm:text-2xl font-bold text-green-600 mb-3">Our Mission</h3>
                    <p class="text-gray-600 text-sm sm:text-base">
                        Laxmi and Sons is one of the largest providers for Process Control Instruments Solutions. The headquarter/Production Unit is based in Ajmer with Multiple Sales Office in Delhi, Raipur, Raigarh, Nagpur and other Prime Industrial Cities to serve our best services. It's a part of Laxmi group of companies founded in 1990.
                    </p>
                </div>
                <div x-show="activeTab === 'choice'">
                    <h3 class="text-xl sm:text-2xl font-bold text-green-600 mb-3">Why Choose Us</h3>
                    <p class="text-gray-600 text-sm sm:text-base">
                        Our commitment to quality is unwavering. We use only the best materials and adhere to strict manufacturing standards. With decades of experience, our team possesses deep technical expertise to provide you with the right solutions and support for your specific applications. Your success is our priority.
                    </p>
                </div>
                <div x-show="activeTab === 'presence'">
                    <h3 class="text-xl sm:text-2xl font-bold text-green-600 mb-3">Our Global Presence</h3>
                    <p class="text-gray-600 text-sm sm:text-base">
                        From our headquarters and production unit in Ajmer, we have expanded our reach across the nation. With sales offices in Delhi, Raipur, Raigarh, Nagpur, and other prime industrial cities, we are strategically positioned to provide prompt service and support to our valued clients wherever they are.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Image + Background -->
<div class="relative mt-10">
    <div class="max-w-7xl mx-auto flex justify-center md:justify-start">
        <div class="relative z-20 w-11/12 sm:w-3/4 md:w-1/2 lg:w-1/3 -mt-10 sm:-mt-12 md:-mt-16">
            <img src="{{ asset('images/product 7.jpg') }}" alt="Industrial Equipment"
                 class="rounded-lg shadow-lg w-full object-cover">
        </div>
    </div>
</div>

<div class="bg-[#2c3e50] h-40 sm:h-56 md:h-64 lg:h-72 -mt-20 sm:-mt-28 md:-mt-36 relative z-0"></div>
