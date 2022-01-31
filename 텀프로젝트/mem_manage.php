<?php

$lines = @file("id.txt") or $result = "파일을 읽을 수 없습니다.";
$alllist = @file("alllist.txt") or $result = "파일을 읽을 수 없습니다.";



?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>회원정보 관리</title>
  <link href="mem_manage.css" type="text/css" rel="stylesheet">

</head>

<body>
    <input type="hidden" name="" value="<?php echo$alllist[0]; ?>">
    <form class="" action = "repw.php" method="post" >


    <table>
      <tr>
        <td colspan="2" colspan="2"><h2>회원정보관리</h2></td>
      </tr>
      <tr>
        <td>ID : </td>
        <td id="mem_id"><?php echo$lines[0]; ?></td>

      </tr>
      <tr>
        <td>PW : </td>
        <td colspan="2"><input type="text" name = "chg_pwd" value="" id="chg_pwd" required></td>
      </tr>
      <tr>
        <td>e_mail : </td>
        <td colspan="2"><input type="text" name ="chg_mail" value="" id="chg_mail" required></td>
      </tr>
      <tr>
        <td><br><br><br></td>
      </tr>
      <tr>
        <td></td>
        <td><input type="submit" value="저장하기" formation = "repw.php" id = "submit_btn" onclick=""></td>
        <td><input type="button" name="" value="취소" id = "cancel_btn"  onclick="mem_manage_cancel()"></td>
      </tr>
    </table>
    </form>
  <script src="mem_manage.js" type="text/javascript"></script>
</body>

</html>
