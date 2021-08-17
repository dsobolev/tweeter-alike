@php
    $friends = [1,2,3];
@endphp
<section>
    <h3 class="text-lg font-bold my-8">Friends</h2>
    <nav>
        <ul>
            @foreach($friends as $friend)
            <li class="flex items-center mb-4">
                <img
                    src="https://i.pravatar.cc/40"
                    alt="friend {{ $friend }}"
                    class="rounded-full mr-2"
                >
                Friend Element No {{ $friend }}
            </li>
            @endforeach
        </ul>
    </nav>
</section>