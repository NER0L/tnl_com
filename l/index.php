<?php
class Fruit {
  // Properties
  public $name;
  public $color;

  // Methods
  function set_name($name) {
    $this->name = $name;
  }
  function get_name() {
    return $this->name;
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="my.css">
	<title>Schedule</title>
</head>
<body>

<header>
	<div class="flex-container">
  		<div class="flex-item-75"> 
  		
  		<div id="alerts">
  			<p>Now: [Objx]</p>
  			<p>Next: [Objy]</p>
  			<p>After that: [Objz]</p>
  		</div>

  		</div>
		<div class="flex-item-25" id="timer"></div>
	</div>
</header>

<div class="mid">
	<div class="flex-container">
  		<div class="flex-item-25 left-bar">
  			<p>WEEK NUMBER</p>
  			<P>WEEK  IS ODD/EVEN ?</P>
  			<p>Some notes</p>
  		</div>

  		<div class="flex-item-75 main">
  			<button class="accordion">Luni</button>
				<div class="panel">
  					<?php include 'luni.php'; ?>
				</div>

			<button class="accordion">Marți</button>
				<div class="panel">
					<?php include 'marti.php'; ?>
				</div>
  			<button class="accordion">Miercuri</button>
				<div class="panel">
  					<?php include 'miercuri.php'; ?>
				</div>

			<button class="accordion">Joi</button>
				<div class="panel">
					<?php include 'joi.php'; ?>
				</div>
			<button class="accordion">Vineri</button>
				<div class="panel">
					<?php include 'vineri.php'; ?>
				</div>
		
  		</div>
	</div>
</div>


<div class="footer">
  <p>Footer</p>
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight) {
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

<script>
  		setInterval(function() {
    var currentTime = new Date ( );    
    var currentHours = currentTime.getHours ( );   
    var currentMinutes = currentTime.getMinutes ( );   
    var currentSeconds = currentTime.getSeconds ( );
    currentMinutes = ( currentMinutes < 10 ? "0" : "" ) + currentMinutes;   
    currentSeconds = ( currentSeconds < 10 ? "0" : "" ) + currentSeconds;    
    var currentHours = ( currentHours < 10  ? "0" : "" ) + currentHours;
    
    var currentTimeString = currentHours + ":" + currentMinutes + ":" + currentSeconds + " ";
    document.getElementById("timer").innerHTML = currentTimeString;}, 1000);
</script>
	<script>

var luni1 = {
	number:, 
	start:,
	end:,
	name:,
	profname:,
	link:,
};
var luni2 = {
	number:, 
	start:,
	end:,
	name:,
	profname:,
	link:,
};	
var luni3 = {3, "11:30","13:00","Drept Informațional","V. Mocanu",1};	
var luni4 = {
	number:, 
	start:,
	end:,
	name:,
	profname:,
	link:,
};	
var luni5 = {
	number:, 
	start:,
	end:,
	name:,
	profname:,
	link:,
};	
var luni6 = {
	number:, 
	start:,
	end:,
	name:,
	profname:,
	link:,
};	


var ekko, fLen, i;
var luni3 = ["3", "11:30","13:00","Drept Informațional","V. Mocanu","1"];
fLen = fruits.length;


for (i = 0; i < fLen; i++) {
  ekko += "<li>" + fruits[i] + "</li>";
}



document.getElementById("luni3").innerHTML = ekko;

</script>
</body>
</html>