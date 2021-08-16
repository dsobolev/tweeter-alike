@php
    $friends = [1,2,3];
@endphp
<section>
    <h3 class="text-lg font-bold my-8">Friends</h2>
    <nav>
        <ul>
            @foreach($friends as $friend)
            <li class="block mb-4">
                Friend Element No {{ $friend }}
            </li>
            @endforeach
        </ul>
    </nav>
</section>