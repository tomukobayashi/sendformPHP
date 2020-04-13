<?php
//POSTされてきたデータを取得
$user_name=$_POST['user_name'];
$hobby=$_POST['hobby'];
// var_dump($user_name); //エラーを見つける用のコード、文字などの表示　
// var_dump($hobby);//エラーを見つける用のコード、文字などの表示　
?>

<html>
    <head>
    <meta charset="UTF-8">
    </head>
<body>
<h1>受信ページ</h1>
    <p>あなたの名前は<?php echo $user_name ?>さんです。</p>
    <p>趣味は<?php echo $hobby ?>です。</p>
    <p>こちらの情報でよろしいですか？</p>

    <form action="./complete.php" method="POST">
        <input type="hidden" name="user_name" value="<?php echo $user_name ?>">
        <input type="hidden" name="hobby"  value="<?php echo $hobby ?>">
        <input type="submit" value="登録">
    </form>
    </body>
</html>