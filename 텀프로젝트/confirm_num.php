<?php

  $ids = @file("rev_numlist.txt") or $result = "파일을 읽을 수 없습니다.";

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>예매번호확인</title>
  </head>
  <body>
    <input type="hidden" name="" id = "data" value="<?php echo$ids[0]?>">
    <form class="conf_rev_num" method="post" enctype="multipart/form-data" onsubmit="return sub()">
    <table>
      <tr>
        <td><h3>예매번호 : </h3></td>
        <td><input type="text"  name = "rev_num" autofocus pattern=[0-9]{1,11} id="input_num" required></td>
        <td><input type="submit" formaction="conf_num.php" value="확인"></td>
      </tr>
    </table>
  </form>
  <script src="confirm_num.js" type="text/javascript"></script>
  </body>
</html>
