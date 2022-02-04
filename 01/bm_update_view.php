<?php
//funcs.php呼び出す
require_once('funcs.php');

//1.IDを取得する
$id = $_GET['id'];

//2.DB接続
$pdo = db_conn();

//3.データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_bm_table WHERE id = :id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行

//4.データ表示
$view = "";
if ($status == false) {
    sql_error($stmt);

} else {
    $view = $stmt->fetch();
    }
?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>データ更新</title>
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="style.css">
    <style>
        div {
            padding: 10px;
            font-size: 18px;
        }
    </style>
</head>

<body>

    <header>
    <nav class="">
            <div class="">
                <div class=""><a class="" href="bm_list_view.php">ブックリストへ</a></div>
                
            </div>
        </nav>
    </header>


    <form action="bm_update.php" method="POST">
        <div class="">
            <fieldset>
                <legend class="title">更新画面</legend>
                <label>タイトル<input type="bookname" name="bookname" value=<?= $view['bookname'] ?>></label><br>
                <label>著　　者<input type="author" name="author" value=<?= $view['author'] ?>></label><br>
                <label>アドレス<input type="bookurl" name="bookurl" value=<?= $view['bookurl'] ?>></label><br>
                <label>コメント<textArea name="comment" rows="4" cols="40"><?= $view['comment'] ?></textArea></label><br>
                <input type="hidden" name="id" value=<?= $view['id'] ?>><br>
                <input type="submit" value="保存">
            </fieldset>
        </div>
    </form>

    <footer>
        <nav class="">
            <div class="">
                <a class="" href="index.php">ブック登録</a></div>
            </div>
        </nav>
    </footer>


</body>

</html>

