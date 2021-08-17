<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="lg:flex bg-white shadow-sm rounded-lg">
                <div class="lg:w-1/6">
                    @include('sidebar')
                </div>

                <div class="flex-1">

                    <x-tweet-box />

                    <div>timeline</div>

                </div>
                <div class="lg:w-1/5">
                    @include('friends')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
