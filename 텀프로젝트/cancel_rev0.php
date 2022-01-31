<?php
$ids = @file("id.txt") or $result = "파일을 읽을 수 없습니다.";
$id = $ids[0];
$rev_nums = @file("rev_num.txt") or $result = "파일을 읽을 수 없습니다.";
$rev_num = $rev_nums[0];
$lines = @file("rev_info.txt") or $result = "파일을 읽을 수 없습니다.";

$infoArray = array();
if ($lines != null) {

  for($i = 0; $i < count($lines); $i++){
    $arr = explode("|", $lines[$i]);
        $infoArray[$i][0] = $arr[0];
        $infoArray[$i][1] = $arr[1];
        $infoArray[$i][2] = $arr[2];
        $infoArray[$i][3] = $arr[3];
        $infoArray[$i][4] = $arr[4];
        $infoArray[$i][5] = $arr[5];
  }
}

if($id != "-2014"){
for($i = 0; $i< count($lines); $i++){
  if($infoArray[$i][0] == $id){
    for($j = 0; $j <6; $j++){
      if($infoArray[$i+1][0] !=null){
        $infoArray[$i][$j] = $infoArray[$i+1][$j];
      }
      else{
        $infoArray[$i][$j] = null;
      }
    }

  }
}
}else{
  if($infoArray[$i][0] == $rev_num){
    for($j = 0; $j <6; $j++){
      if($infoArray[$i+1][0] !=null){
        $infoArray[$i][$j] = $infoArray[$i+1][$j];
      }
      else{
        $infoArray[$i][$j] = null;
      }
    }

  }
}
$myfile=fopen("rev_info.txt", "w");

for($u = 0; $u < count($lines)-1; $u++){

  fwrite($myfile, $infoArray[$u][0]."|".$infoArray[$u][1]."|".$infoArray[$u][2]."|".$infoArray[$u][3]."|".$infoArray[$u][4]."|".$infoArray[$u][5]."|"."\n");

}
echo fread($myfile, filesize("rev_info.txt"));
if($id == "-2014"){echo"<script> alert('삭제완료!');



location.href='non_Rev_manage.php';
</script>";}
  else{
    echo"<script> alert('삭제완료!');
    location.href='mem_Rev_manage.php';
    </script>";
}
?>
