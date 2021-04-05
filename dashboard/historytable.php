<html>
	<head>
		<meta charset="utf-8">
  		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1,shrink-to-fit=no" >
		<title>Historical Data</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		
		<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

		<style type="text/css">
    	div .content-wrapper{
      		background-color: rgb(10,12,14);
    	}
    	div .container{
    		background-color: rgb(10,12,14);
    	}
    	.material-icons {
    		vertical-align:-14%
    	}
		</style>

	</head>
	<body>
		<div class="content-wrapper">
		<div class="col-md-12 stretch-card grid-margin" style = "background-color: rgb(10,12,14)">      
            <h1 class="m-0 text-red" style="text-align: left;">Smart Factory - Industrial Automation Dashboard</h1>
				<h2 class="m-0 text-red" style="text-align: left;">
					<a href="index.php" class="button"> <i class="material-icons w3-spin w3-xlarge">home</i></a>Historical Data
				</h2>
				
				<div class="form-group" >
					<div class="input-group" style = "background-color: rgb(10,12,14)">
						<span class="input-group-addon"><i class="material-icons w3-large">search</i></span>
						<input type="text" name="search_text" id="search_text" placeholder="Search by Keywords (e.g. TMP, HUM, VOC, MOV)" class="form-control" />
					</div>
				</div>	
				<div id="result"></div>
          	</div>		
		</div>

	</body>
</html>


<script>
$(document).ready(function(){
	load_data();
	function load_data(query)
	{
		$.ajax({
			url:"fetch.php",
			method:"post",
			data:{query:query},
			success:function(data)
			{
				$('#result').html(data);
			}
		});
	}
	
	$('#search_text').keyup(function(){
		var search = $(this).val();
		if(search != '')
		{
			load_data(search);
		}
		else
		{
			load_data();			
		}
	});
});
</script>




