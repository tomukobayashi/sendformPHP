<html>
    <head>
    <meta charset="UTF-8">
    </head>
<body>
<h1>練習ホーム</h1>
    <p>次のページへデータを渡してみよう</p>

<!--この下にフォームを追加 -->
<!-- 飛び先と送信手段を設定-->
    <form action="./confirm.php" method="POST">
        <lavel>お名前</lavel>
            <input type="text" name="user_name">
        <lavel>趣味</lavel>
            <input type="text" name="hobby">
        <input type="submit" value="確認する">
    </form>
    </body>
</html>