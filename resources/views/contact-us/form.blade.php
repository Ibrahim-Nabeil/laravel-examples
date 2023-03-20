<h2>Contact Us</h2>
@if (session('sccess'))
    <div class="alert alert-success">
        {{ session('sccess') }}
    </div>
@endif
<form action="{{ url('contactUsSave') }}" method="get">
    {!! csrf_field() !!}

    @method('GET')
    <input name="title" value="{{ old('title') }}" type="text"><br>
    @error('title')
        {{ $message }}
    @enderror
    <br>
    <input name="email" value="{{ old('email') }}" type="text"><br>
    @error('email')
        {{ $message }}
    @enderror
    <br>

    <textarea name="message" value="{{ old('message') }}" id="" cols="30" rows="10"></textarea>
    <br>
    @error('message')
        {{ $message }}
    @enderror
    <br>


    <button>submit</button>
</form>
