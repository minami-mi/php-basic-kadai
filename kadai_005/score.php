<!DOCTYPE html>
<html lang="ja">

<head>
   <meta charset="UTF-8">
   <title>テストの平均点を計算しよう   </title>
</head>

<body>
   <p>
       <?php
       // 変数（score1〜score10）に値を代入
       $score1 = 80 ;
       $score2 = 60 ;
       $score3 = 55 ;
       $score4 = 40 ;
       $score5 = 100 ;
       $score6 = 25 ;
       $score7 = 80 ;
       $score8 = 95 ;
       $score9 = 30 ;
       $score10 = 60 ;
       // 合計点を計算する
       $total = $score1 + $score2 + $score3 + $score4 + $score5 + $score6 + $score7 + $score8 + $score9 + $score10 ;
      // 合計点の平均を出す
      $average = $total / 10;
      echo $average ;
      ?>
   </p>
</body>

</html>


