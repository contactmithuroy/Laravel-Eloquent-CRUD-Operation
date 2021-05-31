<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eloquent CRUD OPERATION</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header">
                        Add New Post
                    </div>

                    <div class="card-body">

                       @if(Session::has('post_created'))
                       <div class="alert alert-success" role="alert">
                            {{ Session::get('post_created') }}
                       </div>
                       @endif

                        <form action="{{ route('post.create') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label for="title">Post Title</label>
                                <input type="text"0 name="title" class="form-control" placeholder="Enter Your Title" required>
                            </div>
                            <div class="form-group">
                                <label for="title">Post Description</label>
                                <textarea name="body" id="body" cols="10" rows="3" class="form-control" placeholder="Enter Your Body" required > </textarea>
                            </div>
                            <br>

                            <input type="submit" class="btn btn-success" name="submit" value="Submit">
                        
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
