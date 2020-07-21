<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img
                src="/assets/banner.jpg"
                alt="cover-image"
                class="mb-2 rounded-lg"
            >

            <img
                src="{{ $user->avatar }}"
                class="rounded-full mr-2 absolute bottom-0 transform -translate-x-1/2 translate-y-1/2"
                alt="profile-image"
                width="150"
                style="left:50%"
            >
        </div>

        <div class="flex justify-between items-center mb-6">
            <div>
                <h2 class="font-bold text-2xl mb-2">{{ $user->name }}</h2>
                <p class="text-sm">Joined {{ $user->created_at->diffForHumans() }}</p>
            </div>

            <div class="flex">
                @can('edit', $user)
                    <a
                        href="{{$user->path('edit')}}"
                        class="rounded-full border border-gray-300 mr-2 py-2 px-4 text-black text-xs"
                    >
                        Edit Profile
                    </a>
                @endcan

                <x-follow-button :user="$user"></x-follow-button>
            </div>
        </div>
        <div>
            <p class="text-sm">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatibus possimus atque, tempore provident, nesciunt doloremque explicabo laudantium sunt numquam praesentium impedit omnis dolore inventore quas unde facilis velit blanditiis! Voluptatibus quisquam ea eum. Deleniti labore facilis distinctio ipsum! Praesentium dignissimos esse ipsa, doloribus error eveniet temporibus sed quod illo iure explicabo provident veniam porro eligendi velit sequi vitae numquam? Tenetur?
            </p>

        </div>
    </header>

    @include('_timeline', [
        'tweets' => $user->tweets
    ]);
</x-app>
