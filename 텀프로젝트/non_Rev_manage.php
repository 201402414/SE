<?php

$num = @file("rev_num.txt") or $result = "파일을 읽을 수 없습니다.";
$info = @file("rev_info.txt") or $result = "파일을 읽을 수 없습니다.";
$data = "";
$size = 0;
if ($info != null) {

  for($i = 0; $i < count($info); $i++){
        $data = $data.$info[$i];
        $size++;
  }
}
$data = trim(preg_replace("/\s+/","",$data));

 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>예매현환관리</title>
      <link href="Rev_manage.css" type="text/css" rel="stylesheet">
  </head>

  <input type="hidden" id="num" value="<?php echo$num[0]; ?>">
  <input type="hidden" id="data" value="<?php echo$data; ?>">
  <body>
    <div id="all">
      <h2 id="Til">예매현황</h2>
        <table>
          <tr>
            <td class = "date_info2">출발지</td><td class = "date_info2">도착지</td><td class = "date_info1">출발시간</td><td class = "date_info2">좌석번호</td>
          </tr>
        </table>
        <div id="div1">
        <div id = "aaaa"></div>
        </div>
          <input type="button" value="돌아가기" id="back" onclick="location.href='nonmem_main.html'">
      </div>
        <script src="non_Rev_manage.js" type="text/javascript"></script>
  </body>
</html>
