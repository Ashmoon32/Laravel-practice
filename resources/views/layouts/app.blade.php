<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Clinic')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 text-gray-800">

    <!-- Navbar -->
    <nav class="bg-white shadow">
        <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
            <a href="/" class="text-xl font-bold text-blue-600">HealthCare Clinic</a>
            <div class="space-x-6">
                <a href="/" class="hover:text-blue-600">Home</a>
                <a href="/about" class="hover:text-blue-600">About</a>
                <a href="/contact" class="hover:text-blue-600">Contact</a>
            </div>
        </div>
    </nav>

    <!-- Content -->
    <main class="py-10">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-600 text-white mt-10">
        <div class="max-w-7xl mx-auto px-4 py-6 text-center">
            © {{ date('Y') }} HealthCare Clinic. All rights reserved.
        </div>
    </footer>

</body>

</html>