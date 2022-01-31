window.onload = function () {

  var num = document.getElementById("num").value;
  var data = document.getElementById('data').value;
  var in1 = document.getElementById('aaaa');

  var data_arr = new Array();
  data_arr = data.split('|');

  var info = new Array();
  for(var i = 0, j=0; i < data.length; i=i+6){
    if(data_arr[i] == num){
      info[0] = data_arr[i+1];
      info[1] = data_arr[i+2];
      info[2] = data_arr[i+3] +"," + data_arr[i+4]+"시";
      info[3] = data_arr[i+5];
      var string =  "<table> <tr> <td class = 'date_info2'>"+info[0]+"</td><td class = 'date_info2'>"+info[1]+"</td><td class = 'date_info1'>"+info[2]+"</td><td class = 'date_info2'>"+info[3]+"</td></tr></table> <input type = 'button' id = 'cancel_btn' onClick=" + "location.href='cancel_rev0.php'"+" value = '취소하기'> <br><br>";
      in1.innerHTML = string;

    }
  }


}
