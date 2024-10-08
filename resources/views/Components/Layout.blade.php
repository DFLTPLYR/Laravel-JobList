<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head class="h-full bg-gray-100">

<body>
    <div class="h-screen w-screen flex flex-col">
        <nav class="bg-gray-800">
            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
                <div class="flex h-16">
                    <div class="flex items-center w-full">
                        <div class="flex-shrink-0">
                            <img class="h-8 w-8" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=500"
                                alt="Your Company">
                        </div>
                        <div class="flex-grow">
                            <div class="ml-10 flex items-baseline space-x-4">
                                <x-nav-link href="/" :active="request()->is('/')">Dashboard</x-nav-link>
                                <x-nav-link href="/Jobs" :active="request()->is('Jobs')">Jobs</x-nav-link>
                                <x-nav-link href="/Contacts" :active="request()->is('Contacts')">Contacts</x-nav-link>
                            </div>
                        </div>
                        <div class="ml-10 flex items-baseline space-x-4">
                            @guest
                                <x-nav-link href="/login" :active="request()->is('login')">Login</x-nav-link>
                                <x-nav-link href="/register" :active="request()->is('Register')">Register</x-nav-link>
                            @endguest
                            @auth
                                <form method="POST" action="/logout" class="flex flex-row gap-3">
                                    @csrf
                                    <x-form-button>{{ Auth::user()->firstName }}'s DashBoard</x-form-button>
                                    <x-form-button>Logout</x-form-button>
                                </form>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>


        </nav>

        <header class="bg-white shadow">
            <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8 sm:flex sm:justify-between">
                <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{ $heading }}</h1>
                <x-button href="/Jobs/create"> Create Job </x-button>

            </div>
        </header>

        <main class="flex-1">
            <div
                class="mx-auto max-7-w-7xl sm:px-6 lg:px-8 bg-slate-100 h-full w-full flex items-center justify-center">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
