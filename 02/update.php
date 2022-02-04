<?php

require_once('funcs.php'); 

//1. POSTデータ取得
$name   = $_POST['name'];
$lid  = $_POST['lid'];
$lpw    = $_POST['lpw'];
$kanri_flg = $_POST['kanri_flg'];
$life_flg = $_POST['life_flg'];
$id = $_POST['id'];

//2. DB接続
$pdo = db_conn();

//3. データ登録SQL作成
$stmt = $pdo->prepare('UPDATE 
                        gs_user_table 
                    SET
                       name = :name,
                       lid = :lid,
                       lpw = :lpw, 
                       kanri_flg = :kanri_flg,
                       life_flg = :life_flg
                    where
                        id = :id;
                    ');

// 数値の場合 PDO::PARAM_INT
// 文字の場合 PDO::PARAM_STR
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':lid', $lid, PDO::PARAM_STR);
$stmt->bindValue(':lpw', $lpw, PDO::PARAM_STR);
$stmt->bindValue(':kanri_flg', $kanri_flg, PDO::PARAM_INT);
$stmt->bindValue(':life_flg', $life_flg, PDO::PARAM_INT);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);

$status = $stmt->execute(); //実行

//4.データ登録処理後
if ($status === false) {
    sql_error($stmt);
} else {
    redirect('select.php');
}