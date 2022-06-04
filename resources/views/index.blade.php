<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
</head>

<body>
  @foreach($item as $todo)
  <h1>{{$todo -> content}}</h1>
  @endforeach
</body>

</html>