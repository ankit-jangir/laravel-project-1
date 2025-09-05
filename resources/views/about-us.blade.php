@extends('layouts.app')

@section('title', 'About Us')

@section('content')
<div class="bg-white py-24 sm:py-32">
  <div class="mx-auto max-w-7xl px-6 lg:px-8">
    <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
      <div>
        <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
          <p class="text-base font-semibold leading-7 text-green-600">ABOUT US</p>
          <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
            The story of Pairwise
          </h1>
          <div class="max-w-xl">
            <p class="mt-6">
            Pairwise was founded in 2017 by CEO Tom Adams, PhD and Haven Baker, PhD and scientific founders Feng Zhang, PhD, David Liu, PhD, and J. Keith Joung, PhD, visionaries whose groundbreaking work in CRISPR technology helped shape the field of genome editing and its application in agriculture.
            </p>
          </div>
        </div>
      </div>
      <div class="lg:pr-4">
        <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
          <img class="absolute inset-0 h-full w-full object-cover" src="https://www.pairwise.com/wp-content/uploads/2021/02/story-of-pairwise-1.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>

<div class="bg-gray-50 py-24 sm:py-32">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="mx-auto grid max-w-2xl grid-cols-1 items-start gap-x-8 gap-y-16 sm:gap-y-24 lg:mx-0 lg:max-w-none lg:grid-cols-2">
            <div class="lg:pl-4">
                <div class="relative overflow-hidden rounded-3xl bg-gray-900 px-6 pb-9 pt-64 shadow-2xl sm:px-12 lg:max-w-lg lg:px-8 lg:pb-8 xl:px-10 xl:pb-10">
                    <img class="absolute inset-0 h-full w-full object-cover" src="https://www.pairwise.com/wp-content/uploads/2022/02/girl-eating-salad.jpg" alt="">
                </div>
            </div>
            <div>
                <div class="text-base leading-7 text-gray-700 lg:max-w-lg">
                    <p class="text-base font-semibold leading-7 text-green-600">OUR MISSION</p>
                    <p class="mt-6">
                    This ethos remains at the heart of the Pairwise mission:
                    </p>
                    <h1 class="mt-2 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                    Partnering to build a healthier world by making plants easier to grow and eat.
                    </h1>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
