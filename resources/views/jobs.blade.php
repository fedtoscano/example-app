<x-layout>
    <x-slot:heading>
        Jobs Listing
    </x-slot:heading>
    <ul>
        @foreach ($jobs as $job)
            <li>
                <a href="/jobs/{{$job['id']}}" class="text-blue hover:underline">
                    <strong>
                        {{ $job['title'] }}: Pays {{ $job['salary'] }} per year
                    </strong>
                </a>
            </li>
        @endforeach
    </ul>
</x-layout>
