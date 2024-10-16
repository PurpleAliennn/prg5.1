<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <a href="{{ route('ideas.create') }}"> add a new idea </a>

        @foreach ($characters as $character)
            <h3>{{$character -> name}}</h3>
            <p>{{$character -> idea}}</p>
            <a href="{{route('ideas.show', $character -> id)}}"> Details </a>
        @endforeach
</body>
</html>
