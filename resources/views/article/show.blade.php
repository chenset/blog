@extends('layout')

@section('main')
    <article class="container article-wrap">
        <header><h3 class="text-center">{{$article['title']}}</h3></header>
        <hr/>
        <h5 class="text-right text-muted">
            <small class="text-muted" style="margin-left: 20px">{{date('Y-m-d',$article['release_time'])}}</small>
        </h5>
        <br/>
        {!! $article['content'] !!}
    </article>
@stop