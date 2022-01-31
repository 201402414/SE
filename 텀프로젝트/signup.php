<?php
/*
//$infoArray;



  class FileInfo {
    public $id;
    public $pw;
    public $na;
    public $te;
    public $em;


    public function __construct($id, $pw, $na, $te, $em) {
      $this->id = $id;
      $this->pw = $pw;
      $this->na = $na;
      $this->te = $te;
      $thie->em = $em;
    }

    public function saveTodo() {

      $link_addres = "./sys.php";
        $myfile=fopen("idpwlist.txt", "a+");

       fwrite($myfile, $this->id."|".$this->pw."\n");

       echo fread($myfile, filesize("idpwlist.txt"));


       $myfile1=fopen("alllist.txt", "a+");
       fwrite($myfile1, $this->id."|".$this->pw."|".$this->te."\n");
       echo fread($myfile1, filesize("alllist.txt"));

       echo($this->na);
       echo "회원가입이 완료되었습니다.";
       echo nl2br("\n");
       echo "<a href='$link_addres'>로그인 페이지로 돌아가기</a>";



    }

}
// 데이타 추가하기
$a1str = $_POST['signup_id'];
$b1str = $_POST['signup_pw'];
$c1str = $_POST['hidden'];
$d1str = $_POST['signup_email'];
$e1str = $_POST['signup_tel'];
$doData = new FileInfo($a1str, $b1str , $c1str, $d1str, $e1str);

$temp = @file("idpwlist.txt");
$id_arr = array();
if ($temp != null) {

  for($i = 0; $i < count($temp); $i++){
        $arr = explode("|", $temp[$i]);
        $id_arr[$i] = $arr[0];
  }
}
$is = true;
for($i = 0; $i < sizeof($id_arr); $i++){
  if($a1str == $id_arr[$i]){


        $link_addres = "./signup.html";
    echo("이미 저장된 아이디입니다.");
    echo nl2br("\n");
    echo "<a href='$link_addres'>회원가입 페이지로 돌아가기</a>";

    $is = false;
    break;
  }
}


if($is == true){
$doData->saveTodo();
}
*/


//$infoArray;



  class FileInfo {
    public $id;
    public $pw;
    public $na;
    public $te;
    public $em;


    public function __construct($id, $pw, $na, $te, $em) {
      $this->id = $id;
      $this->pw = $pw;
      $this->na = $na;
      $this->te = $te;
      $thie->em = $em;
    }

    public function saveTodo() {


        $myfile=fopen("idpwlist.txt", "a+");

       fwrite($myfile, $this->id."|".$this->pw."\n");

       echo fread($myfile, filesize("idpwlist.txt"));


       $myfile1=fopen("alllist.txt", "a+");
       fwrite($myfile1, $this->id."|".$this->pw."|".$this->te."\n");
       echo fread($myfile1, filesize("alllist.txt"));

       echo($this->na);
       echo "<script> alert('회원가입이 완료되었습니다.');
       location.href='sys.php';
       </script>";





    }

}
// 데이타 추가하기
$a1str = $_POST['signup_id'];
$b1str = $_POST['signup_pw'];
$c1str = $_POST['hidden'];
$d1str = $_POST['signup_email'];
$e1str = $_POST['signup_tel'];
$doData = new FileInfo($a1str, $b1str , $c1str, $d1str, $e1str);

$temp = @file("idpwlist.txt");
$id_arr = array();
if ($temp != null) {

  for($i = 0; $i < count($temp); $i++){
        $arr = explode("|", $temp[$i]);
        $id_arr[$i] = $arr[0];
  }
}
$is = true;
for($i = 0; $i < sizeof($id_arr); $i++){
  if($a1str == $id_arr[$i]){



    echo"<script> alert('이미 저장된 아이디입니다.');
    location.href='signup.html';
    </script>";


    $is = false;
    break;
  }
}


if($is == true){
$doData->saveTodo();
}





?>
