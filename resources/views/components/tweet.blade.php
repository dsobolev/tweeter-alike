<section class="flex mb-4 p-4 {{ $isLast ? '' : 'border-b border-b-gray-400' }}">

    <aside class="mr-4 flex-shrink-0">
        <a href="{{ $user->path() }}">
            <img
                src="{{ $user->avatar }}"
                alt="avatar"
                class="rounded-full mr-2"
            />
        </a>
    </aside>

    <main>
        <h5 class="font-bold mb-2">
            <a href="{{ $user->path() }}">
                {{ $user->name }}
            </a>
        </h5>

        <div class="text-sm">
            {{ $slot }}
        </div>
    </main>

</section>