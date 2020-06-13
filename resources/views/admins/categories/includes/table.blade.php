<div class = "table-responsive">
    <table class = "table table-bordered">
     <thead>
        <tr>
            <th>Category ID</th>
            <th>Name</th>
            <th>Created Date</th>
            <th>
                <a href="{{ route('admin.category.create') }}"> +New </a>
            </th>
        </tr>
     </thead>
     <tbody>
        @foreach($categories as $category)
            <tr>
                <td>{{ $category->id }}</td>
                <td>{{ $category->name }}</td>
                <td>{{ $category->created_at }}</td>
                <td>
                <a href=" {{ route('admin.category.edit', $category->id) }}">Edit</a>
                </td>
            </tr>
        @endforeach
     </tbody>
    </table>
</div>