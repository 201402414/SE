<?php

$recvNum = $_POST['rev_num'];
$myfile1=fopen("rev_num.txt", "w");
fwrite($myfile1, $recvNum);

echo fread($myfile1, filesize("rev_num.txt"));

echo("<script>location.href='non_Rev_manage.php';</script>");



 ?>
