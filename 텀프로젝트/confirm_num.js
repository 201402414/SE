function sub(){
  var temp = document.getElementById('data').value;
  var input_num = document.getElementById('input_num').value;
  var arr= new Array();

  arr = temp.split('|');
  var cnt = 0;
  for(var i = 0; i < arr.length; i++){
    if(arr[i] != input_num){

    }else{
      cnt ++;
    }
  }

  if(cnt == 0){
    alert("잘못된 예매번호입니다.");
    return false;
  }


}
