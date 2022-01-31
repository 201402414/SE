<?php


$newpw=$_POST['chg_pwd'];
$newmail=$_POST['chg_mail'];

$line = @file("id.txt") or $result = "파일을 읽을 수 없습니다.";

$id = $line[0];

$lines = @file("alllist.txt") or $result = "파일을 읽을 수 없습니다.";

$infoArray = array();
if ($lines != null) {

  for($i = 0; $i < count($lines); $i++){
    $arr = explode("|", $lines[$i]);


        $infoArray[$i][0] = $arr[0];
        $infoArray[$i][1] = $arr[1];
        $infoArray[$i][2] = $arr[2];


  }
}
$count = 0;
for($k = 0; $k < sizeof($infoArray); $k++){
  if($id != $infoArray[$k][0]){
    $count++;
  }
  else{
    break;
  }
}

$infoArray[$count][1] = $newpw;
$infoArray[$count][2] = $newmail;

$link_addres = "./mem_main.html";
  $myfile=fopen("alllist.txt", "w");

  for($u = 0; $u < sizeof($infoArray); $u++){

    fwrite($myfile, $infoArray[$count][0]."|".$infoArray[$count][1]."|".$infoArray[$count][2]."\n");

  }
 echo fread($myfile, filesize("alllist.txt"));

 echo "회원정보 수정이 완료되었습니다..";
 echo nl2br("\n");
 echo "<a href='$link_addres'>돌아가기</a>";


  //echo($infoArray[0][0]." ".$infoArray[0][1]." ".$infoArray[0][2]." ".$infoArray[1][0]." ".$infoArray[1][1]." ".$infoArray[1][2]);



?>
