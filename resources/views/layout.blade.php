<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <title>Fly Say</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="renderer" content="webkit">
    <link href="{{asset('/css/bootstrap.custom.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/css/layout.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/css/codemirror.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('/css/highlight/github.css')}}" rel="stylesheet" type="text/css"/>
    @section('layoutCss')
        {{-- 按需载入css, 这个section会被每个子视图重写 --}}
    @show

    <!--[if lt IE 9]>
    <script src="{{asset('/js/respond.min.js')}}"></script>
    <script src="{{asset('/js/html5shiv.min.js')}}"></script>
    <![endif]-->

    <script src="{{asset('/js/require.js')}}"></script>
    <script>
        requirejs.config({
            baseUrl: '/js',
            paths: {
                jquery: 'jquery.min',
                highlight: 'highlight.pack'
            }
        });
    </script>
</head>
<body>
<div id="wrap">
    <nav class="navbar navbar-default index-navbar">
        <div class="container">
            <div class="navbar-header">
                <a class="navbar-brand" href="{{route('index')}}">Fly Say</a>
            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="{{nav_active('topic.index')?' active ':''}}"
                                href="{{route('topic.index')}}">编码</a>
                    </li>
                    <li><a href="https://github.com/chenset" target="_blank"><i class="fa fa-github"></i> GitHub</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('main')
    <div id="footer-buff">
        {{--footer置底--}}
    </div>
</div>

<div id="footer"> {{--footer置底--}}
    <div class="container">
        <nav class="navbar navbar-default index-footer-navbar">
            <div class="container">
                <ul class="nav navbar-nav navbar-right pull-right">
                    <li><a href="{{route('admin.index')}}"><i class="fa fa-slack"></i> # Admin</a></li>
                </ul>
            </div>
        </nav>
    </div>
</div>

@section('js')
    {{-- 按需载入js, 这个section会被每个子视图重写 --}}
@show
<script>
    require(['highlight'], function () {
        var els = document.getElementsByTagName('pre'), i;
        for (i in els) {
            if (els[i].tagName) {
                var e = els[i].getElementsByTagName('code')[0];
                if (e && e.tagName) {
                    hljs.highlightBlock(e);
                }
            }
        }
    });
</script>
</body>
</html>