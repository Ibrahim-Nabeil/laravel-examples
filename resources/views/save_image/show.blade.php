<a href="{{ route('save_image.create') }}" style="padding:20px;border:3px solid ;">create image</a>
<a href="{{ route('save_image.index') }}" style="padding:20px;border:3px solid ;">index image</a>
<a href="{{ route('save_image.edit', [$image->id]) }}" style="padding:20px;border:3px solid ;">edit image</a>
<h1 style="padding:20px;border:3px solid ;">Test image</h1>

<div>
    <img src="{{ url($image->image) }}" alt="" style="width:200px;height:300px;">
</div>

{{ $image->image }}

<br>
<div>

    <form action="{{ route('save_image.destroy', [$image->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button style="padding:20px;border:3px solid ;">deldte</button>
    </form>
</div>
