<?php

//$infoArray;




      $link_addres = "./nonmem_main.html";
        $myfile=fopen("id.txt", "w");

       fwrite($myfile, "-2014");

       echo fread($myfile, filesize("id.txt"));

       echo "<script> alert('비회원으로 진행 중입니다.');
       location.href='nonmem_main.html';
       </script>";
  



?>
