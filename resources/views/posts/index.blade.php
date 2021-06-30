<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <script src="{{ asset('resources/js/app.js') }}" defer></script>
    <script src="{{ asset('resources/css/app.css') }}"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    {{-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css"> --}}
    <meta charset="utf-8">
    <title>Home</title>
</head>
<body>

    <div class="container-fluid" style="text-align:left;">

        @foreach ($posts as $post)
            <div class="row">
                {{-- <div class="col-md-3">
                </div> --}}
                <div class="col-md-6">
                    <h1>{{ $post->title }}</h1>
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <label>{{ $post->content }}</label>
                </div>
                <div class="col-md-6">
                </div>
            </div>
            <div class="row">
                <a href="/posts/edit/{{ $post->id }}" class="btn btn-info" >EDIT</a>
                <a href="/posts/destroy/{{ $post->id }}" class="btn btn-danger" name="delete_button">DELETE</a>
            </div><hr>
        @endforeach
    </div>
    <div class="row">
        <div class="col-md-3">
            <a href="/posts/create" class="btn btn-success">Insert</a>
        </div>
    </div>
</body>
</html>
