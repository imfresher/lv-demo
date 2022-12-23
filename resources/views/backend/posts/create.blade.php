<x-backend-layout>
    <div class="content post__create">
        <h1 class="text-5xl">Create Post</h1>

        <form action="{{ route('backend.posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                @error('title')
                    <div class="validation--error">{{ $message }}</div>
                @enderror
                <input type="text" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="content">Content</label>
                @error('content')
                    <div class="validation--error">{{ $message }}</div>
                @enderror
                <input name="content" id="content" type="text"/>
            </div>
            <button type="submit" class="button">Save</button>
        </form>
    </div>
</x-backend-layout>
