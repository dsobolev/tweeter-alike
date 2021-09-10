<section class="border border-gray-400 rounded-lg my-4">
    @forelse($tweets as $tweet)
        <x-tweet :user="$tweet->user" :is-last="$loop->last">
            {{ $tweet->body }}
        </x-tweet>
    @empty
        <p class="p-4">No Tweets Yet )))</p>
    @endforelse
</section>