<?php
//読み込みファイルを外部から指定する
$filename = $argv['1'];

// ファイルの存在チェック
if (!file_exists($filename)) {
    echo "$filename は存在しません";
    exit;
}

// ファイルを取得します
if (! ($recipe_data = file_get_contents($filename))) {
   echo "ファイルが開けません。";
}

// 出力
echo $recipe_data;
