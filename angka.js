var button = document.getElementById("asd");
let count = 0;
let angka = 0;
let intervalID;

function zxc(){
	document.getElementById("number").innerHTML = Math.floor(Math.random() * 10)+1;
}

button.addEventListener("click",function(){
intervalID = setInterval(function(){
count += 1;
	if(count % 100 == 0){
	document.getElementById("hasil").value = document.getElementById("number").innerHTML;
	console.log(count)
	clearInterval(intervalID);
	}else{
	button.click();
	}
},5)})

const data = new FormData();
var dataku = document.getElementById("kelompok").value;

data.append("kelompok", dataku);

const xhr = new XMLHttpRequest();
xhr.open("POST", "coba.php", true);
xhr.send(data);

//LOAD DATA POST
$(document).ready(function(){
	$("#asd").click(function(){
		var data = $(".form-user").serialize();
		$.ajax({
			type: "POST",
			url: "coba.php",
			data: data,
			success: function(){
				$('.tampildata').load('random.php');
			}
		})
	})
})