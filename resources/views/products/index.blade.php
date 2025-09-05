@extends('layouts.app')

@section('title', $category ? ucwords($category->name) . ' Products' : 'All Products')

@section('content')
<div class="relative py-20" style="font-family: 'Inter', sans-serif; overflow: hidden;">
    <div class="absolute inset-0 bg-cover bg-center" style="background-image: url('{{ asset('images/electronic.jpg') }}'); background-attachment: fixed;"></div>
    <div class="absolute inset-0 bg-black opacity-60"></div>
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <p class="text-sm font-semibold text-green-400 tracking-wider uppercase">{{ $category ? $category->name : 'All Products' }}</p>
            <h2 class="text-4xl md:text-5xl font-bold text-white mt-2">{{ $category ? ucwords($category->name) . ' Products' : 'Our Products' }}</h2>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($products as $product)
            <div class="bg-white rounded-lg shadow-lg overflow-hidden flex flex-col">
                <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" class="w-full h-48 object-cover">
                <div class="p-6 flex flex-col flex-grow">
                    <div class="flex justify-between items-center mb-4">
                        <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded-full">{{ $product->category->name }}</span>
                    </div>
                    <h3 class="text-lg font-bold text-gray-800 mb-4 flex-grow uppercase">{{ $product->name }}</h3>
                    <a href="{{ route('products.show', ['category' => $product->category->name, 'id' => $product->id]) }}" class="text-green-600 font-semibold flex items-center">
                        Read more
                        <svg class="w-5 h-5 ml-2 bg-green-500 text-white rounded-full p-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"></path></svg>
                    </a>
                </div>
            </div>
            @empty
            <div class="col-span-3 text-center text-white">
                <p class="text-lg">No products found in this category.</p>
            </div>
            @endforelse
        </div>
        <div class="mt-12">
            {{ $products->links() }}
        </div>
    </div>
</div>
@endsection
