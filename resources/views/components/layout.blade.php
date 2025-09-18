<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My First Application</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-b from-blue-600 to-black min-h-screen flex flex-col font-sans">

  <!-- Navbar -->
  <nav class="flex justify-between items-center p-6 bg-gradient-to-b from-black  from-80% to-blue via-20%">
    <!-- Title (Top Left) -->
    <div class="text-white font-bold text-xl tracking-wide">
      My First Application
    </div>

    <!-- Navigation -->
    <ul class=" flex space-x-10 text-white font-medium tracking-wide ">
      <li>
        <x-nav-link href="/" :active="request()->is('/')">
          Home
        </x-nav-link>
      </li>
      <li>
        <x-nav-link href="/about" :active="request()->is('about')">
          About
        </x-nav-link>
      </li>
      <li>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
      </li>
    </ul>
  </nav>
  <div class="flex flex-col items-center justify-center text-center  text-white text-[30px] h-20 ">
    {{ $heading }}
  </div>
  <!-- Main Content -->
  {{ $slot }}


  <!-- Footer -->
  <footer class="p-4 text-center text-gray-500 text-sm">
    © 2025 MySite. All rights reserved.
  </footer>

</body>
</html>
