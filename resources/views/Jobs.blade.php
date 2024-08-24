<x-Layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot:heading>Job Listing</x-slot:heading>
    <ul class="flex items-center justify-center">
        @foreach ($jobs as $job)
        <li class="min-w-[25%] max-w-min h-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow m-4 overflow-hidden hover:overflow-y-scroll">
            <h1>{{ $job['title'] }} (${{ $job['salary'] }})</h1>
            <h5>{{ $job['location'] }}</h5>
            <h3>{{ $job['description'] }}</h3>
            <button onclick="window.location.href=`/Job/{{$job['id']}}`">Go to Job</button>
        </li>
        @endforeach
    </ul>
</x-Layout>