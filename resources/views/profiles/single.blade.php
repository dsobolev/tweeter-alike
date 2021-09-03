<x-guest-layout-upgraded>
    <x-three-columns :user="$user">
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

                @auth
                    <div class="flex">
                        <button
                            class="btn btn-white"
                            type="submit"
                        >
                            Edit Profile
                        </button>

                        @unless ($user->isMe())
                            <div x-data="followActions()">
                                <input type="hidden" x-ref="route" value="/profiles/{{ $user->username }}/follow">
                                <button
                                    x-show="show"
                                    @click="await followUser($refs.route.value)"
                                    class="btn {{ Auth::user()->following($user) ? 'btn-red' : 'btn-blue' }}"
                                >
                                    {{Auth::user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
                                </button>
                            </div>
                        @endunless
                    </div>
                @endauth

            </div>
            <p class="text-sm text-center my-6">Some words about the user. Like an into. Or just some kind of thoughts. Some words about the user. Like an into. Or just some kind of thoughts. Some words about the user. Like an into. Or just some kind of thoughts. Some words about the user. Like an into. Or just some kind of thoughts.</p>
            <img
                src="{{ $user->avatarLarge }}"
                class="rounded-full absolute"
                style="top: 38%; left: calc(50% - 75px)"
            />
        </header>

        <x-timeline :tweets="$user->tweets" />
    </x-three-columns>
</x-guest-layout-upgraded>
