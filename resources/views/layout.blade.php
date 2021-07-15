<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{csrf_token()}}">
    <link rel="stylesheet" href={{URL::asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/style.css')}}>
    <script src="{{URL::asset('js/jquery.js')}}"></script>
    <script src="{{URL::asset('js/admin.js')}}"></script>

    <title>Shop</title>
</head>

<body>
    {{View::make("header")}}
    @yield("product")
    @yield("signup")
    @yield("cart")
    @yield("myorderlist")
    @yield("orderpage")
    @yield("login")
    @yield("detail")
    @yield("admin")
    {{View::make("footer")}}

</body>

</html>