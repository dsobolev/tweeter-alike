<x-app-layout>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="lg:flex bg-white shadow-sm rounded-lg">
                <div class="lg:w-1/4">
                    @include('sidebar')
                </div>
                <div class="flex-1">
                    <div>tweet box</div>
                    <div>timeline</div>
                </div>
                <div class="lg:w-1/4">
                    @include('friends')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
