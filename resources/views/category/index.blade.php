<x-admin>
<div class="float-end">
<a href="{{route('category.create')}}" class="btn btn-primary">Create</a>
</div>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">slug</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category )
            <tr>
                <td>{{$category->id }}</td>
                <td>{{$category->name}}</td>
                <td>{{$category->slug}}</td>
                <td>
                    <a href="" class="btn btn-primary">Edit</a>
                    <a href="{{ route('category.delete', $category) }}" class="btn btn-danger">Delete</a>
                    {{-- <form action="{{ route('category.destroy', $category) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Delete</button>
                    </form> --}}

                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</x-admin>
