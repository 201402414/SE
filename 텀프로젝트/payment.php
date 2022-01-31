<?php
$lines = @file("id.txt") or $result = "파일을 읽을 수 없습니다.";


 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>결제선택</title>
    <link href="payment.css" type="text/css" rel="stylesheet">
  </head>
  <body>

    <input type="hidden" name="" value="<?php echo$lines[0]; ?>" id = "user_id">
    <table>
      <tr>
     <td colspan="2"><h2>결제 방식 선택하기</h2></td>
      </tr>
      <tr>
        <td><input type="radio" name="how_to_pay" value="card" id="card_radio">카드결제</td>
      </tr>
      <tr><td><br><br><br><br><br><br><br></td></tr>
      <tr>
        <td><input type="button" value="선택하기" id="card_select" onClick="card_select()"></td>
        <td><input type="button" value="취소" id="cancel_btn" onClick="cancel()"></td>

      </tr>
    </table>
    <script src="payment.js" type="text/javascript"></script>
  </body>
</html>
