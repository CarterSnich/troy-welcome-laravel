<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
</head>

<body>

    <h1>Welcome! {{ request()->get('name') }}</h1>

    <form action="./" method="GET">
        @csrf
        <label for="name">Name: </label>
        <input type="text" name="name" id="">
        <button type="submit">Enter</button>
    </form>


</body>

</html>
