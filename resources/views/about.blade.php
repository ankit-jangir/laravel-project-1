@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="bg-white py-16 sm:py-24">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="text-center">
            <h2 class="text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">About Laxmi and Sons</h2>
            <p class="mt-6 text-lg leading-8 text-gray-600">Over 30 years of excellence in providing Process Control Instrument Solutions.</p>
        </div>
    </div>
</div>

<div class="bg-gray-50 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pr-4">
                <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:px-8 lg:pb-8 lg:pt-80">
                    <img class="absolute inset-0 h-full w-full object-cover" src="{{ asset('images/electronic.jpg') }}" alt="Our Mission">
                </div>
            </div>
            <div>
                <div class="text-base leading-7 text-gray-700">
                    <div class="max-w-xl">
                        <h3 class="text-3xl font-bold tracking-tight text-gray-900">Our Mission & Vision</h3>
                        <p class="mt-6 text-gray-600">Our mission is to be the premier provider of innovative and reliable process control instruments, delivering exceptional value to our customers through superior quality, service, and technical expertise. We are dedicated to continuous improvement and fostering long-term partnerships with our clients.</p>
                        <p class="mt-8 text-gray-600">Our vision is to be a global leader in the process control industry, recognized for our commitment to excellence, sustainability, and technological advancement. We aim to expand our reach and services to meet the evolving needs of industries worldwide.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Our Strengths Section with Parallax -->
