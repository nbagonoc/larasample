<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name', 'LaraSample') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="/css/app.css" />
    <script src="main.js"></script>
</head>
<body>
    @include('inc.navbar')
    <div class="container">
        @if(Request::is('/'))
            @include('inc.showcase')
        @endif
        <div class="row">
            <div class="col-md-9">
                <div class="well">
                    @if(count($errors) > 0)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger">
                                {{error}}
                            </div>
                        @endforeach
                    @endif
                    @yield('content')
                </div>
            </div>
            <div class="col-md-3">
                @include('inc.sidebar')
            </div>
        </div>
    </div>
    @include('inc.footer')
</body>
</html>