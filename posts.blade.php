<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
    <style>       
        table {
        width: 100%;
        border: 1px solid #000;
        }
        th.id {
        width: 5%
        }
        th.title {
        width: 15%
        }
        th.body {
        width: 50%
        }
        th.action {
        width: 30%; /* Not necessary, since only 70% width remains */
        }
    </style>
</head>
<body>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" style="text-align: center; font-size:30px">
                            All Post
                        </div>
                        <div class="card-body">
                            @if (Session::has('post_delete'))
                            <div class="alert alert-danger" role="alert">
                                {{Session::get("post_delete") }}
                            </div>
                            @endif
                            <table class="table table-bordered border-primary ">
                                <thead class="thead-light">
                                    <tr>
                                        <th class="id">Id</th>
                                        <th class="title">Post Title</th>
                                        <th class="body">Post Body</th>
                                        <th class="action">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($posts as $post)
                                       <tr>
                                           <td>{{ $post->id }}</td>
                                           <td>{{ $post->title }}</td>
                                           <td>{{ $post->body }}</td>
                                           <td>
                                                <a href="/posts/{{ $post->id }}" class="btn btn-success">View</a> 
                                                <a href="/edit-post/{{ $post->id }}" class="btn btn-warning">Edit</a>
                                                <a href="/delete-post/{{ $post->id }}" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr> 
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>
</html>