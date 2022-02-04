<?php
require_once('funcs.php'); 

//1.DB接続
$pdo = db_conn();

//2.データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM gs_user_table');
$status = $stmt->execute();

//3.データ表示
$view = '';
if ($status === false) {
    sql_error($stmt);
    
} else {
    while ($result = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $view .= '<table align="center">';
        $view .= '<td>'.$result['name'].'</td>'. '<td>'.$result['lid']. '</td>'.'<td>'.$result['lpw']. '</td>'. '<td>'.$result['kanri_flg']. '</td>'.'<td>'. $result['life_flg']. '</td>';

        $view .= '<td>'.'<a href="detail.php?id='.$result['id'] .'">';
        $view .= '<button type="button" class="btn btn-renew">更新</button>';
        $view .= '</a>'.'</td>';

        $view .= '<td>'.'<a href="delete.php?id='.$result['id'] .'">';
        $view .= '<button type="button" class="btn btn-renew">削除</button>';
        $view .= '</a>'.'</td>';

        $view .= '</p>';
        $view .= '</table>';
    }
}
?>


<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>データ一覧</title>
    <link rel="stylesheet" href="css/range.css">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <style>
        div {
        font-size: 18px;
        }
        tr {
        margin: auto;
        table-layout: fixed;
        }
        td {
        background-color: #FFEECE;  
        margin: auto;
        table-layout: fixed;
        text-align :center;
        }
        th {
        background-color: #FFDBCE;
        margin: auto;
        table-layout: fixed;
        }

        table {
        margin: auto;
        width: 80%;
        table-layout: fixed;
        }
    </style>
</head>

<body id="main">
 
    <header>
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.php">新規ユーザー登録</a>
                </div>
            </div>
        </nav>
    </header>

    <div>
        <div class="container jumbotron">
            <a href="detail.php"></a>
            <table>
            <tr>
                <th>名前</th>
                <th>ユーザーID</th>
                <th>パスワード</th>
                <th>管理者</th>
                <th>退職者</th>
                <th>更新</th>
                <th>削除</th>
            </tr>
            </table>
            <?= $view ?>
        </div>
    </div>

</body>

</html>