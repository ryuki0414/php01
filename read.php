

<?php
$file = fopen('data/data.txt', 'r');// ファイルを開く　rは読み込みモードで開く

echo "<table>\n"; // 表の開始

// ヘッダ行の作成
echo "<tr>";
echo "<th>日付</th>";
echo "<th>名前</th>";
echo "<th>メールアドレス</th>";
echo "<th>好きな食べ物</th>";
echo "</tr>\n";

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    $data = explode(",", $str);

    // データ行の作成
    echo "<tr>";
    echo "<td>" . $data[0] . "</td>"; // Date
    echo "<td>" . $data[1] . "</td>"; // Name
    echo "<td>" . $data[2] . "</td>"; // Email
    echo "<td>" . $data[3] . "</td>"; // food
    echo "</tr>\n";
}

echo "</table>\n"; // 表の終了

fclose($file); // ファイルを閉じる
?>
