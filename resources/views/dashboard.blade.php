<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="lg:flex bg-white shadow-sm rounded-lg">
                <div class="lg:w-1/6">
                    @include('sidebar')
                </div>

                <div class="flex-1">

                    <section class="border border-blue-400 rounded-lg mt-10 lg:mr-6 p-6">
                        <form action="">
                            <textarea
                                class="w-full"
                                placeholder="I'd like to say..."
                            ></textarea>
                            <hr class="my-4">
                            <footer class="flex justify-between">
                                <img
                                    src="https://i.pravatar.cc/40"
                                    alt="avatar"
                                    class="rounded-full mr-2"
                                />
                                <x-button class="bg-blue-400 shadow">Send</x-button>
                            </footer>
                        </form>
                    </section>

                    <div>timeline</div>

                </div>
                <div class="lg:w-1/5">
                    @include('friends')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
