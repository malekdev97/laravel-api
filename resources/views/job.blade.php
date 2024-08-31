<x-layout>

    <div class="container mx-auto">
        <h1 class="text-4xl font-bold text-neutral-900 dark:text-neutral-200">Job</h1>
        <div class="bg-white dark:bg-neutral-800 shadow-md rounded-lg p-4">
            <p class="text-neutral-700 dark:text-neutral-300">{{ $job['title'] }} {{ $job['salary'] }}</p>
        </div>
    </div>

</x-layout>

