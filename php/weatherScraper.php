<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">

<!-- Optional theme -->
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<style>
		html, body {
			height: 100%;
			padding: 0;
			margin: 0;
		}
		.container{
			background-image: url("wsb.png");
			width: 100%;
			height: 100%; 
			background-size: cover; 
			background-position: center;
			padding-top: 100px;
		}
		.center{
			text-align: center;
		}
		.white{
			color: #FAFAFA;
		}
		p{
			padding-top: 15px;
			padding-bottom: 15px;
		}
		button{
			margin-top: 15px;
		}
		.alert{
			margin-top: 20px;
			display: none;
		}
		
	</style>
  </head>
  <body>
	
	<div class = "container">
		<div class = "row">
			<div class = "col-md-6 col-md-offset-3 center white">
				<h1> Weather Forecaster </h1>
				<p class = "lead"> Enter your city below to get a forecast of the weather. </p>
				<form>
					<div class = "form-group">
						<input type = "text" class = "form-control" name ="city" id = "city" placeholder = "Eg. Seattle, London, Tokyo..."/>
					</div>
					<button id = "findMyWeather" class = "btn btn-success btn-lg"> Find My Weather </button>
				</form>
				<div id = "fail" class = "alert alert-danger"> We could not find the weather for that city. Please try again. </div>
				<div id = "success" class = "alert alert-success"> Success!</div>
				<div id = "noCity" class = "alert alert-danger"> Please enter a city.</div>
			</div>
		</div>
		
	</div>
	
	
	<script src="//code.jquery.com/jquery-1.11.3.min.js"></script>
    <!-- Latest compiled and minified JavaScript -->
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
	<script>
		$("#findMyWeather").click(function(event){
		
			event.preventDefault();
			
			if ($("#city").val()!=""){
				$.get("scraper.php?city="+$("#city").val(), function(data){
					if (data == ""){
						$("#success").hide();
						$("#fail").fadeIn();
						$("#noCity").hide();
					}else{
						$("#fail").hide();
						$("#noCity").hide();
						$("#success").html(data).fadeIn();
					}
				});
			}else{
			$("#success").hide();
			$("#fail").hide();
				$("#noCity").fadeIn();
			}
			
		});
	</script>
 </body>
</html>