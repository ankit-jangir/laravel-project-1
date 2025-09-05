@extends('layouts.app')

@section('title', $product->name)

@section('content')
<div class="py-24 bg-gray-100" style="font-family: 'Inter', sans-serif;">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white shadow-xl rounded-lg overflow-hidden">
            <div class="grid grid-cols-1 md:grid-cols-2">
                <!-- Product Image -->
                <div class="bg-gray-200">
                    <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-full object-cover">
                </div>

                <!-- Product Details -->
                <div class="p-8 md:p-12 flex flex-col justify-center">
                    <div class="mb-6">
                        <a href="{{ route('products.category', $product->category->name) }}" class="text-sm font-semibold text-green-600 uppercase hover:text-green-700 transition duration-300">{{ $product->category->name }}</a>
                        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mt-2">{{ $product->name }}</h1>
                    </div>

                    <div class="text-gray-600 text-lg mb-8">
                        {!! $product->description !!}
                    </div>

                    <div class="border-t border-gray-200 pt-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-4">Product Details</h3>
                        <div class="space-y-3 text-gray-700">
                            <p><strong>Availability:</strong> <span class="text-green-600 font-semibold">In Stock</span></p>
                            <p><strong>Model:</strong> {{ $product->model_number ?? 'N/A' }}</p>
                            <p><strong>Materials:</strong> High-Grade Stainless Steel, Ceramic</p>
                        </div>
                    </div>

                    <div class="mt-10">
                        <a href="/contact" class="inline-block bg-green-600 text-white font-bold py-4 px-8 rounded-lg text-lg hover:bg-green-700 transition duration-300 transform hover:scale-105 shadow-lg">
                            Request a Quote
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Back Button -->
        <div class="text-center mt-12">
            <a href="{{ url()->previous() }}" class="inline-flex items-center text-gray-600 hover:text-gray-900 font-semibold">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                Back to Products
            </a>
        </div>
    </div>
</div>
@endsection
