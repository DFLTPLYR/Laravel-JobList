<x-Layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot:heading>Job Listing</x-slot:heading>
    <div class="flex w-full h-full justify-center items-center flex-wrap overflow-x-hidden">
        @foreach ($jobs as $job)
        <div class="min-w-[25%] max-w-min h-[300px] p-6 bg-white border border-gray-200 rounded-lg shadow m-4 no-scrollbar">
            <div class="mb-2 text-2xl font-bold tracking-tight text-gray-900">
                {{ $job->employer->name }}
            </div>
            <div>
                <a href="/Jobs/{{ $job['id'] }}">
                    <h1><strong>{{ $job['title'] }}</strong> (${{ $job['salary'] }})</h1>
                    <h5>{{ $job['location'] }}</h5>
                    <h3>{{ $job['description'] }}</h3>
                </a>
            </div>
        </div>
        @endforeach
        <div class="m-4 w-full" >
            {{ $jobs->links() }}
        </div>
    </div>
</x-Layout>
