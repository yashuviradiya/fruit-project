<x-admin>
    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="name"class="form-label">name:</label>
            <input type="text" name="name" id="name" class="form-control">
        </div>
        @error('name')
            <span class="text-danger">{{ $message }}</span>
        @enderror<br>

        <div class="form-roup">
            <label for="category">category:</label>
            <select name="category" id="category" class="form-control">
                @foreach ( $categories as $category )
                <option value="{{$category->id}}">{{$category->name}}</option>
                @endforeach
            </select>
            @error('category')
            <span class="text-danger">{{ $message }}</span>
        @enderror<br>

        <div class="form-group">
            <label for="subcategory">subcategory:</label>
            <select name="subcategory" id="subcategory" class="form-control">
                <option value="" selected disabled>select category first</option>
            </select>
            @error('subcategory')
            <span class="text-danger">{{ $message }}</span>
            @enderror<br>

            <div class="form-group">
                <label for="desc">description:</label>
                <input type="text" name="desc" id="desc" class="form-control" >
            </div>
            @error('description')
            <span class="text-danger">{{ $message }}</span>
            @enderror<br>


            <div class="form-group">
                <label for="price">price:</label>
                <input type="text" name="price" id="price" class="form-control" >
            </div>
            @error('price')
            <span class="text-danger">{{ $message }}</span>
            @enderror<br>

            <div class="form-group">
                <label for="discountprice">discountprice:</label>
                <input type="text" name="discountprice" id="discountprice" class="form-control" >
            </div>
            @error('discountprice')
            <span class="text-danger">{{ $message }}</span>
            @enderror<br>


            <div class="form-group">
                <label for="">Image:</label>
                <input type="file" name="image" class="form-control">
            </div>
            @error('image')
                <span class="text-danger">{{ $message }}</span>
            @enderror<br>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">submit</button>
           </div>

        </form>



           @section('ajax')
           <script>
               $("#category").on('change', function() {
                   let category = $("#category").val();
                   $.ajax({
                       url: "{{ route('getsubcategory') }}",
                       type: 'GET',
                       data: {
                           category: category,
                       },
                       success: function(data) {
                           $("#submit").removeAttr('disabled', 'disabled');
                           $("#submit").html('save');
                           if (data) {
                               $("#subcategory").html(data);
                           }
                       }
                   });
               });
           </script>
       @endsection
</x-admin>
