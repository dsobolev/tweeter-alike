<section class="flex mb-4">

    <aside class="mr-4">
        <img
            src="{{ $avatar }}"
            alt="avatar"
            class="rounded-full mr-2"
        />
    </aside>

    <main>
        <h5 class="font-bold mb-2">{{ $name }}</h5>
        <div class="text-sm">
            {{ $slot }}
        </div>
    </main>

</section>