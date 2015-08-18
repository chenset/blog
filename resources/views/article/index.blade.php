@extends('layout')
@section('main')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <ul class="article-list">
                    @foreach($articles as $article)
                        <li>
                            <h2>
                                <a href="{{route(strtolower(config('blog.article_type')[$article['type']]).'.show',$article['id'])}}">{{$article['title']}}</a>
                            </h2>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@stop