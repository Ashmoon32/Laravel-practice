@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <div class="max-w-4xl mx-auto px-4">

        <h1 class="text-4xl font-bold text-center mb-8">Contact Us</h1>

        <div class="bg-white p-8 rounded shadow">

            <form action="{{ route('contact.submit') }}" method="get" class="space-y-6">
                @csrf

                <!-- Name -->
                <div>
                    <label class="block mb-1 font-semibold">Full Name</label>
                    <input type="text" name="name" required
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Email -->
                <div>
                    <label class="block mb-1 font-semibold">Email Address</label>
                    <input type="email" name="email" required
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                </div>

                <!-- Message -->
                <div>
                    <label class="block mb-1 font-semibold">Message</label>
                    <textarea name="message" rows="4" required
                        class="w-full border border-gray-300 rounded px-4 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500"></textarea>
                </div>

                <!-- Submit -->
                <div class="text-center">
                    <button type="submit" class="bg-blue-600 text-white px-8 py-3 rounded hover:bg-blue-700 transition">
                        Send Message
                    </button>
                </div>
            </form>

        </div>

    </div>
@endsection