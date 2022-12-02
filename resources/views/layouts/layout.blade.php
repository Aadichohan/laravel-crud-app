<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('frontend/css/boot.css')}}">
</head>
<body>
    
    
    <div class="container-fluid">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
    </div>

    
</body>
</html>