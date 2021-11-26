@extends('master')
@section('content')
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
@endsection
