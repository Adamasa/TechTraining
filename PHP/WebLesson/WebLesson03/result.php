<?php
// 汎用機能の読み込み
require_once 'utility.php';

// セッション再開
session_start();

// セッションがない場合
if (!isset($_SESSION['id'])) {
    redirect("./login.html");
}

$table = filter_input(INPUT_GET, 'table');

$data = execute_select_all($table);
?>
<html>
    <head>
        <title>リザルトページ</title>
        <link rel="stylesheet" type="text/css" href="wiki.css">
    </head>
    <body>
        <?php if ($data) : ?>
            <table>
                <thead>
                    <tr>
                        <?php $header = $data[0]; ?>
                        <?php foreach ((array) $header as $key => $col) : ?>
                            <th><?= $key ?></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ((array) $data as $row) : ?>
                        <tr>
                            <?php foreach ((array) $row as $col) : ?>
                                <td><?= $col ?></td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php else: ?>
            <p>指定されたテーブルにはデータが登録されていません。</p>
        <?php endif; ?>


        <br /><br />


        <div>
            <a href="top.php">topへ戻る</a>
        </div>

    </body>
</html>
