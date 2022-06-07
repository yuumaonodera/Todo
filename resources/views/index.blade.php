<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>COACHTECH</title>
</head>

<body>
  <style>
    body {
      background-color: #4b0082;
      display: table-cell;
    }
    button {
      border-color: #ff00ff;
      color: #ff00ff;
      border-radius: 10px;
      padding: 7px 15px 7px 15px;
      margin-left:70px;
    }
    input {
      height:30px;
      border-radius: 5px;
      border-color: aliceblue;
      margin-top:20px;
    }
    table {
      background-color: white;
      vertical-align: middle;
    }
    h2 {
      display:inline-block;
      font-size:16px;
      margin:10px 30px 10px 30px;
    }
  </style>
  <form action='/' method="POST">
    <table>
      @csrf
      <tr>
        <td>
          <input type="text" name="content" size="80px">
          <button>追加</button>
        </td>
      </tr>
      <th>
          <h2>作成日</h2>
          <h2>タスク名</h2>
          <h2>更新</h2>
          <h2>削除</h2>
      </th>
    </table>
  </form> 
</body>

</html>