<section class="border border-gray-400 rounded-lg my-4">
    @foreach($tweets as $tweet)
        @php
            $user = $tweet->user;
        @endphp
        <x-tweet :user="$user">
            {{ $tweet->body }}
        </x-tweet>
    @endforeach
</section>