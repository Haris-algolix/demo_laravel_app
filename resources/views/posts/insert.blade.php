<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <script src="{{ asset('resources/js/app.js') }}" defer></script>
    <link href="{{ asset('resources/css/app.css') }}" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <meta charset="utf-8">
    <title>Title</title>
</head>
<body>

    <div class="container-fluid">

        <form action="/posts/store" method="post" class="form-group">
            @csrf
            <div class="row">
                <div class="col-md-12">
                    <label  for="title">Title :</label>
                    <input class="form form-control" type="text" name="title" id="title" value="" />
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <label for="content">Content</label>
                    <textarea class="form form-control" name="content" id="content" rows="4" cols="20"></textarea>
                </div>
            </div>
            <button type="submit" name="" class="btn btn-success"/> Insert</button>
            <a href="/posts" class="btn btn-info">Back</a>
        </form>
    </div>
</body>
</html>
