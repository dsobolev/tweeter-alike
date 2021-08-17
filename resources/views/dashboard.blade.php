<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="lg:flex bg-white shadow-sm rounded-lg pt-8">
                <div class="lg:w-1/6">
                    @include('sidebar')
                </div>

                <div class="flex-1 lg:mr-6">
                    <x-tweet-box />
                    <x-timeline />
                </div>

                <div class="lg:w-1/5">
                    @include('friends')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
