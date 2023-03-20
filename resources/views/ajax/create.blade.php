<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<body>


    @foreach ($post as $item)
        {{ $item->title }}
        {{ $item->content }}
    @endforeach


    <form id="formAjax">
        {!! csrf_field() !!}


        <input name="title" id="title" type="text"><br>
        @error('title')
            {{ $message }}
        @enderror
        <br>
        <input name="content" id="content" type="text"><br>
        @error('content')
            {{ $message }}
        @enderror
        <br>

        <button type="submit">submit</button>
    </form>
    <script>
        $(document).on('submit', '#formAjax', function(e) {

            e.preventDefault();
            let title   = $('#title').val();
            let content = $('#content').val();
            let _token  = $('input[name=_token]').val();
            $.ajax({
                url: "{{ route('ajax.store') }}",
                type: 'post',
                data: {
                    title: title,
                    content: content,
                    _token: _token,
                },

                success: (response) => {
                    console.log(response);
                },
                error: (response) => {
                    console.log(response);

                },
            });
        });
    </script>

</body>

</html>
