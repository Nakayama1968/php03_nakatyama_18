<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>ユーザー登録</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
            padding: 10px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <a class="navbar-brand" href="select.php">データ一覧</a>
            </div>
        </nav>
    </header>
 
    <form method="POST" action="insert.php">
        <div class="jumbotron">
            <fieldset>
                <legend>新規ユーザー登録</legend>
                <label>名     前<input type="text" name="name"></label><br>
                <label>ユーザーID<input type="text" name="lid"></label><br>
                <label>パスワード<input type="text" name="lpw"></label><br>
                <label>管理者<input type="checkbox" name="kanri_flg[]" value=1 checked></label><br>
                <label>退職者<input type="checkbox" name="life_flg[]"value=1 checked></label><br>
                <input type="submit" value="送信">
            </fieldset>
        </div>
    </form>
</body>
</html>