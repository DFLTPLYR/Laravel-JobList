<x-Layout>
    <x-slot:heading>
        Job
    </x-slot:heading>
    <div class="flex items-center justify-center flex-col overflow-hidden ">
        <div>
            <h1 class="text-3xl m-4">{{ $job->employer->name }}</h1>
        </div>
        <div>
            <h1><strong>{{ $job->title }}</strong> (${{ $job->salary }})</h1>
            <h3>{{ $job->description }}</h3>
        </div>
        @can('edit', $job)
            <div class="m-4">
                <x-button href="/Jobs/{{ $job->id }}/edit">Edit Job</x-button>
            </div>
        @endcan
    </div>
</x-Layout>
