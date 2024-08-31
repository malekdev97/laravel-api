<a {{ $attributes }} class="mr-5 font-bold hover:text-neutral-900 dark:hover:text-neutral-300 underline {{ request()->is('/') ? 'text-cyan-600'  : 'text-red-700' }} "> {{ $slot }}</a>
