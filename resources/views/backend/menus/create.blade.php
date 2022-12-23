<x-backend-layout>
    <div class="content">
        <h1>Create a Menu</h1>

        <form action="{{ route('backend.menus.store') }}" method="POST">
            @csrf

            <div class="mb-3 row">
                <label for="name" class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-10">
                    <input type="text" id="name" name="name" value="{{ old('name', '') }}" class="form-control" />
                </div>
            </div>

            <div class="mb-3 row">
                <label for="description" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea id="description" name="description" class="form-control">{{ old('description', '') }}</textarea>
                </div>
            </div>

            <div class="button-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</x-backend-layout>
