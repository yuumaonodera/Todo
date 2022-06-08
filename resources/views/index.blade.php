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
    }
    button {
      border-color: #ff00ff;
      color: #ff00ff;
      border-radius: 10px;
      padding: 7px 15px 7px 15px;
      margin-left:70px;
      margin-right:30px;
    }
    input {
      height:30px;
      border-radius: 5px;
      border-color: aliceblue;
      margin-top:20px;
      margin-left:30px;
    }
    table {
      background-color: white;
      border-radius:5px;
      margin-top: 240px;
      margin-left: auto;
      margin-right: auto;
    }
    .th1 {
      font-size: 15px;
      display: flex;
    }
    th.font {
      margin-left: 20px;
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
        <div class="th1">
          <p class="th.font">作成日</p>
          <p class="th.font1">タスク名</p>
          <p class="th.font2">更新</p>
          <p class="th.font3">削除</p>
        </div>
      </th>
    </table>
  </form> 
</body>

</html>