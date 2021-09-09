<x-guest-layout-upgraded>
    <x-three-columns :user="$user">
        <header>
            <div class="relative">
                <img
                    src="{{ $user->profileImage }}"
                    class="w-full h-auto rounded-lg mb-4"
                    alt="{{ $user->name }}"
                />
                <img
                    src="{{ $user->avatarLarge }}"
                    class="rounded-full absolute bottom-0 left-1/2 transform -translate-x-1/2 translate-y-1/2"
                    width="150px"
                />
            </div>
            <div class="flex justify-between items-center mb-4">
                <div>
                    <h2 class="text-lg font-bold">{{ $user->name }}</h2>
                    <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
                </div>

                @auth
                    <div class="flex">
                        @if (Auth::user()->is($user))
                            <button
                                class="btn btn-white"
                                type="submit"
                            >
                                Edit Profile
                            </button>
                        @endif

                        @unless (Auth::user()->is($user))
                            <x-follow-button :user="$user"/>
                        @endunless
                    </div>
                @endauth

            </div>
            <p class="text-sm text-center my-6">Some words about the user. Like an into. Or just some kind of thoughts. Some words about the user. Like an into. Or just some kind of thoughts. Some words about the user. Like an into. Or just some kind of thoughts. Some words about the user. Like an into. Or just some kind of thoughts.</p>
        </header>

        <x-timeline :tweets="$user->tweets" />
    </x-three-columns>
</x-guest-layout-upgraded>
