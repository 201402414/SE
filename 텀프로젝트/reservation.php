<?php

$user_ids = @file("id.txt") or $result = "파일을 읽을 수 없습니다.";
$temp = @file("rev_info.txt") or $result = "파일을 읽을 수 없습니다.";
$data = "";
$size = 0;
if ($temp != null) {

  for($i = 0; $i < count($temp); $i++){
        $data = $data.$temp[$i];
        $size++;
  }
}
$data = trim(preg_replace("/\s+/","",$data));
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>예매화면</title>
  <link href="reservation.css" type="" rel="stylesheet">

</head>

<body>
  <input type="hidden" id = "nowid"name="" value="<?php echo$user_ids[0]?>">
  <input type="hidden" id="data" value = "<?php echo$data?>">
  <input type="hidden" id="size" value = "<?php echo$size?>">
  <form class="" action="reservation_data.php" method="post" enctype="multipart/form-data" onsubmit="return rev()" >
    <table>
      <tr>
        <td></td>
        <td id = "title_cell" colspan="2"><h2>예매하기</h2></td>
      </tr>
      <tr>
        <td>출발지 : </td>
        <td colspan="2">
          <select name = "start" id = 'start'>
            <option value="seoul">서울</option>
            <option value="daejeon">대전</option>
          </select>
        </td>
      </tr>
      <tr>
        <td>도착지 : </td>
        <td colspan="2">
          <select name = "end" id = 'end'>
            <option value="seoul">서울</option>
            <option value="daejeon">대전</option>
          </select>
        </td>
      </tr>
      <tr>
        <td >날짜 : </td>
        <td colspan="2"><input type="date" name="reservation_date" value="" id="reservation_date" required></td>
      </tr>
      <tr>
        <td>시간 : </td>
        <td colspan="2">
          <select name = "time" id = 'time'>
          <option value="6">6시</option>
          <option value="12">12시</option>
          <option value="18">18시</option>
          <option value="23">24시</option>
        </select></td>
      </tr>
      <tr>
        <td></td>
        <td>
        <input type="button" name="" value="좌석확인" onclick="seat_btn()"></td>

      </tr>
      <tr>
        <td><br><br></td>
      </tr>
      <tr>
        <td></td>
        <td>
        <table id = "seat_table">
          <tr>
            <td class = "seat"></td>
            <td><input type="radio" name="seat" value = "0" id = "0"></td>
            <td><input type="radio" name="seat" value = "1" id = "1"></td>
            <td class = "seat"></td>

          </tr>
          <tr>
            <td class = "seat"></td>
            <td><input type="radio" name="seat" value = "2" id = "2"></td>
            <td><input type="radio" name="seat" value = "3" id = "3"></td>
            <td class = "seat"></td>
          </tr>
        </table>
        </td>
      </tr>
      <tr>
        <td><br><br></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" formaction="reservation_data.php" name="" value="예매하기" id = "reservation_btn" onclick="rev()"></td>
        <td><input type="button" name="" value="취소" id = "cancel_btn1" onclick="test()" ></td>
      </tr>
      <tr>
        <td><br></td>
      </tr>

    </table>
  </form>
    <script src="reservation.js" type="text/javascript"></script>
</body>

</html>
