<section class="border border-gray-400 rounded-lg my-4">
    @foreach($tweets as $tweet)
        <x-tweet :user="$tweet->user" :is-last="$loop->last">
            {{ $tweet->body }}
        </x-tweet>
    @endforeach
</section>