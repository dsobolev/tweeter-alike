<x-guest-layout-upgraded>
    <div class="py-12">
        <div class="max-w-7xl mx-auto px-8">
            <div class="lg:flex bg-white shadow-sm rounded-lg pt-8">
                <div class="lg:w-1/6">
                    @include('sidebar')
                </div>

                <div class="flex-1 lg:mr-6">
                    <header class="relative">
                        <img
                            src="{{ $user->profileImage }}"
                            class="w-full h-auto rounded-lg mb-4"
                            alt="{{ $user->name }}"
                        />
                        <div class="flex justify-between items-center">
                            <div>
                                <h2 class="text-lg font-bold">{{ $user->name }}</h2>
                                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                            </div>

                            @if (Auth::check())
                                <div class="flex">
                                    <button
                                        class="btn btn-white"
                                        type="submit"
                                    >
                                        Edit Profile
                                    </button>

                                    <form action="{{ route('follow', $user) }}" method="POST">

                                        @csrf

                                        <button class="btn btn-blue" type="submit">
                                            Follow Me
                                        </button>
                                    </form>
                                </div>
                            @endif

                        </div>
                        <p class="text-sm text-center my-6">Some words about the user. Like an into. Or just some kind of thoughts. Some words about the user. Like an into. Or just some kind of thoughts. Some words about the user. Like an into. Or just some kind of thoughts. Some words about the user. Like an into. Or just some kind of thoughts.</p>
                        <img
                            src="{{ $user->avatarLarge }}"
                            class="rounded-full absolute"
                            style="top: 38%; left: calc(50% - 75px)"
                        />
                    </header>
                    <x-timeline :tweets="$user->tweets" />
                </div>

                <div class="lg:w-1/5">
                    @include('friends')
                </div>
            </div>
        </div>
    </div>
</x-guest-layout-upgraded>
