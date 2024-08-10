<x-admin>
    <form method="POST" action="{{route('setting.update')}}" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="id" value="{{ $setting ? $setting->id : 'default_value' }}">

        <div class="form-group">
            <label for="address" class="form-label">Address:</label>
            <input type="text" name="address" id="address" class="form-control" value="{{ $setting->address ?? ''}}">
        </div>

        @error('address')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="shortaddress"class="form-label">ShortAddress:</label>
            <input type="text" name="shortaddress" id="shortaddress" class="form-control"value="{{ $setting->shortaddress  ?? ''}}">
        </div>
        @error('shortaddress')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="email"class="form-label">Email:</label>
            <input type="text" name="email" id="email" class="form-control"value="{{ $setting->email ?? ''}}">
        </div>
        @error('email')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="phonenumber"class="form-label">Phone number:</label>
            <input type="text" name="phonenumber" id="phonenumber" class="form-control"value="{{ $setting->phonenumber ?? '' }}">
        </div>
        @error('phone number')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="twitter"class="form-label">Twitter:</label>
            <input type="text" name="twitter" id="twitter" class="form-control"value="{{ $setting->twitter ?? ''}}">
        </div>
        @error('twitter')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="facebook"class="form-label">Facebook:</label>
            <input type="text" name="facebook" id="facebook" class="form-control"value="{{ $setting->facebook ?? ''}}">
        </div>
        @error('facebook')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="linkdin"class="form-label">Linkdin:</label>
            <input type="text" name="linkdin" id="linkdin" class="form-control"value="{{ $setting->linkdin ?? ''}}">
        </div>
        @error('linkdin')
            <span class="text-danger">{{ $message }}</span>
        @enderror

        <div class="form-group">
            <label for="youtube"class="form-label">Youtube:</label>
            <input type="text" name="youtube" id="youtube" class="form-control"value="{{ $setting->youtube ?? ''}}">
        </div>
        @error('youtube')
            <span class="text-danger">{{ $message }}</span>
        @enderror<br>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Update</button>
        </div>



</x-admin>
