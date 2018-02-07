<!DOCTYPE html>
<html>
	<head>
 <title>Code HW1</title>

	</head>
	<body>

			<h1>Challenge 1: Correct Change</h1>
	<?php
					echo "You are due 159 cents back in change total.";
					//total change
					$change = 159;
					//dollar
					if ($change >= 100) {
						$remain = $change / 100;
						$dollar = (int) ($remain);
						$change = $change - ($dollar*100);
					}
					//quater
					if ($change >= 25) {
						$remain = $change / 25;
						$quarter = (int) ($remain);
						$change = $change - ($quarter*25);
					}
					//dime
					if ($change >= 0) {
						$remain = $change / 10;
						$dime = (int) ($remain);
						$change = $change - ($dime*10);
					}
					//nickle
					if ($change >= 5) {
						$remain = $change / 5;
						$nickle = (int) ($remain);
						$change = $change - ($nickle*5);
					}
					//cent
					if ($change > 0){
						$cent = $change;
					}
					echo "<br>";
					echo "<br>";
					//Final statement
          echo "You are due back $dollar dollar(s), $quarter quarter(s), $dime dime(s), $nickle nickle(s), $cent cent(s).";
?>
				<h1>Challenge 2: 99 Bottles of Beer</h1>
<?php
					$bottle = 4;
					while ($bottle >0) {

						echo $bottle . " bottles of beer on the wall, " . $bottle . " bottles of beer!";
						echo "<br>";
						$left_bottle = (--$bottle);
						if ($left_bottle == 0) {
						echo "No more bottle on the wall.";
						}
						else {
						echo " Take one down, pass it around, " . $left_bottle . " bottles of beer on the wall.";
						echo "<br>";
						}
						}

?>
</html>
