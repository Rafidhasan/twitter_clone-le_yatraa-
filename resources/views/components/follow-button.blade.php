<form method="post" action="/profiles/{{ $user->name }}/follow">
    @csrf
    <button
        type="submit"
        class="bg-blue-500 rounded-full border border-gray-300 py-2 px-4 text-xs text-white"
    >
        {{ auth()->user()->following($user) ? 'Unfollow Me' : 'Follow Me'}}
    </button>
</form>
