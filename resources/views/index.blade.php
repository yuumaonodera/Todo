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
    .background {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 70%;
      padding: 24px;
      background: #fff;
      border-radius: 8px;
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
      margin-left:30px;
    }
    table {
      margin-top: 40px;
      margin-left: 40px;
    }
    .content {
      background-color: white;
      border-radius: 5px;
      margin-right: 25%;
      margin-left:25%;
    }
    .title {
      font-size: 20px;
      font-weight: bolder;
      margin-left: 25px;
    }
    .tr {
      margin-left: 20px;
    }

  </style>
  <div class="content">
    <div class="card">
      <p class="title">Todo List</p>
      <form action='/' method="POST">
       @csrf
       <div>
        <input type="text" name="content" size="70px">
        <button>追加</button>
       </div>
      </form>

      <table>
       <tr>
        <th>作成日</th>
        <th>タスク名</th>
        <th>更新</th>
        <th>削除</th>
       </tr>
       <tr>
        <td>aaaaaaaaaaaaaaaaaaaa</td>
        <td>aaaaaaaaaaaa</td>
        <td>aaaaaa</td>
        <td>aaaaaa</td>
       </tr>
      </table>
    </div>
   </div>
</body>

</html>