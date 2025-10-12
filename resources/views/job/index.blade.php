<div>

    <h1>Job Board</h1>

    @foreach ($jobs as $job)
        <div>
            <h2>{{ $job['title'] }}</h2>
            <p>Company: {{ $job['company'] }}</p>
            <p>Location: {{ $job['location'] }}</p>
        </div>
    @endforeach

</div>
