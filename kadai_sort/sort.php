<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
    <?php
      // 関数
       function sort_2way($array, $order) {
       // $orderがtrueの場合
       if ($order == true) { 
       // 引数の配列を$numsにコピー
        $nums = $array; 
        sort($nums); // 昇順ソート
        echo "昇順にソートします。<br>";
        foreach ($nums as $num) {
            echo $num . '<br>';
        }
    } else { // $orderがfalseの場合（降順ソート）
        $nums = $array; // 引数の配列を$numsにコピー
        rsort($nums); // 降順ソート
        echo "降順にソートします。<br>";
        foreach ($nums as $num) {
            echo $num . '<br>';
        }
    }
}
// ソートする配列を宣言
$array = array(15, 4, 18, 23, 10);

// 関数の呼び出し (昇順)
sort_2way($array, true);

// 関数の呼び出し (降順)
sort_2way($array, false);
?> 
    </p>
</body>
</html>
