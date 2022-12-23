<x-backend-layout>
    <div class="content">
        <h1>Menus</h1>
        <a href="{{ route('backend.menus.create') }}">Create menu</a>

        <div id="datatable"></div>

        <div class="table-responsive">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Description</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($items as $item)
                    <tr>
                        <th scope="row">1</th>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>
                            <a href="#">Builder</a>
                            <a href="#">Edit</a>
                            <a href="#">Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        @if (count($items))
            {{ $items->appends($appends)->links() }}
        @endif
    </div>
</x-backend-layout>
