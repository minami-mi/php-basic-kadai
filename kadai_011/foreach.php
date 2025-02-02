<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>foreach文を使って連想配列の値とキーを出力しよう
   </title>
</head>

<body>
   <p>
   <?php
        $products = ['名前' => '玉ねぎ', '値段' => 200, '産地' => '北海道'];


  //  配列$user_namesのインデックスと値を1つずつ順番に出力する
  foreach ($products as $index => $value) {
    echo "{$index}：{$value}<br>";
}
        ?>
   </p>
</body>

</html>