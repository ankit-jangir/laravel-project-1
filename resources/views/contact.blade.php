@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')

<!-- Hero Section -->
<div class="relative bg-gray-800">
    <div class="h-80 bg-cover bg-center" style="background-image: url('{{ asset('images/bg-image.jpg') }}');">
        <div class="absolute inset-0 bg-black opacity-50"></div>
        <div class="relative max-w-4xl mx-auto px-6 lg:px-8 flex flex-col justify-center h-full">
            <h1 class="text-4xl font-bold text-white sm:text-5xl">We want to hear from you</h1>
        </div>
    </div>
</div>

<!-- Contact Form Section -->
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-8">
      <div class="card shadow-lg border-0 rounded-3">
        <div class="card-body p-5">
          <h2 class="text-center mb-4 fw-bold">Contact Us</h2>
          <p class="text-center text-muted mb-5">
            Have a question or want to work with us? Fill out the form and we'll get back to you as soon as possible.
          </p>
          
          <form>
            <!-- Full Name -->
            <div class="mb-4">
              <label for="name" class="form-label fw-semibold">Full Name</label>
              <input type="text" class="form-control border-success py-3" id="name" placeholder="Enter your full name">
            </div>

            <!-- Email -->
            <div class="mb-4">
              <label for="email" class="form-label fw-semibold">Email</label>
              <input type="email" class="form-control border-success py-3" id="email" placeholder="Enter your email">
            </div>
            <!-- number -->
            <div class="mb-4">
              <label for="number" class="form-label fw-semibold">Number</label>
              <input type="number" class="form-control border-success py-3" id="number" placeholder="Enter your number">
            </div>

            <!-- Message -->
            <div class="mb-4">
              <label for="message" class="form-label fw-semibold">Message</label>
              <textarea class="form-control border-success py-3" id="message" rows="4" placeholder="Write your message"></textarea>
            </div>

            <!-- Submit -->
            <div class="text-center">
              <button type="submit" class="btn btn-success px-5 py-3 fw-semibold shadow-sm">
                Submit
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Map Section -->
<div class="bg-white pb-16 sm:pb-24">
    <div class="mx-auto max-w-4xl px-6 lg:px-8">
        <div class="h-96">
            <iframe
                class="w-full h-full rounded-lg"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.086438392558!2d144.9537353159042!3d-37.81720997975195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf577d70f5d5e2e8b!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1622097379634!5m2!1sen!2sau"
                style="border:0;"
                allowfullscreen=""
                loading="lazy">
            </iframe>
        </div>
    </div>
</div>

@endsection
