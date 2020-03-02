<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    <h1>Create post</h1>
    @if(count($errors) > 0)
        @foreach($errors->all() as $err)
            <div class="error">{{ $err }}</div>
        @endforeach
    @endif
    <div class="row">
        <div class="col-lg-12">

            <div class="">
                <p><a href="{{ route('post.index') }}">Back List post</a></p>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">
                    Create post
                </div>

                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                            {!! Form::open(['route'=> 'post.store', 'method' => 'post']) !!}
                            <div class="form-group">
                                <label>Post title</label>
                                <input class="form-control" name="title" placeholder="Post title">
                            </div>

                            <div class="form-group">
                                <label>content</label>
                                <input class="form-control" name="content" placeholder="Slug">
                            </div>

                            <div class="form-group">
                                <label>category_id</label>
                                <input class="form-control" name="category_id" placeholder="category_id">
                            </div>

                            <input type="submit" value="Submit" class="btn btn-primary">
                            {{ Form::close() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>