




<form action="{{route('form.store')}}" method="post">
    {!! csrf_field() !!}

    @method('POST')

    <input name="title" type="text"><br>
    @error('title')
    {{$message}}
        
    @enderror
    <br>
    <input name="content" type="text"><br>
    @error('content')
    {{$message}}
        
    @enderror
    <br>

    <button>submit</button>
</form>