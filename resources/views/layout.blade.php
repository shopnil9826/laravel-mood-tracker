<!DOCTYPE html>
<html class="h-full bg-gray-100" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') - Mood Tracker</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="h-full">
        <div class="min-h-full">
          <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
              <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                  <div class="flex-shrink-0">
                    <a class="text-light text-2xl font-semibold" href="/">Year in Pixels</a>
                  </div>
                  <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                      <a
                        href="/moods"
                        class="hover:text-light rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700"
                        >Moods</a
                      >

                      <a
                        href="/entries"
                        class="hover:text-light rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-gray-700"
                        >Entries</a
                      >
                    </div>
                  </div>
                </div>
                <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                  <a
                    href="/moods/create"
                    class="bg-stone-500 hover:bg-stone-700 text-light mx-6 inline-flex justify-center rounded-md border border-transparent px-4 py-2 text-sm font-medium shadow-sm"
                  >
                    New mood
                  </a>
                  <a
                    href="/entries/create"
                    class="text-light inline-flex justify-center rounded-md border border-transparent bg-gray-600 px-4 py-2 text-sm font-medium shadow-sm hover:bg-gray-700"
                  >
                    New entry
                  </a>
                </div>
              </div>
            </div>
          </nav>

          <main>
            <div class="container mx-auto px-8 py-16">@yield('content')</div>
          </main>
        </div>
      </body>
</html>
