@php
    $friends = [1,2,3];
    $icon = "https://i.pravatar.cc/40";
@endphp
<section class="bg-blue-100 rounded-lg p-4 mr-4">
    <h3 class="text-lg font-bold my-2">Friends</h2>
    <ul>
        @foreach($friends as $friend)
            <x-friend :name="$friend" icon="https://i.pravatar.cc/40" />
        @endforeach
    </ul>
</section>