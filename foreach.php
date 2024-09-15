<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>課題11</title>
 </head>
 
 <body>
     <p>
         <?php
         $vegatable_date = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];
 
         //  連想配列vegatable_dateのキーと値を1つずつ順番に出力する
         foreach ($vegatable_date as $key => $value) {
             echo "{$key}:{$value} <br>";
         }
         ?>
     </p>

     </body>
 
 </html>