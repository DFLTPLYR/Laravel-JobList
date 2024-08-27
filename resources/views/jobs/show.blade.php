<x-Layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <div class=" flex flex-col">
        <h1>{{ $job['title'] }} (${{ $job['salary'] }})</h1>
        <h3>{{ $job['description'] }}</h3>
    </div>
</x-Layout>
