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

  <form action='/add' method="post">
    <table>
      @csrf
      <tr>
        <th>
          form
        </th>
        <td>
          <input type="text" name="form">
        </td>
      </tr>
      <td>
        <button>送信</button>
      </td>
    </table>
  </form> 
</body>

</html>