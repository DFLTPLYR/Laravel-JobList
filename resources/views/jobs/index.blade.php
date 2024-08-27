<x-Layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot:heading>Job Listing</x-slot:heading>
    <div class="flex w-full h-full justify-center items-center flex-wrap overflow-x-hidden">
        @foreach ($jobs as $job)
            <div
                class="min-w-[25%] max-w-min h-[300px] p-6 group bg-white border border-gray-200 rounded-lg shadow m-4 no-scrollbar overflow-hidden flex items-center justify-center flex-col transition hover:bg-blue-200 hover:scale-105">
                <div class="mb-2 text-2xl font-bold tracking-tight text-gray-900 h-fit w-fit">
                    {{ $job->employer->name }}
                </div>
                <div
                    class="group-hover:text-blue-600 h-full w-full overflow-hidden inline-block no-wrapphp text-ellipsis">
                    <h1><strong>{{ $job['title'] }}</strong> (${{ $job['salary'] }})</h1>
                    <h5>{{ $job['location'] }}</h5>
                    <h3>{{ $job['description'] }}</h3>
                </div>
                <x-button class="opacity-0 group-hover:opacity-100 self-end" href="/Jobs/{{ $job->id }}">View
                    Job</x-button>
            </div>
        @endforeach
        <div class="m-4 w-full">
            {{ $jobs->links() }}
        </div>
    </div>
</x-Layout>
