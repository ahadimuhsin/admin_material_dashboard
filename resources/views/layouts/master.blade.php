<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ url('assets/img/apple-icon.png') }}" />
    <link rel="icon" type="image/png" href="{{ url('assets/img/favicon.png') }}" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Material Dashboard Pro by Creative Tim</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    @include('includes.style')
</head>

<body>
    <div class="wrapper">
        @include('includes.sidebar')
        <div class="main-panel">
            @include('includes.topbar')

            <div class="content">
                @yield('content')
            </div>
            @include('includes.footer')
        </div>
    </div>
</body>
@include('includes.script')
</html>
