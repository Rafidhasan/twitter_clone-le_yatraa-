<div class="border border-blue-400 rounded-lg py-6 px-8 py-6 mb-8">
    <form method="post" action="/tweets">
        @csrf
        <textarea
            class="w-full"
            name="body"
            placeholder="What's up doc!"
            required
        ></textarea>
        <hr class="my-4">
        <footer class="flex justify-between">
            <div class="flex items-center text-sm">
            <img
                src="{{ auth()->user()->avatar }}"
                class="rounded-full mr-2"
                alt="avatar image"
                width="50"
                height="50"
            >
            </div>

            <button
                type="submit"
                class="bg-blue-500 rounded-lg shadow py-2 px-2 text-white"
            >
                Tweet-a-roo!
            </button>
        </footer>

        @error('body')
            <p class="text-red-500 text-sm mt-4">{{ $message }}</p>
        @enderror
    </form>
</div>
