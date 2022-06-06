<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  @foreach($item as $todo)
  <h1>{{$todo -> content}}</h1>
  @endforeach
  <form action='/' method="POST">
    <table>
      @csrf
      <tr>
        <th>from</th>
        <td>
          <input type="text" name="form">
          <button>追加</button>
        </td>
      </tr>
    </table>
  </form> 
</body>

</html>