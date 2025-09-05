<div {{ $attributes->merge(['class' => 'relative bg-gray-900 text-white']) }}>
    <div class="absolute inset-0">
        <img src="{{ asset('images/bg-image.jpg') }}" alt="Background" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-black opacity-50"></div>
    </div>
    <div class="relative container mx-auto px-4 py-20 sm:py-24 lg:py-32 text-center">
        <h2 class="text-lg sm:text-xl lg:text-2xl font-semibold uppercase tracking-wider">{{ $subtitle }}</h2>
        <h1 class="text-3xl sm:text-4xl lg:text-5xl font-bold mt-2">{!! $title !!}</h1>
    </div>
</div>
