<x-layout>
<div class="container mx-auto">
    <h1 class="text-4xl font-bold text-neutral-900 dark:text-neutral-200">Jobs</h1>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
        @foreach ( $jobs as $job)
            <a href="/jobs/{{ $job['id'] }}">
            <div class="bg-white dark:bg-neutral-800 shadow-md rounded-lg p-4">
                <p class="text-neutral-700 dark:text-neutral-300">{{ $job['title'] }} {{ $job['salary'] }}</p>
            </div>
            </a>
        @endforeach
    </div>


</x-loayout>
