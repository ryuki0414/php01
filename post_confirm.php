<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

$name = h($_POST["name"]);
$mail = h($_POST["mail"]);

?>
<html>
<head>
<meta charset="utf-8">
<title>POST（受信）</title>
</head>
<body>
お名前：<?= $name ?> 
<!-- echoのショートカット -->
EMAIL：<?php echo $mail ?>

<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>