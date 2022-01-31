function cancel(){
  var id = document.getElementById('user_id').value;
  if(id == "-2014"){
    location.href = "nonmem_main.html";
  }else{
    location.href = "mem_main.html";
  }
}

function card_select(){
  var temp = document.getElementById('card_radio');
  if(temp.checked){
    location.href = "card.html";
  }else{
    alert("결제 방법을 선택해 주세요");
  }
}
function card_cancel(){
  if (self.name != 'reload') {
    self.name = 'reload';
    self.location.reload(true);
  } else self.name = '';

  location.href = "payment.php";
}
