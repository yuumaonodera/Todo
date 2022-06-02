<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  @foreach($item as $todo)
      <h1>{{$item -> string}}</h1>
      <h1>{{$item -> timestamp}}</h1>
      echo 'item : ' .$item;
      echo '<br>';
      echo 'todo : ' .$todo;
      echo '<br>';
  @endforeach
</body>

</html>