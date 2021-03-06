@extends('layout')

@section('main')
    <div class="index-head-background" id="wave">
    </div>
    <div class="container-fluid">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="jumbotron">
                            <h3 style="font-size: 42px;">I love coding</h3>
                            <br/>

                            <p style="color:#8b8a88">All i need is time, write coding, run code. change myself !</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="index-editor-card">
                            <div class="top">
                                <i class="circle bg-red-1"></i>
                                <i class="circle bg-yellow-1"></i>
                                <i class="circle bg-green-1"></i>
                                <small class="color-gray-1 title">~/console.js</small>
                            </div>
                            <div class="editor-wrap">
                                <label for="editor" class="sr-only"></label>
                                <textarea id="editor" class="sr-only">
require([
    "lib/codemirror",
    "codemirror/mode/codemirror-active-line",
    "codemirror/mode/codemirror-javascript"
], function (CodeMirror) {
    var codeMirror = CodeMirror.fromTextArea(document.getElementById("editor"), {
        lineNumbers: true,
        lineWrapping: true,
        readOnly: false,
        styleActiveLine: true,
        mode: "javascript",
        autofocus: true
    });

    codeMirror.setSize('100%', '100%');
});
                                </textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
            require([
                "lib/codemirror",
                "codemirror/mode/active-line",
                "codemirror/javascript/javascript"
            ], function (CodeMirror) {

                var codeMirror = CodeMirror.fromTextArea(document.getElementById("editor"), {
                    lineNumbers: true,
                    lineWrapping: true,
                    readOnly: false,
                    styleActiveLine: true,
                    mode: 'javascript',
                    autofocus: true
                });
                codeMirror.setSize('100%', '100%');
            });
        </script>

        <div class="container">
            @foreach($articles as $article)
                <article class="index-article-card">
                    <div class="row">
                        <header class="col-md-12">
                            <h3>
                                <a href="{{route('topic.show',$article['id'])}}">{{$article['title']}}</a>
                            </h3>
                        </header>
                    </div>
                    <br/>

                    <div class="row">
                        <div class="col-md-12">
                            {!! $article['content'] !!}
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </div>
@stop