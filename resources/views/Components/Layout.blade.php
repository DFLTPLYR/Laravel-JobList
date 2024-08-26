<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head class="h-full bg-gray-100">

<body class="h-full">

    <div class="min-h-full">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16 items-center justify-between">
                    <div class="flex items-center">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500" alt="Your Company">
                        </div>
                        <div class="hidden md:block">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/" :active="request()->is('/')">Dashboard</x-nav-link>
                                <x-nav-link href="/Jobs" :active="request()->is('Jobs')">Jobs</x-nav-link>
                                <x-nav-link href="/Contacts" :active="request()->is('Contacts')">Contacts</x-nav-link>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
            </div>
        </header>
        <main>
            <div class="mx-auto h-screen border-cyan-400 flex items-center justify-center">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>