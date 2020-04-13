<?php
//POSTされてきたデータを取得
$user_name=$_POST['user_name'];
$hobby=$_POST['hobby'];
// var_dump($user_name); //エラーを見つける用のコード、文字などの表示　
//  var_dump($hobby);//エラーを見つける用のコード、文字などの表示　
?>

<html>
    <head>
    <meta charset="UTF-8">
    </head>
<body>
<h1>登録ページ</h1>
    <p>こんにちは<?php echo $user_name ?>さん。</p>
    <p>趣味は<?php echo $hobby ?>ですね。</p>
    <p>登録完了しました。</p>
    </body>
</html>