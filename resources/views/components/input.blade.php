<div class="mb-3">
    <label for="{{$name}}" class="form-label">
        @php
            echo Str::ucfirst($name)
        @endphp
    </label>
    <input type="{{$type}}" class="form-control rounded-0 @if($errors->has($name)) is-invalid @endif"
    id="phone" name="{{$name}}" value="{{$value ?? old($name)}}">
    @error($name)
    <div class="form-text text-danger" id="{{$name}}Help">{{$errors->first($name)}}</div>
    @enderror
 </div>
