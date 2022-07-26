<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        .gradient-custom {
            /* fallback for old browsers */
            background: #4facfe;
            /* Chrome 10-25,
Safari 5.1-6 */
            background: -webkit-linear-gradient(to bottom right, rgba(79, 172, 254,
                        1), rgba(0, 242, 254, 1));
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+,
Safari 7+ */
            background: linear-gradient(to bottom right, rgba(79, 172, 254, 1), rgba(0,
                        242, 254, 1))
        }
    </style>
</head>

<body>

    <section class="gradient-custom">
        <a href="post/create" class="btn btn-info light">Add Post</a>
        <form  action="{{ route('logout') }}" method="POST"  style="float: right">
            @csrf
            <button type="submit" class="btn btn-danger light">logout</button>
        </form>
        <div class="container my-5 py-5">
            <div class="row d-flex justify-content-center">
                <div class="col-md-12 col-lg-10 col-xl-8">
                    <div class="card">
                        <div class="card-body p-4">
                            <h4 class="text-center mb-4 pb-2">My POSTS</h4>

                            <div class="row">
                                <div class="col">
                                    @foreach ($posts as $post )
                                    <div class="d-flex flex-start">
                                        <img class="rounded-circle shadow-1-strong me-3"
                                            src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(10).webp"
                                            alt="avatar" width="65" height="65" />
                                        <div class="flex-grow-1 flex-shrink-1">
                                            <div>
                                                <div class="d-flex justify-content-between align-items-center">
                                                    <p class="mb-1">
                                                        {{ $post->title }}
                                                    </p>
                                                    <a href="/comment/{{ $post->id }}/add"><i class="fas fa-reply fa-xs"></i><span
                                                            class="small"> reply</span></a>
                                                </div>
                                                <p class="small mb-0">
                                                    {{ $post->body }}
                                                </p>
                                            </div>



                                            @foreach ($post->comments as $comment )
                                            <div class="d-flex flex-start mt-4">
                                                <a class="me-3" href="#">
                                                    <img class="rounded-circle shadow-1-strong"
                                                        src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img%20(32).webp"
                                                        alt="avatar" width="65" height="65" />
                                                </a>
                                                <div class="flex-grow-1 flex-shrink-1">
                                                    <div>
                                                        <div class="d-flex justify-content-between align-items-center">
                                                            <p class="mb-1">
                                                               {{$comment->title}}
                                                            </p>
                                                        </div>
                                                        <p class="small mb-0">
                                                            {{$comment->body}}
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div>
                                    @endforeach


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>
