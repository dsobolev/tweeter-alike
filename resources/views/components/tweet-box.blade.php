<section class="border border-blue-400 rounded-lg p-6">
    <form action="">

        <textarea
            class="w-full"
            placeholder="I'd like to say..."
        ></textarea>

        <hr class="my-4">

        <footer class="flex justify-between">
            <img
                src="{{ auth()->user()->avatar }}"
                alt="avatar"
                class="rounded-full mr-2"
            />
            <x-button class="bg-blue-400 shadow">Send</x-button>
        </footer>

    </form>
</section>