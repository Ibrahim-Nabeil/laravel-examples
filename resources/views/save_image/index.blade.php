<a href="{{route('save_image.create')}}" style="padding:20px;border:3px solid ;">create image</a>
<br>
<h1 style="padding:20px;border:3px solid ;">Test image</h1>
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif


@foreach ($image as $item)
<div>

    <img src="{{ $item->image }}" alt="" style="width:200px;height:300px;">
</div>
    <br>
    <div>

        <a href="{{route('save_image.show', [$item->id])}}" style="padding:20px;border:3px solid ;">show image</a>
    </div>
    <br>
<div>

    <form action="{{ route('save_image.destroy', [$item->id]) }}" method="post">
        @csrf
        @method('DELETE')
        <button style="padding:20px;border:3px solid ;">deldte</button>
    </form>
</div>

@endforeach
