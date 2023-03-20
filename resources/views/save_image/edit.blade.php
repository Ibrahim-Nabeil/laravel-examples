




<form action="{{route('save_image.store')}}" method="post" enctype="multipart/form-data">
    {!! csrf_field() !!}

    @method('POST')

    <input name="file" type="file"><br>
    @error('file')
    {{$message}}
        
    @enderror
    <br>
    

    <button>submit</button>
</form>