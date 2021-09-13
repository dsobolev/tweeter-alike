<x-app-layout>
    <x-three-columns :user="currentUser()">
        <form
            method="POST"
            action="{{ $user->path('edit') }}"
            class="w-1/2 m-auto"
        >
            @csrf
            @method('PATCH')

            <div class="mb-2">
                <label
                    for="name"
                    class="block uppercase font-bold text-xs mb-2 text-gray-700"
                >
                    Name
                </label>
                <input
                    class="border border-gray-400 p-2 w-full mb-4"
                    type="text"
                    name="name"
                    id="name"
                    value="{{ $user->name }}"
                    required
                />
                @error('name')
                    <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                @enderror

                <label
                    for="username"
                    class="block uppercase font-bold text-xs mb-2 text-gray-700"
                >
                    Username
                </label>
                <input
                    class="border border-gray-400 p-2 w-full mb-4"
                    type="text"
                    name="username"
                    id="username"
                    value="{{ $user->username }}"
                    required
                />

                @error('username')
                    <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                @enderror

                <label
                    for="email"
                    class="block uppercase font-bold text-xs mb-2 text-gray-700"
                >
                    Email
                </label>
                <input
                    class="border border-gray-400 p-2 w-full mb-4"
                    type="email"
                    name="email"
                    id="email"
                    value="{{ $user->email }}"
                    required
                />

                @error('email')
                    <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                @enderror

                <label
                    for="password"
                    class="block uppercase font-bold text-xs mb-2 text-gray-700"
                >
                    Password
                </label>
                <input
                    class="border border-gray-400 p-2 w-full mb-4"
                    type="password"
                    name="password"
                    id="password"
                    autocomplete="new-password"
                />

                @error('password')
                    <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                @enderror

                <label
                    for="password_confirmation"
                    class="block uppercase font-bold text-xs mb-2 text-gray-700"
                >
                    Confirm Password
                </label>
                <input
                    class="border border-gray-400 p-2 w-full mb-4"
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                />

                @error('password_confirmation')
                    <p class="text-xs text-red-500 mt-2">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6 float-right">
                <button
                    type="submit"
                    class="btn btn-blue"
                >
                    Submit
                </button>
            </div>
        </form>
    </x-three-columns>
</x-app-layout>