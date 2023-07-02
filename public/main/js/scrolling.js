var ticker = document.querySelector('.ticker')
  , list = document.querySelector('.ticker__list')
  , clone = list.cloneNode(true)

ticker.append(clone);


  setInterval(function(){
	let d = new Date();
	//console.log(d.toUTCString());
	let year = d.getUTCFullYear(); 
	let month = d.getUTCMonth() + 1; 
	let day = d.getUTCDate();
	let dayofweek = d.getUTCDay(); 

	let hour = d.getHours(); 
	let minute = d.getMinutes(); 
	let second = d.getSeconds(); 
	//let millisecond = d.getMilliseconds();
	if(hour < 10) hour = "0" + hour;
	if(minute < 10) minute = "0" + minute;
	if(second < 10) second = "0" + second;
	
	document.getElementById("date").innerHTML = "|  the date is:" + year + ":"+ month + ":"+day + ":"+ dayofweek; 
	document.getElementById("time").innerHTML ="|  the time is : " + hour+ ":"+minute+ ":"+second;
  },1000);
  document.getElementById("location").innerHTML ="| nam kì kì khởi nghĩa, quận 3, thành phố hồ chí minh";





// <!-- <script>

//   var today = new Date();
// var day = today.getDate()+':'+ today.getMinutes() + ":" + today.getSeconds();
// var time = today.getHours() + ":" + today.getMinutes() + ":" + today.getSeconds();
// var dateTime = date+'+'+time;
// document.getElementById("hvn").innerHTML = dateTime; 

// </script> -->
