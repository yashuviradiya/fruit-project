<x-admin>
   <form action="{{route('product.update',$product)}}" method="post" enctype="multipart/form-data" >
    @csrf
    @method('PUT')

            <div class="form-group">
                <label for="name"class="form-label">name:</label>
                <input type="text" name="name" id="name" class="form-control" value="{{ old('name', $product->name) }}">
            </div>
            @error('name')
                <span class="text-danger">{{ $message }}</span>
            @enderror<br>

            <div class="form-roup">
                <label for="category">category:</label>
                <select name="category" id="category" class="form-control" value="{{ old('category', $product->category) }}">
                    @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                     @endforeach
                </select>
                @error('category')
                <span class="text-danger">{{ $message }}</span>
            @enderror<br>

            <div class="form-group">
                <label for="subcategory">subcategory:</label>
                <select name="subcategory" id="subcategory" class="form-control" value="{{ old('subcategory', $product->subcategory) }}">
                    <option value="" selected disabled>select category first</option>
                    @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $category->category_id ? 'selected' : '' }}>
                        {{ $category->name }}
                    </option>
                    @endforeach
                </select>
                @error('subcategory')
                <span class="text-danger">{{ $message }}</span>
                @enderror<br>

                <div class="form-group">
                    <label for="desc">description:</label>
                    <input type="text" name="desc" id="desc" class="form-control"value="{{ old('desc', $product->desc) }}" >
                </div>
                @error('description')
                <span class="text-danger">{{ $message }}</span>
                @enderror<br>


                <div class="form-group">
                    <label for="price">price:</label>
                    <input type="text" name="price" id="price" class="form-control" value="{{ old('price', $product->price) }}">
                </div>
                @error('price')
                <span class="text-danger">{{ $message }}</span>
                @enderror<br>

                <div class="form-group">
                    <label for="discountprice">discountprice:</label>
                    <input type="text" name="discountprice" id="discountprice" class="form-control"value="{{ old('discountprice', $product->discountprice) }}" >
                </div>
                @error('discountprice')
                <span class="text-danger">{{ $message }}</span>
                @enderror<br>


                <div class="form-group">
                    <label for="">Image:</label>
                    <input type="file" name="image" class="form-control" value="{{ old('image', $product->image) }}">
                </div>
                @error('image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror<br>

                <div class="form-group">
                    <button class="btn btn-primary" type="submit">Update</button>
               </div>
            </form>



            
</x-admin>
