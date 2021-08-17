@php
    $friends = [1,2,3];
    $icon = "https://i.pravatar.cc/40";
@endphp
<section>
    <h3 class="text-lg font-bold my-8">Friends</h2>
    <ul>
        @foreach($friends as $friend)
            <x-friend :name="$friend" :icon="$icon" />
        @endforeach
    </ul>
</section>