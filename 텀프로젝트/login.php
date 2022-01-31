<?php
/*
$filename = "idpwlist.txt";
$infoArray = array();
$fp = fopen($filename, "r") or die("파일열기에 실패하였습니다");
$successFlag=0;
while(!feof($fp)){
  $readData=explode("|",fgets($fp));
  $infoArray[$readData[0]]=$readData[1];
}
$recvId=$_POST['input_id'];
$recvPw=$_POST['input_pw'];



 if($recvId!=""&&$recvPw!=""){ // 제대로 입력시
  foreach ($infoArray as $key => $value) {
    if((string)$key===(string)$recvId){
      if(trim((string)$value)===(string)$recvPw){
        echo "$key"."님 로그인에 성공하였습니다";

        $link_addres = "./mem_main.html";
        $myfile=fopen("id.txt", "w");

       fwrite($myfile, $recvId);

       echo fread($myfile, filesize("id.txt"));


       echo nl2br("\n");
       echo "<a href='$link_addres'>메인페이지로 넘어가기</a>";

        $successFlag=1;
        break;
      }
      else{
        $successFlag=2; // 아이디는 존재하나 비밀번호가 틀린 경우
        break;
      }
    }
  }
} else {
  echo "아이디와 비밀번호를 제대로 입력하였는지 확인해주세요";
}

if($successFlag===0){
  echo "존재하지 않는 아이디 입니다.";
} else if($successFlag===2){
  echo "패스워드가 틀립니다.";
}



fclose($fp);*/


$filename = "idpwlist.txt";
$infoArray = array();
$fp = fopen($filename, "r") or die("파일열기에 실패하였습니다");
$successFlag=0;
while(!feof($fp)){
  $readData=explode("|",fgets($fp));
  $infoArray[$readData[0]]=$readData[1];
}
$recvId=$_POST['input_id'];
$recvPw=$_POST['input_pw'];



 if($recvId!=""&&$recvPw!=""){ // 제대로 입력시
  foreach ($infoArray as $key => $value) {
    if((string)$key===(string)$recvId){
      if(trim((string)$value)===(string)$recvPw){
        echo "$key"."님 로그인에 성공하였습니다";

        $link_addres = "./mem_main.html";
        $myfile=fopen("id.txt", "w");

       fwrite($myfile, $recvId);

       echo fread($myfile, filesize("id.txt"));


       echo nl2br("\n");
       echo("<script>location.href='mem_main.html';</script>");

        $successFlag=1;
        break;
      }
      else{
        $successFlag=2; // 아이디는 존재하나 비밀번호가 틀린 경우
        break;
      }
    }
  }
} else {
  echo "<script> alert('아이디와 비밀번호를 제대로 입력하였는지 확인해주세요')
  location.href ='sys.php';
  </script>";

}

if($successFlag===0){
  echo "<script> alert('존재하지 않는 아이디입니다.')
  location.href ='sys.php';
  </script>";;
} else if($successFlag===2){
  echo "<script> alert('패스워드가 틀립니다.')
  location.href ='sys.php';
  </script>";;
}



fclose($fp);


?>
