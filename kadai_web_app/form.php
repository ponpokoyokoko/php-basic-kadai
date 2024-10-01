<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>PHP基礎編</title>
 </head>
 
<body>
    <h2>社員情報入力フォーム</h2>
    <form action="confirm.php" method="post">
        <table>
            <tr>
                <td>社員名</td>
                <td>
                    <input type="text" name="employee_name">
                </td>
            </tr>
            <tr>
                <td>年齢</td>
                <td>
                    <input type="text" name="employee_age">
                </td>
            </tr>
            <!-- <tr> -->
                <!-- <td>性別</td> -->
                <!-- <td> -->
                    <!-- <input type="radio" name="user_gender" value="男性" checked>男性 -->
                    <!-- <input type="radio" name="user_gender" value="女性">女性 -->
                    <!-- <input type="radio" name="user_gender" value="その他">その他 -->
                <!-- </td> -->
            <!-- </tr> -->
            <tr>
                <td>所属部署</td>
                <td>
                    <select name="department">
                        <option value="開発部">開発部</option>
                        <option value="営業部">営業部</option>
                        <option value="人事部">人事部</option>
                    </select>
                </td>
            </tr>
            <!-- <tr> -->
                <!-- <td>お問い合わせ内容</td> -->
                <!-- <td> -->
                    <!-- cols属性＝入力欄の幅（文字数）、rows属性＝入力欄の高さ（行数） -->
                    <!-- <textarea name="message" cols="30" rows="10"></textarea> -->
                <!-- </td> -->
            <!-- </tr> -->
        </table>
        <input type="submit" value="送信">
    </form>
</body>
 
</html>
