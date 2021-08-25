<section class="bg-blue-100 rounded-lg p-4 mr-4">
    <h3 class="text-lg font-bold my-2">Friends</h2>
    <ul>
        @foreach($user->follows as $friend)
            <x-friend :user="$friend" />
        @endforeach
    </ul>
</section>