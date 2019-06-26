<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Từ Điển</title>
</head>
<body>
    <form action="{{route('mr')}}" method="post">
        @csrf
        <h2>Từ điển</h2>
        <p>
            <input type="text" name="name" placeholder="nhập">
        </p>
        <p>
            <button type="submit">Dịch</button>
        </p>
    </form>
</body>
</html>
