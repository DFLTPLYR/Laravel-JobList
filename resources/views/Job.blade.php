<x-Layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1>{{ $job['title'] }} (${{ $job['salary'] }})</h1>
    <h3>{{ $job['description'] }}</h3>
</x-Layout>