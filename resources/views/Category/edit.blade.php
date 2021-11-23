<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-12">
            <form action="{{route('category.update',$category->id)}}" method="post">
                @csrf
                @method('put')
                <div class="col-12 col-lg-4">
                    <label for="" class="form-label">Category Name</label>
                </div>
                <div class="col-12 col-lg-4">
                    <input type="text" class="form-control" name="title" value="{{$category->title}}">
                </div>
                <div class="col-12 col-lg-4">
                    <button class="btn btn-outline-primary">Update</button>
                </div>
            </form>
            @include('Category.list')
        </div>
    </div>
</div>
</body>
</html>
