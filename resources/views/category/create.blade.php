<x-admin>
<form action="{{route('category.store')}}" method="POST">
    @csrf
<div class="form-group mb-3">
    <label for="name" class="from-label">Name:</label>
    <input type="text" id="name" name="name" class="form-control">
</div>
@error('name')
    <span class="text-danger">{{$message}}</span>
@enderror

<div class="form-group">
    <button type="submit" class="btn btn-primary">submit</button>
</div>
</form>
</x-admin>
