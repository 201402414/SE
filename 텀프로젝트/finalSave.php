<?php


$user_ids = @file("id.txt") or $result = "파일을 읽을 수 없습니다.";
$user_id = $user_ids[0];
if($user_id == "-2014"){
$non_mem_num = @file("num.txt")or $result = "파일을 읽을 수 없습니다.";
}
$number = (int)$non_mem_num[0]+1;

$temp= @file("temp.txt");
$n = $number-1;
if ($temp != null) {

  for($i = 0; $i < count($temp); $i++){
    $arr = explode("|", $temp[$i]);

  }
}

$link_addres1 = "mem_main.html";
$link_addres2 = "nonmem_main.html";

$myfile=fopen("num.txt", "w");
fwrite($myfile, $number);
echo fread($myfile, filesize("num.txt"));

$myfile5=fopen("rev_numlist.txt", "a+");
fwrite($myfile5, $n."|");
echo fread($myfile5, filesize("rev_numlist.txt"));

if($user_id != "-2014"){
$myfile1=fopen("rev_info.txt", "a+");
fwrite($myfile1, $user_id."|".$arr[0]."|".$arr[1]."|".$arr[2]."|".$arr[3]."|".$arr[4]."|"."\n");
echo fread($myfile1, filesize("rev_info.txt"));
echo("<script>location.href='mem_main.html';</script>");
}
else{
  $myfile2=fopen("rev_info.txt", "a+");
  fwrite($myfile2, $n."|".$arr[0]."|".$arr[1]."|".$arr[2]."|".$arr[3]."|".$arr[4]."|"."\n");
  echo fread($myfile2, filesize("rev_info.txt"));

  echo("<script>
  alert('당신의 예매 번호는".$n."입니다')
  location.href='nonmem_main.html';
  </script>");
}



?>
