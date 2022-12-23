<x-backend-layout>
    <div class="content post__index">
        <h2>Posts</h2>
        <a href="{{ route('backend.posts.create') }}" class="btn btn-primary">Create</a>

        @foreach($posts as $post)
            <div class="post-item">
                <h3 class="post-item__title">{{ $post->title }}</h3>
                <div>
                    <a href="{{ route('backend.posts.show', $post) }}" class="button">Read</a>
                </div>
            </div>
        @endforeach
    </div>
</x-backend-layout>
