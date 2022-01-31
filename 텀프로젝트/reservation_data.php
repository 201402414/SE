<?php
/*
//$infoArray;



  class FileInfo {
    public $st;
    public $en;
    public $da;
    public $ti;
    public $se;


    public function __construct($st, $en, $da, $ti, $se) {
      $this->st = $st;
      $this->en = $en;
      $this->da = $da;
      $this->ti = $ti;
      $this->se = $se;
    }

    public function saveTodo() {
      $lines = @file("id.txt") or $result = "파일을 읽을 수 없습니다.";


      $link_addres = "payment.php";
      $myfile=fopen("temp.txt", "w");

       fwrite($myfile, $this->st."|".$this->en."|".$this->da."|".$this->ti."|".$this->se."|"."\n");

       echo fread($myfile, filesize("temp.txt"));

       echo nl2br("\n");
       echo "<a href='$link_addres'>결제화면으로 넘어가기</a>";



    }

}
// 데이타 추가하기
$a1str = $_POST['start'];
$b1str = $_POST['end'];
$c1str = $_POST['reservation_date'];
$d1str = $_POST['time'];
$e1str = $_POST['seat'];
$doData = new FileInfo($a1str, $b1str , $c1str, $d1str, $e1str);
$doData->saveTodo();

*/


//$infoArray;



  class FileInfo {
    public $st;
    public $en;
    public $da;
    public $ti;
    public $se;


    public function __construct($st, $en, $da, $ti, $se) {
      $this->st = $st;
      $this->en = $en;
      $this->da = $da;
      $this->ti = $ti;
      $this->se = $se;
    }

    public function saveTodo() {
      $lines = @file("id.txt") or $result = "파일을 읽을 수 없습니다.";


      $link_addres = "payment.php";
      $myfile=fopen("temp.txt", "w");

       fwrite($myfile, $this->st."|".$this->en."|".$this->da."|".$this->ti."|".$this->se."|"."\n");

       echo fread($myfile, filesize("temp.txt"));

       echo nl2br("\n");
       echo("<script>location.href='payment.php';</script>");




    }

}
// 데이타 추가하기
$a1str = $_POST['start'];
$b1str = $_POST['end'];
$c1str = $_POST['reservation_date'];
$d1str = $_POST['time'];
$e1str = $_POST['seat'];
$doData = new FileInfo($a1str, $b1str , $c1str, $d1str, $e1str);
$doData->saveTodo();




?>
