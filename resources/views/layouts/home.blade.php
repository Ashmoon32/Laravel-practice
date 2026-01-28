@extends('layouts.app')

@section('title', 'Clinic Home')

@section('content')
    <div class="max-w-7xl mx-auto px-4">

        <!-- Hero Section -->
        <div class="bg-blue-600 text-white rounded-lg p-10 text-center">
            <h1 class="text-4xl font-bold mb-4">Your Health, Our Priority</h1>
            <p class="text-lg mb-6">
                Professional medical services you can trust.
            </p>
            <a href="/contact" class="bg-white text-blue-600 px-6 py-3 rounded font-semibold hover:bg-gray-100">
                Book Appointment
            </a>
        </div>

        <!-- Services -->
        <div class="mt-16">
            <h2 class="text-3xl font-bold text-center mb-10">Our Services</h2>

            <div class="grid md:grid-cols-3 gap-8">
                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-xl font-semibold mb-2">General Checkup</h3>
                    <p>Routine health examinations and preventive care.</p>
                </div>

                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-xl font-semibold mb-2">Specialist Care</h3>
                    <p>Experienced doctors across multiple specialties.</p>
                </div>

                <div class="bg-white p-6 rounded shadow text-center">
                    <h3 class="text-xl font-semibold mb-2">Emergency Services</h3>
                    <p>24/7 emergency medical assistance.</p>
                </div>
            </div>
        </div>

    </div>
@endsection