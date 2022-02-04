<?php
require_once('funcs.php'); 

//1.POSTデータ取得
$id = $_GET['id'];

//2.DB接続
$pdo = db_conn();

//3.データ登録SQL作成　バインド変数(:id')を仮置きしてセキュリティ上の問題を回避
$stmt = $pdo->prepare('SELECT * FROM gs_user_table where id = :id');
$stmt ->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

//4.データ表示
$view = '';
if ($status === false) {
    sql_error($stmt);
    // $error = $stmt->errorInfo();
    // exit('SQLError:' . print_r($error, true));
} else {
    // データが取得できたら fetchでデータを取ってくる
    $view = $stmt->fetch();

    
}

// var_dump($view);

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>データ登録</title>
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
                <div class="navbar-header"><a class="navbar-brand" href="select.php">データ一覧</a></div>
            </div>
        </nav>
    </header>

    <form method="POST" action="update.php">
        <div class="jumbotron">
            <!-- <fieldset> -->
            <fieldset>
                <legend>ユーザーデータ更新</legend>
                <label>名 前<input type="text" name="name"></label><br>
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