<div class="col-sm-6">
    <label for="{{$id}}" class="col-sm-3 control-label">{{$label}}: </label>
    <input type="{{$type}}"  name="{{$name}}"  class="form-control-plaintext col-sm-8 inline-block input" id="{{$id}}" value="{{$value}}">
    <div class="col-sm-6 mx-auto">
        <span class="error">{{ $error }}</span>
    </div>  
</div>