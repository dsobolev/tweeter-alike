<li class="mb-4 text-sm">
    <a class="flex items-center" href="{{ route('profiles.single', $user) }}">
        <img
            src="{{ $user->avatar }}"
            alt="friend {{ $user->name }}"
            class="rounded-full mr-2"
        >
        {{ $user->name }}
    </a>
</li>