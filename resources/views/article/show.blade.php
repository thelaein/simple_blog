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
    <div class="row justify-content-center">
        <div class="col-12">
            <h4>Article List</h4>

                <div class="card">
                    <div class="card-body">
                        <h4>{{$article->title}}</h4>
                        <p>{{$article->description}}</p>
                        <a href="{{route('article.index')}}" class="btn btn-outline-warning">See All</a>

                    </div>
                </div>

        </div>
    </div>
</div>
</body>
</html>
