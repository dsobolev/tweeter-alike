<section class="border border-blue-400 rounded-lg p-6">
    <form method="POST" action="/tweets">

        @csrf

        <textarea
            name="body"
            class="w-full"
            placeholder="I'd like to say..."
            required
        >{{ old('body') }}</textarea>

        @if ($errors->any())
            <div class="text-sm text-red-400">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

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