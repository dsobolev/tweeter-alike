<x-guest-layout-upgraded>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="lg:flex bg-white shadow-sm rounded-lg pt-8">
                <div class="lg:w-1/6">
                    @include('sidebar')
                </div>

                <div class="flex-1 lg:mr-6">
                    <header>
                        <img
                            src="{{ $user->profileImage }}"
                            class="w-full h-auto rounded-lg mb-4"
                            alt="{{ $user->name }}"
                        />
                        <div class="flex justify-between">
                            <div>
                                <h2 class="text-lg font-bold">{{ $user->name }}</h2>
                                <p>Joined {{ $user->created_at->diffForHumans() }}</p>
                            </div>
                            <div>
                                <button class="btn btn-white">Edit Profile</button>
                                <button class="btn btn-blue">Follow Me</button>
                            </div>
                        </div>
                    </header>
                    <x-timeline :tweets="$tweets" />
                </div>

                <div class="lg:w-1/5">
                    @include('friends')
                </div>
            </div>
        </div>
    </div>
</x-guest-layout-upgraded>
