<x-app-layout>
    <div class="max-w-2xl mx-auto p-4 sm:p-6 lg:p-8">
        <form method="POST" action="{{ route('comments.store') }}">
            @csrf
            <input type="hidden" name="chirp_id" value="{{ $chirp->id }}">
            <textarea name="content" placeholder="{{ __('Leave a comment...') }}"
                class="block w-full border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm">{{ old('content') }}</textarea>
            <x-input-error :messages="$errors->get('content')" class="mt-2" />
            <x-primary-button class="mt-4">{{ __('Post Comment') }}</x-primary-button>
        </form>
    </div>

    @foreach ($chirp->comments as $comment)
        <div class="p-4 border-t">
            <strong>{{ $comment->user->name }}</strong>
            <p>{{ $comment->content }}</p>
        </div>
    @endforeach
</x-app-layout>
