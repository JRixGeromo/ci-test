<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= esc($title) ?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
</head>
<body>
<div>
	<div><a href="bubble">bubble sort</a></div>	
	<div><a href="selection">selection sort</a></div>	
</div>
<div style="margin-top: 100px">
	<div>
		<?php 
		    echo $title.'<br>';
			echo 'unsorted<br>';
			for($i = 0; $i < sizeof($unsorted); $i++) {
				echo $unsorted[$i].'<br>';
			}
			echo '<br>sorted<br>';
			for($i = 0; $i < sizeof($sorted); $i++) {
				echo $sorted[$i].'<br>';
			}
		?>
		</div>	
	<div>
</div>
</body>
</html>
