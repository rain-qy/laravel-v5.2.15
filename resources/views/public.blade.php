<!DOCTYPE html>
<html>
<head>
    <title>Laravel</title>
    <link href="//cdn.bootcss.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet">
    <link href=" {{ asset('/css/all.css') }} " rel="stylesheet" type='text/css' media='all'/>
    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>
<div class="container">
    <section class="content">
        <div class="pad group">
            @yield('content')
        </div>
    </section>
</div>
    {{--@yield('content')--}}
    @yield('footer')
</body>
</html>
