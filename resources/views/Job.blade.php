<x-Layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <h1>{{ $job['title'] }} (${{ $job['salary'] }})</h1>
    <h5>{{ $job['company'] }} - {{ $job['location'] }}</h5>
    <h3>{{ $job['description'] }}</h3>
</x-Layout>