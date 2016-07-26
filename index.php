<!doctype html>
<html>
<head>
	<title>Weather App</title>	
	<meta charset="utf-8" />	
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />	
	<meta name="viewport" content="width=device-width, initial-scale=1" />	

	<!-- Latest compiled and minified CSS -->	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">	

	<!-- Optional theme -->	
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">	

</head>

<style>

html,body{
	height:100%;
}

.container{
	background-image:url("background.jpg");
	width:100%;
	height:100%;
	background-size:cover;
	background-position:center;
	padding-top:100px;
}

.center{
	text-align:center;
}

.white{
	color:white;
}

p{
	padding-top:15px;
	padding-bottom:15px;
}

button{
	margin-top:20px;
}

.alert{
	margin-top:20px;
	display:none;
}
</style>

<body>

	<div class="container">
		<div class="row">
			<div class="col-md-6 col-md-offset-3 center">

			<h1 class="white center">Weather Predictor</h1>
			<p class="lead white center">Enter your city below to get a forecast for weather</p>

			<form>
				<div class="form-group">
					<input type="text" class="form control" name="city" id="city" palceholder="Eg. London, Paris, San Fransico...">
				</div>
				<button id="findMyWeather" class="btn btn-success btn-lg">Find My Weather</button>

			</form>
		<div id="success" class="alert alert-success">Success!</div>
		<div id="fail" class="alert alert-danger">Colud Not Find the Prediction for that City. Please Try again. </div>
		<div id="noCity" class="alert alert-danger">Please enter a city! </div>
			</div>


		</div>
	
	</div>


<script src="//code.jquery.com/jquery-1.11.0.min.js"></script>	

<!-- Latest compiled and minified JavaScript -->
	
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js">
</script>	

<script>
	$("#findMyWeather").click(function(event){
	
	event.preventDefault();
	$(".alert").hide();
	if($("#city").val()!=""){

	$.get("scraper.php?city="+("#city").val(),function(data){
		$("$.alert").html(data).fadeIn();
		if(data=""){
			$("#fail").fadeIn();
		}else{
			$("#success").html(data).fadeIn();		
		}
	});
	}else{
		$("#noCity").fadeIn();
	}
	});
</script>

</body>
	
</html>
