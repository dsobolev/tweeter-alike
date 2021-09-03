<nav>
    <ul class="ml-8">
        <li class="font-bold block mb-4">
            <a href="/dashboard">Home</a>
        </li>
        <li class="font-bold block mb-4">Second</li>
        <li class="font-bold block mb-4">Other</li>

        @if (Auth::check())
            <li class="font-bold block mb-4">
                <a href="{{ Auth::user()->profilePath() }}">Profile</a>
            </li>
        @endif
    </ul>
</nav>