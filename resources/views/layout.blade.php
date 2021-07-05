<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href={{URL::asset('css/bootstrap.min.css')}}>
    <link rel="stylesheet" href={{URL::asset('css/style.css')}}>
    <title>Document</title>
</head>

<body>
    {{View::make("header")}}
    @yield("product")
    @yield("signup");
    @yield("login");
    @yield("detail");

</body>

</html>