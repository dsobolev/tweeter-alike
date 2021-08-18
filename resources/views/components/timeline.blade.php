<section class="border border-gray-400 rounded-lg mt-4">
    @foreach($tweets as $tweet)
        @php
            $avatar = $tweet->user->avatar;
            $username = $tweet->user->name;
        @endphp
        <x-tweet :avatar="$avatar" :username="$username">
            {{ $tweet->body }}
        </x-tweet>
    @endforeach
</section>