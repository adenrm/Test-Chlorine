@vite('resources/css/app.css')
<html class="h-full">
<body class="h-full">
  <main class="grid min-h-full relative place-items-center bg-white px-6 py-24 sm:py-32 lg:px-8">
    <div class="text-center">
      <p class="text-base font-semibold text-red-500">404</p>
      <h1 class="mt-4 text-5xl font-bold tracking-tight text-balance text-gray-900 sm:text-7xl">Page not found</h1>
      <p class="mt-6 text-lg font-medium text-pretty text-gray-500 sm:text-xl/8">Sorry, we couldn’t find the page you’re looking for.</p>
      <div class="mt-10 flex items-center justify-center gap-x-6">
        <a href="{{ route('dashboard') }}" class="rounded-md bg-indigo-600 px-4 py-3 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Go back home</a>
      </div>
    </div>
  </main>
</body>
  </html>