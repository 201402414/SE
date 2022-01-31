<?php


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>로그인</title>
  <link href="sys.css" type="text/css" rel="stylesheet">

</head>

<body>
  <p>소프트웨어 공학 15조</p>
  <form class="login_form" action="login.php" method="post" enctype="multipart/form-data" onsubmit="return login()">
    <table>
      <tr>
        <td></td>
        <td id = "title_cell" colspan="2"><h2>로그인</h2></td>
      </tr>
      <tr>
        <td>ID : </td>
        <td colspan="2"><input type="text" name="input_id" value="" id="input_id"></td>

      </tr>
      <tr>
        <td>PW : </td>
        <td colspan="2"><input type="text" name="input_pw" value="" id="input_pw"></td>
      </tr>
      <tr>
        <td><br><br></td>
      </tr>
      <tr>
        <td><input type="hidden" name="hidden" value="wow" id ="hidden"></td>
        <td colspan="2"><input type="submit" formaction = "reset.php" name="" value="비회원 예매" id = "non_member_book" onClick="location.href='nonmem_main.html'">
        <br></td>
      </tr>
      <tr>
        <td></td>
        <td colspan="2"><input type="submit" formaction="login.php" name="" value="확인" id = "submit_btn" onclick="login()"></td>

      </tr>
      <tr>
        <td><br></td>
      </tr>
      <tr>
        <td></td>
        <td id ="signin_cell"colspan="2"><input type="button" name="" value="회원가입" id = "signup_btn" onClick="location.href='signup.html'"></td>
      </tr>
    </table>
  </form>


</body>

</html>
