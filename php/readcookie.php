<!DOCTYPE html>
<html>

<body style="font-family: arial, sans-serif">

	<p>
		<strong>
			Your Last Five Previously Visited Products
		</strong>
	</p>

	<table border="1" cellspacing="0" cellpadding="10">

		<?php
			
		foreach ($_COOKIE as $key => $value)
			print("<tr><td>$key</td><td>$value</td></tr>");

		?>
	</table>

</body>

</html>