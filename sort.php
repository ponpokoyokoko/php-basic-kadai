<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
        // 配列を定義する
        $nums = [15, 4, 18, 23, 10 ];
        // 関数を定義する
        function sort_2way($array,$order){
          // 引数$orderはTRUE(昇順)か？
          if ($order === TRUE){
            echo '昇順にソートします。<br>';
            // sotr関数を定義し引数arrayを昇順でソート
            sort($array);
            // foreach文で要素を出力する
              foreach($array as $num){
               echo "{$num} <br>";
              }
          } else {
            // 引数$orderはTRUE(昇順)でないならば→つまりFALSE（降順）
            echo '降順にソートします。<br>';
            // rsotr関数を定義し引数arrayを降順でソート
            rsort($array);
            // foreach文で要素を出力する
            foreach($array as $num){
              echo "{$num} <br>"; 
           }
          }
        }
          

        

        // 関数の呼び出し
        // 引数$arrayに配列$numsを代入、引数$orderにTRUE/FALSEを代入
        sort_2way($nums ,TRUE);
        sort_2way($nums ,FALSE);
        ?>
    </p>
</body>

</html>