@php
$tweets = [
    [
        'user' => [
            'name' => 'first',
            'avatar' => 'https://i.pravatar.cc/30'
        ],
        'text' => 'Some text'
    ],
    [
        'user' => [
            'name' => 'second',
            'avatar' => 'https://i.pravatar.cc/30'
        ],
        'text' => 'A piece of excitement news!!!'
    ],
    [
        'user' => [
            'name' => 'another',
            'avatar' => 'https://i.pravatar.cc/30'
        ],
        'text' => 'Politics jkfdls;jafkdl; jfkdsl jksdl fjsdakl'
    ]
]
@endphp
<section class="border border-gray-400 rounded-lg mt-4 p-6">
    @foreach($tweets as $tweet)
        @php
            $avatar = $tweet['user']['avatar'];
            $username = $tweet['user']['name'];
        @endphp
        <x-tweet :avatar="$avatar" :name="$username">
            {{ $tweet['text'] }}
        </x-tweet>
    @endforeach
</section>