<x-app-layout>
    <x-three-columns :user="Auth::user()">
        <x-tweet-box />
        <x-timeline :tweets="$tweets" />
    </x-three-columns>
</x-app-layout>
