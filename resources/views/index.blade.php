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
      background-color: navy;
    }
    .background {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50vw;
      padding: 30px;
      background: #fff;
      border-radius: 10px;
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
    .button-create:hover {
      background:#ff00ff;
      color: white;
    }
    input {
      height:30px;
      border-radius: 5px;
      border-color: aliceblue;
      margin-left:30px;
    }
    .content {
      width:50vw;
      background-color: white;
      border-radius: 5px;
      position: relative;
      top:360px;
      margin:0 auto;
    }
    .title {
      font-size: 20px;
      font-weight: bolder;
      margin-left: 25px;
    }
    table {
      width: 100%;
      margin-top: 20px;
      padding-right: 25px;
      padding-bottom: 20px;
      padding-left:20px;
      margin-bottom:10px;
    }
    td {
      padding-left: 10px;
      padding-top: 10px;
    }
    .card {
      margin-top: -100px;
      padding-top:1px;
    }
    .button-update {
      border-radius: 5px;
      border-color: #ffa500;
      color: #ffa500;
      padding:7px 15px 7px 15px;
      background-color: white;
    }
    .button-update:hover {
      color: white;
      background: #ffa500;
    }
    .button-delete { 
      border-radius: 5px;
      border-color: #7fffd4;
      color: #7fffd4;
      padding:7px 15px 7px 15px;
      background-color: white;
    }
    .button-delete:hover {
      color: white;
      background:#7fffd4;
    }
    .li {
      padding-top:10px;
    }
  </style>
  <div class="content">
    <div class="card">
      <h3 class="title">Todo List</h3>
      <form action='/' method="POST">
       @csrf
       @if (count($errors) > 0)
       <ul>
         @foreach($errors->all() as $error)
         <li>{{$error}}</li>
         @endforeach
       </ul>
       @endif
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
        </form>
      </tr>
      @endforeach
      </table>
    </div>
   </div>
</body>

</html>