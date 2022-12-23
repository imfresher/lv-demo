<x-backend-layout>
    <div class="content post__show">
        <h2>{{ $post->title }}</h2>
        <div>{!! $post->render() !!}</div>

        <a href="{{ route('backend.posts.edit', $post) }}" class="button--primary button--edit">Edit</a>
    </div>
</x-backend-layout>
