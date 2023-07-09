<?php
ini_set('display_errors', 'On'); // エラーを表示させるようにしてください
error_reporting(E_ALL); // 全てのレベルのエラーを表示してください
?>
<?php
$str="2023-07-04 13:44:03,postテスト,test@example.com";
$arr=explode(",",$str);
var_dump($arr);
?>