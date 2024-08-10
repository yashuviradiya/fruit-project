<x-admin>
    <form>
    <div class="float-end">
        <a href="{{route('product.create')}}" class="btn btn-primary">create product</a>
    </div><br>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">name</th>
                <th scope="col">slug</th>
                <th scope="col">desc</th>
                <th scope="col">price</th>
                <th scope="col">Discountprice</th>
                <th scope="col">category</th>
                <th scope="col">subcategory</th>
                <th scope="col">image</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
            <tr>
                <td>{{$product->id}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->slug}}</td>
                <td>{{$product->desc}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->discountprice}}</td>
                <td>{{ optional($product->category)->name }}</td>
                <td>{{ optional($product->subcategory)->name }}</td>
                <td>
                    <img src="{{asset('blog/'.$product->image)}}" alt="{{$product->filename}}" class="rounded-circel" width="50px" height="50px">
                </td>
                <td>
                    <a href="{{route('product.edit',$product)}}" class="btn btn-primary">edit</a>
                    <a href="{{route('product.delete',$product)}}" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </form>
</x-admin>
