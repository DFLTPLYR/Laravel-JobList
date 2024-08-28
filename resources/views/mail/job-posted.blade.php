<h2>
    {{ $job->title }}
</h2>
<p>Congrats! Your job has been posted.</p>
<p>
    <a href="{{ url('/Jobs/' . $job->id) }}">View your Job Listing</a>
</p>
