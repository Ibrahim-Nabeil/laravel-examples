




<form action="{{url('formValidation')}}" method="get">
    {!! csrf_field() !!}

    @method('GET')
{{--  --}}
    <input name="title" type="text" value="{{ old('title') }}"><br>
    @error('title')
    {{$message}}
    @enderror
    <br>
{{--  --}}
    <input name="content" type="text" value="{{ old('content') }}"><br>
    @error('content')
    {{$message}}
        
    @enderror
    <br>

    <button>submit</button>
</form>