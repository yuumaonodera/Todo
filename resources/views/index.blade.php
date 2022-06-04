<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Todo</title>
</head>

<body>
  <?php
  $item = array('content', 'created_at', 'update_at');

  foreach ($item as $todo) {
    echo $todo;
    echo '</br>';
  }
  ?>
</body>

</html>