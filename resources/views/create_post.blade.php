<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h3>create post</h3>
    <br>
    <form method="post" action="{{ route('store') }}">
        @csrf
        <input type="text" name="title">
        <br>
        <button type="submit">submit</button>
    </form>
</body>
</html>