<div class="strengths-parallax relative py-24 sm:py-32">
    <div class="absolute inset-0 bg-black opacity-50"></div>
    <div class="relative mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-2xl lg:text-center">
            <h2 class="text-base font-semibold leading-7 text-green-400">Our Strengths</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">Why Choose Laxmi and Sons</p>
            <p class="mt-6 text-lg leading-8 text-gray-300">We combine deep industry knowledge with a commitment to quality and customer satisfaction, making us the preferred choice for process control solutions.</p>
        </div>
        <div class="mx-auto mt-16 max-w-4xl space-y-12 lg:mt-24">
            <!-- Card 1: Left -->
            <div class="flex justify-start">
                <div class="strength-card w-full lg:w-2/3">
                    <div class="card-content">
                        <h4 class="flex items-center gap-x-3 text-lg font-semibold leading-7 text-gray-900">
                            <svg class="h-6 w-6 flex-none text-green-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M5.5 17a4.5 4.5 0 01-1.44-8.765 4.5 4.5 0 018.302-3.046a2.5 2.5 0 014.5 2.25c0 .993-.59 1.83-1.428 2.175a4.5 4.5 0 01-8.52 3.375A4.5 4.5 0 015.5 17z" clip-rule="evenodd" />
                            </svg>
                            Quality Assurance
                        </h4>
                        <p class="mt-4 text-base leading-7 text-gray-700">We adhere to the highest standards of quality, using only the best materials and rigorous testing to ensure our products meet and exceed industry benchmarks.</p>
                    </div>
                </div>
            </div>
            <!-- Card 2: Right -->
            <div class="flex justify-end">
                <div class="strength-card w-full lg:w-2/3">
                    <div class="card-content">
                        <h4 class="flex items-center gap-x-3 text-lg font-semibold leading-7 text-gray-900">
                             <svg class="h-6 w-6 flex-none text-green-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path fill-rule="evenodd" d="M10 1a4.5 4.5 0 00-4.5 4.5v9a4.5 4.5 0 009 0v-9A4.5 4.5 0 0010 1zm0 16.5a3 3 0 01-3-3v-9a3 3 0 016 0v9a3 3 0 01-3 3z" clip-rule="evenodd" />
                            </svg>
                            Technical Expertise
                        </h4>
                        <p class="mt-4 text-base leading-7 text-gray-700">With decades of experience, our team of engineers and technicians provides expert guidance and support to help you find the right solutions for your needs.</p>
                    </div>
                </div>
            </div>
            <!-- Card 3: Left -->
            <div class="flex justify-start">
                <div class="strength-card w-full lg:w-2/3">
                    <div class="card-content">
                        <h4 class="flex items-center gap-x-3 text-lg font-semibold leading-7 text-gray-900">
                            <svg class="h-6 w-6 flex-none text-green-600" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                <path d="M10 8a2.5 2.5 0 100-5 2.5 2.5 0 000 5zM3.633 13.332a.75.75 0 000 1.061 4.5 4.5 0 006.364 0 .75.75 0 00-1.06-1.06A3 3 0 014.694 13.332a.75.75 0 00-1.06 0z" />
                                <path d="M12.5 11.5a.75.75 0 01.75.75v3.5a.75.75 0 01-1.5 0v-3.5a.75.75 0 01.75-.75z" />
                            </svg>
                            Customer Focus
                        </h4>
                        <p class="mt-4 text-base leading-7 text-gray-700">We are committed to building lasting relationships with our clients by providing exceptional service, timely support, and customized solutions.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="bg-gray-900 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto max-w-xl text-center">
            <h2 class="text-lg font-semibold leading-8 tracking-tight text-green-400">Testimonials</h2>
            <p class="mt-2 text-3xl font-bold tracking-tight text-white sm:text-4xl">What Our Clients Say</p>
        </div>
        <div class="mx-auto mt-16 flow-root max-w-2xl sm:mt-20 lg:mx-0 lg:max-w-none">
            <div class="-mt-8 sm:-mx-4 sm:columns-2 sm:text-[0] lg:columns-3">
                <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-800 p-8 text-sm leading-6">
                        <blockquote class="text-white">
                            <p>"After using Manufacturer my business skyrocketed! Manufacturer impressed me on multiple levels. I will refer everyone."</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <img class="h-10 w-10 rounded-full bg-gray-700" src="{{ asset('images/electronic-human.jfif') }}" alt="">
                            <div>
                                <div class="font-semibold text-white">Rahul Rajput</div>
                                <div class="text-gray-400">JSW Cement</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-800 p-8 text-sm leading-6">
                        <blockquote class="text-white">
                            <p>"Just what I was looking for. We've used Laxmi and Sons for the last five years. Not able to tell you how happy I am with Laxmi and Sons."</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <img class="h-10 w-10 rounded-full bg-gray-700" src="{{ asset('images/plug.jpg') }}" alt="">
                            <div>
                                <div class="font-semibold text-white">Kishor Sharma</div>
                                <div class="text-gray-400">JP Cement</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
                <div class="pt-8 sm:inline-block sm:w-full sm:px-4">
                    <figure class="rounded-2xl bg-gray-800 p-8 text-sm leading-6">
                        <blockquote class="text-white">
                            <p>"Laxmi and Sons was the best investment I ever made. Thank you for making it painless, pleasant and most of all hassle free!"</p>
                        </blockquote>
                        <figcaption class="mt-6 flex items-center gap-x-4">
                            <img class="h-10 w-10 rounded-full bg-gray-700" src="{{ asset('images/wire.jpg') }}" alt="">
                            <div>
                                <div class="font-semibold text-white">Tushar Singh</div>
                                <div class="text-gray-400">Dalmia Cement</div>
                            </div>
                        </figcaption>
                    </figure>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.strengths-parallax {
    background-image: url("{{ asset('images/electronic.jpg') }}");
    background-attachment: fixed;
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

.strength-card {
    position: relative;
    overflow: hidden;
    padding: 2rem;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 0.75rem;
    box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
    transition: transform 0.3s ease;
}

.strength-card:hover {
    transform: translateY(-5px);
}

.strength-card::before {
    content: '';
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: #A7F3D0; /* Tailwind's green-200 */
    transform: scale(0);
    transform-origin: top left;
    transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    z-index: 0;
}

.strength-card:hover::before {
    transform: scale(1);
}

.strength-card .card-content {
    position: relative;
    z-index: 1;
}
</style>
@endsection
