<x-Layout>
    <x-slot:heading>Job Listing</x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
        <a href="/Job/{{ $job['id'] }}">
            <li>Title: {{ $job['title'] }}, {{ $job['description'] }}</li>
        </a>
        @endforeach
    </ul>
</x-Layout>
