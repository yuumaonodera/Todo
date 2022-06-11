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
    .button-create {
      border-color: #ff00ff;
      color: #ff00ff;
      border-radius: 10px;
      padding: 7px 15px 7px 15px;
      margin-left:70px;
      margin-right:30px;
      background-color: white;
    }
    input {
      height:30px;
      border-radius: 5px;
      border-color: aliceblue;
      margin-left:30px;
    }
    .content {
      background-color: white;
      border-radius: 5px;
      margin-top: 20%;
      margin-right: 27%;
      margin-left:25%;
    }
    .title {
      font-size: 20px;
      font-weight: bolder;
      margin-left: 25px;
    }
    table {
      width: 100%;
      margin-top: 20px;
      padding-right: 30px;
      padding-bottom: 20px;
      padding-left:20px;
    }
    td {
      padding-left: 10px;
      padding-top: 10px;
    }
    .card {
      margin-top: -100px;
    }
    .button-update {
      border-radius: 5px;
      border-color: #ffa500;
      color: #ffa500;
      padding:7px 15px 7px 15px;
      background-color: white;
    }
    .button-delete { 
      border-radius: 5px;
      border-color: #7fffd4;
      color: #7fffd4;
      padding:7px 15px 7px 15px;
      background-color: white;
    }
  </style>
  <div class="content">
    <div class="card">
      <p class="title">Todo List</p>
      <form action='/' method="POST">
       @csrf
       <div>
        <input type="text" name="content" size="70px">
        <button class="button-create">追加</button>
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

       @foreach($item as $todo)
       <tr>
        <td>{{$todo->created_at}}</td>
        <form method="POST" action="update/{{$todo->id}}">
          @csrf
          <td><input type="text" name="content" value="{{$todo->content}}"> </td>
         <td><button class="button-update">更新</button></td>
        </form>
        <form method="POST" action="delete/{{$todo->id}}">
          @csrf
          <td><button class="button-delete">削除</button></td>
       </tr>
       @endforeach
      </table>
    </div>
   </div>
</body>

</html>