<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Post - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{ asset('css/blog-post.css')}}" rel="stylesheet">

</head>

<body>

        <div class="container">

                <div class="row">
            
                    <!-- Post Content Column -->
            
                    @foreach($posts->comments as $comment)
                        @if($comment->child_id==null)
                            <div class="media mb-4">
                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                <div class="media-body">
                                    <h5 class="mt-0">{{ $comment->id }}</h5>
                                    {{ $comment->comment }}.
                                    @foreach($posts->comments as $comment1)
                                        @if($comment1->child_id==$comment->id)
                                            <div class="media mt-4">
                                                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                                                <div class="media-body">
                                                    <h5 class="mt-0">{{ $comment1->id }}</h5>
                                                    {{ $comment1->comment }}.
                                                    @foreach($posts->comments as $comment2)
                                                    @if($comment2->child_id==$comment1->id)
                                                    <div class="media mt-4">
                                                        <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50"
                                                             alt="">
                                                        <div class="media-body">
                                                                <h5 class="mt-0">{{ $comment2->id }}</h5>
                                                                {{ $comment2->comment }}.
                                                        </div>
                                                    </div>
                                                    @endif
                                                    @endforeach
            
                                                </div>
                                            </div>
            
                                        @endif
                                    @endforeach
                                </div>
                            </div>
                    @endif
                @endforeach
            
                <!-- Comment with nested comments -->
            
                </div>
            
            
            </div>
<!-- Bootstrap core JavaScript -->
<script src="{{ asset('vendor/jquery/jquery.min.js')}}"></script>
<script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

</body>

</html>
