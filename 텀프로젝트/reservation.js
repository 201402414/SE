function seat_btn() {


  var data = document.getElementById('data').value;
  var size = document.getElementById('size').value;
  var seat = document.getElementsByName('seat');



  var data_array = data.split('|');
  var data_array2 = Array(Array(), Array());

  var k = 0;
  for (var i = 0; i < size; i++) {
    for (var j = 0; j < 6; j++) {
      data_array2[i][j] = data_array[k];
      k++;
    }
  }

  for (i = 0; i < 4; i++) {
    seat[i].disabled = false;
  }
  var input_start = document.getElementById('start').options[document.getElementById('start').selectedIndex].value;
  var input_end = document.getElementById('end').options[document.getElementById('end').selectedIndex].value;
  var input_date = document.getElementById('reservation_date').value;
  var input_time = document.getElementById('time').options[document.getElementById('time').selectedIndex].value;;

  var is_seat0 = true;
  var is_seat1 = true;
  var is_seat2 = true;
  var is_seat3 = true;

  for (i = 0; i < size; i++) {
    if (input_start == data_array2[i][1] && input_end == data_array2[i][2] && input_date == data_array2[i][3] &&
      input_time == data_array2[i][4]) {
      if (data_array2[i][5] == 0) {
        is_seat0 = false;
      }
      if (data_array2[i][5] == 1) {
        is_seat1 = false;
      }
      if (data_array2[i][5] == 2) {
        is_seat2 = false;
      }
      if (data_array2[i][5] == 3) {
        is_seat3 = false;
      }
    }
  }


  if (is_seat0 == false) {
    seat[0].disabled = true;
  }
  if (is_seat1 == false) {
    seat[1].disabled = true;
  }
  if (is_seat2 == false) {
    seat[2].disabled = true;
  }
  if (is_seat3 == false) {
    seat[3].disabled = true;
  }


  var today = new Date();
  var dd = today.getDate();
  var mm = today.getMonth() + 1;
  var yyyy = today.getFullYear();

  if (dd < 10) {
    dd = '0' + dd;
  }

  if (mm < 10) {
    mm = '0' + mm;
  }

  date_arr = input_date.split('-');
  if(input_start != input_end){

  if (date_arr[0] >= yyyy) {
    if (date_arr[1] >= mm) {
      if (date_arr[2] >= dd) {

        if(date_arr[0] == yyyy && date_arr[1] == mm && date_arr[2] == dd){

          if(input_time >= today.getHours()){
            document.getElementById("seat_table").style.display = "block";
          }
          else{
            alert("지난 날을 선택하였습니다.");
          }

        }
        else{
          document.getElementById("seat_table").style.display = "block";
        }

      } else {
        alert("지난 날을 선택하였습니다.");
      }
    } else {
      alert("지난 날을 선택하였습니다.");
    }
  } else {
    alert("지난 날을 선택하였습니다.");
  }

}else{
  alert("출발지와 도착지가 같습니다.");
}



}

function rev() {
  var temp = document.getElementsByName('seat');
  if (temp[0].checked && temp[1].checked && temp[2].checked && temp[3].checked == false) {
    alert("좌석을 선택해 주세요");
    return false;
  } else {
    document.getElementById("seat_table").style.display = "none";
  }
}

function test(){
  var temp = document.getElementById('nowid').value;

  if(temp == "-2014"){
  location.href = "nonmem_main.html";
  }else{

    location.href = "mem_main.html";
  }
}
