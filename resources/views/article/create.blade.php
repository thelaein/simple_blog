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
            <form action="{{route('article.store')}}" method="post">
                @csrf
                <div class="col-lg-4">
                    <label for="" class="form-label">Article Title</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="col-lg-4">
                    <label for="" class="form-label">Category Id</label>
                    <select name="category" id="" class="form-select">
                        @foreach(\App\Models\Category::all() as $c)
                            <option value="{{$c->id}}">{{$c->title}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-lg-4">
                    <label for="" class="form-label">Description</label>
                    <textarea name="description" class="form-control" rows="5"></textarea>
                </div>
                <button class="btn btn-outline-primary">Create Article</button>
            </form>
        </div>
    </div>
</div>
</body>
</html>
