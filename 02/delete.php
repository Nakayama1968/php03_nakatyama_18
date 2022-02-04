<?php
require_once('funcs.php'); 

//1.POSTデータ取得
$id = $_GET['id'];

//2.DB接続
$pdo = db_conn();

//3.データ登録SQL作成
$stmt = $pdo->prepare('DELETE FROM gs_user_table WHERE id = :id');
// id = :idがないと全削除に

$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute(); //実行
// PARAM_INT整数

//4.データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}