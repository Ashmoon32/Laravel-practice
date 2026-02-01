@props([
    "title" => "Test"
])
<!DOCTYPE html>
<html lang="en">
<head>
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-100 p-6">
    <nav>
        <a href="/">Home</a>
        <a href="/about">About</a>
        <a href="/contact">Contact</a>
    </nav>
  <main>
    {{  $slot }}
    <a href="/welcome">Back to Welcome Page</a>
  </main>
</body>
</html>