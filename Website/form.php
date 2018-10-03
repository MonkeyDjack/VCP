<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="style.css">
    </head>
          <body>
          	<div class="container">
          	<header>
			<h1>Quiz: How good do you know Netherlands</h1>
		</header>
          <?php
  
          
	
	 $country = filter_input(INPUT_POST,'country');
	$math = filter_input(INPUT_POST,'math'); 
	$language = filter_input(INPUT_POST,'language'); 
	$withdrew = filter_input(INPUT_POST,'withdrew'); 
	$capital = filter_input(INPUT_POST,'capital'); 
	
	$result = 0; 
	
	
	if ($country == "Holland") {
		$result += 25;
	}
	
	
	if ($language == "Dutch") {
		$result += 25;
	}
	if ($withdrew == "Belgium") {
		$result += 25;
	}
	
	if ($capital == "Amsterdam") {
		$result += 25;
	}

	
	echo "<center class=result>Your result is <strong>$result%</strong><br>But try to improve your math</center>";
        

          ?>
          <footer></footer>
          	</div>
          	
          </body>
</html> 
        