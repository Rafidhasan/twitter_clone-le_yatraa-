<h3 class="font-bold text-xl mb-4">Following</h3>
<ul>
    @forelse (auth()->user()->follows as $user)
    <li class="mb-4">
        <a class="flex items-center text-sm" href="{{route('profile', $user)}}">
            <img
                src="{{ $user->avatar }}"
                class="rounded-full mr-2"
                alt="friends image"
                height="40"
                width="40"
            >
            {{ $user->name }}
        </a>
    </li>
    @empty
        <p class="p-4">No friends yet!</p>
    @endforelse
</ul>\
