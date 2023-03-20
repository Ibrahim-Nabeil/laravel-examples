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

    <div id="container">

        <table>
            @foreach ($post as $item)
                <tr>
                    <td>
                        <a href="javascript:void(0)" onclick="deleteItemAjax({{ $item->id }})"> delete</a>
                    </td>
                    <td>
                        {{ $item->title }}
                    </td>
                    <td>
                        {{ $item->content }}
                    </td>
                </tr>
            @endforeach
        </table>
    </div>


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
            let title = $('#title').val();
            let content = $('#content').val();
            let _token = $('input[name=_token]').val();
            $.ajax({
                url: "{{ url('createItem') }}",
                type: 'post',
                data: {
                    title: title,
                    content: content,
                    _token: _token,
                },

                success: (response) => {
                    let allData = null;

                    response.forEach(element => {
                        allData +=
                            `<tr><td><a href="javascript:void(0)" onclick="deleteItemAjax(${element.id})"> delete</a></td><td>${element.id}</td><td>${element.title}</td><td>${element.content}</td></tr>`
                    });
                    $('#container').html(allData);




                },
                error: (response) => {
                    console.log(response);

                },
            });
        });
    </script>
    <script>
        function deleteItemAjax(id) {
            $.ajax({
                url: `/deleteItem/${id}`,
                type: 'post',
                data: {
                    _token: $('input[name=_token]').val(),
                },

                success: (response) => {
                    let allData = null;

                    response.forEach(element => {
                        allData +=
                            `<tr><td><a href="javascript:void(0)" onclick="deleteItemAjax(${element.id})"> delete</a></td><td>${element.id}</td><td>${element.title}</td><td>${element.content}</td></tr>`
                    });
                    $('#container').html(allData);




                },
                error: (response) => {
                    console.log(response);

                },
            });
        }
    </script>
</body>

</html>
