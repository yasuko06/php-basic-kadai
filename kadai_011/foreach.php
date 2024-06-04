<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// step2 連想配列を作成し、変数に代入します。
$food = ['name' => '玉ねぎ', 'price' => 200, 'product' => '北海道'];


//step3 foreach文とecho文を使いブラウザに要素それぞれのキーと値を出力します。
$personal_data = ['id' => 1, '名前' => '侍太郎', '年齢' => 30];
foreach ($personal_data as $key => $value) {
    echo "{$key}:{$value}".'<br>';
}

?>
    
</body>
</html>