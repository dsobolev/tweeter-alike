<div x-data="followActions()">
    <input type="hidden" x-ref="route" value="{{ $user->followPath() }}">
    <button
        x-show="show"
        @click="await followUser($refs.route.value)"
        class="btn {{ Auth::user()->following($user) ? 'btn-red' : 'btn-blue' }}"
    >
        {{Auth::user()->following($user) ? 'Unfollow Me' : 'Follow Me' }}
    </button>
</div>