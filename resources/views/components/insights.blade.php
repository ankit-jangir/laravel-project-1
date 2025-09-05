@props(['products'])
<div class="bg-gray-100 py-20">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-sm font-semibold text-green-600 tracking-wider uppercase">Why Us?</p>
            <h2 class="text-4xl md:text-5xl font-bold text-gray-800 mt-2">Our Commitment to Excellence</h2>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Card 1: Our Quality -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300 flex flex-col">
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex-grow">Our Quality</h3>
                    <p class="text-gray-700 mb-4">We are a quality-conscious organization, which is committed to offering a qualitative range of Process Control Instruments. For this, we have adopted a strict quality management system in our entire business operation. We have a team of quality experts, which keeps a close vigil on all the activities, right from the procurement of raw material to the final dispatch of the consignments.</p>
                </div>
            </div>

            <!-- Card 2: Our Infrastructure -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300 flex flex-col">
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex-grow">Our Infrastructure</h3>
                    <p class="text-gray-700 mb-4">We are backed by a state-of-the-art infrastructure, which is spread across a wide area. For the streamlined execution of all the business activities, we have segregated our infrastructure into various departments such as manufacturing, quality testing, R&D and warehousing & packaging. All these departments are well-equipped with the latest machines, tools and equipment that are required for an uninterrupted production process.</p>
                </div>
            </div>

            <!-- Card 3: Client Satisfaction -->
            <div class="bg-white rounded-lg shadow-md overflow-hidden transform hover:-translate-y-2 transition duration-300 flex flex-col">
                <div class="p-6 flex flex-col flex-grow">
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex-grow">Client Satisfaction</h3>
                    <p class="text-gray-700 mb-4">Being a client-centric organization, we have been able to gain the trust and confidence of our esteemed customers. We make sure that the clients are offered a quality-approved range of Process Control Instruments. Further, for the convenience of our clients, we accept payment through various easy modes like Cash, Cheque and DD. Also, we make sure that the consignments are delivered at the clients' destination within the stipulated time frame.</p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="relative bg-gray-50 py-20" style="font-family: 'Inter', sans-serif;">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/electronic.jpg') }}'); background-attachment: fixed;"></div>
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <p class="text-sm font-semibold text-gray-400 tracking-wider uppercase">Read the latest</p>
            <h2 class="text-4xl md:text-5xl font-bold text-white mt-2">Insights</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach ($products as $product)
            <div class="bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col">
                <div class="h-48 bg-cover bg-center rounded-t-2xl" style="background-image: url('{{ asset('images/' . $product->image) }}')"></div>
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-center mb-4 text-sm">
                        <span class="bg-gray-100 text-gray-600 px-3 py-1 rounded-full text-xs font-semibold">News</span>
                        <span class="text-gray-500">1 min read</span>
                    </div>
                    <h3 class="text-lg font-semibold text-gray-800 mb-4 flex-grow uppercase">{{ $product->name }}</h3>
                    <a href="{{ route('products.show', ['category' => $product->category_id, 'id' => $product->id]) }}" class="flex items-center justify-between text-gray-800 font-semibold">
                        <span>Read more</span>
                        <span class="bg-green-500 text-white rounded-full p-2 w-9 h-9 flex items-center justify-center">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                        </span>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <div class="text-center mt-16">
            <a href="{{ route('products.index') }}" class="bg-green-500 text-white font-semibold py-3 px-8 rounded-lg inline-flex items-center hover:bg-green-600 transition">
                Read more insights
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
            </a>
        </div>
    </div>
</div>
