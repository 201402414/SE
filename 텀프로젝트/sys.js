function login(){
  var id = document.getElementById("input_id").value;
  var pw = document.getElementById("input_pw").value;
  alert(id);
  alert(pw);
  if(id=="" || pw==""){
    alert("아이디 또는 패스워드의 입력양식을 체크해주세요.");
    document.getElementById("login_div").style.display = "none";
    return false;
  }
  else if(!id_patten(id)){
    alert("아이디 또는 패스워드의 입력양식을 체크해주세요.");
    document.getElementById("login_div").style.display = "none";
    return false;
  }
  else if(!pw_patten(pw)){
    alert("아이디 또는 패스워드의 입력양식을 체크해주세요.");
    document.getElementById("login_div").style.display = "none";
    return false;
  }
  else{

  }
}
function id_patten(id){
  var id_patten = /^([A-Za-z0-9]){6,15}$/;
  return id_patten.test(id);
}
function pw_patten(pw){
  var pw_patten = /^.*(?=^.{8,15}$)(?=.*\d)(?=.*[a-zA-Z])(?=.*[!@#$%^&+=]).*$/;
  return pw_patten.test(pw);
}
function signup_cancel(){
  var temp = confirm("정말로 취소하시겠습니까?");
  if(temp == true){
  location.href="sys.php";
}
}
