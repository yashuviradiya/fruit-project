<x-admin>
    <div class="float-end">
    <a href="{{route('subcategory.create')}}" class="btn btn-primary">Create</a>
    </div>
        <table class="table">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">slug</th>
                <th scope="col">category</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($subcategories as $category )
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->slug}}</td>
                    <td>{{$category->category->name}}
                    <td>
                        <a href="" class="btn btn-primary">Edit</a>
                        <a href="{{route('subcategory.delete',$category->id) }}" class="btn btn-danger">Delete</a>
                        {{-- <form action="{{ route('subcategory.destroy', $category) }}" method="POST">
                            @method('DELETE')
                            @csrf
                            <button type="submit" class="btn btn-danger">delete</button>
                        </form> --}}
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </x-admin>
