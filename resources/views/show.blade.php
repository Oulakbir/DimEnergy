<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show</title>
</head>
<body>
    @section('content')
    <div class="container">
        <h2>{{ $post->title }}</h2>
        <p>
            {{ $post->body }}
        </p>

        <div class="mb-5">
            <comments-list></comments-list>
        </div>

        <div>
            @comments(['model' => $post])
        </div>
    </div>
@endsection
</body>
</html>



