<html>
    <head>
        <title>送信結果</title>
        <link rel="stylesheet" type="text/css" href="wiki.css">
    </head>
    <body>

        <h1>アンケート結果</h1>
        <h2>基本情報</h2>
        <ul>
            <li>名前：<?= filter_input(INPUT_GET, 'name') ?>
            <li>年齢：<?= filter_input(INPUT_GET, 'year') ?>
            <li>住所：<?= filter_input(INPUT_GET, 'prefecture') ?>
        </ul>

        <h2>アンケート</h2>
        <ul>
            <li>毎日、朝食を食べていますか？&nbsp;&nbsp;回答：<?= filter_input(INPUT_GET, 'q1') ? 'はい' : 'いいえ' ?>
            <li>睡眠は6時間以上とっていますか？&nbsp;&nbsp;回答：<?= filter_input(INPUT_GET, 'q2') ? 'はい' : 'いいえ' ?>
            <li>週に1時間以上運動していますか？&nbsp;&nbsp;回答：<?= filter_input(INPUT_GET, 'q3') ? 'はい' : 'いいえ' ?>
        </ul>
</html>
