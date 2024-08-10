<x-admin>
    <form action="{{route('subcategory.store')}}" method="POST">
        @csrf
    <div class="form-group mb-3">
        <label for="name" class="from-label">Name:</label>
        <input type="text" id="name" name="name" class="form-control">
    </div>
    @error('name')
        <span class="text-danger">{{$message}}</span>
    @enderror

    <div class="form-group">
        <label for="category">category</label>
        <select name="category" id="category" class="form-control">
            <option value="" selected disabled>select category</option>

            @foreach ($category as $item )
            <option {{old ('category') == $item->id ? 'selected': ''}} value="{{$item->id}}">{{$item->name}}</option>
            @endforeach

        </select>
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary">submit</button>
    </div>
</form>
</x-admin>
