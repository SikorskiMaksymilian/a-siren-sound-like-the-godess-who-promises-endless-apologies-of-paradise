<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://224dnidomatury.neocities.org/zdjecia/triskalion.ico">
        <title>224</title>
        <link href="06-11-202222.css" rel="stylesheet" type="text/css" media="all">
    </head>
<body>
<div id="formularz">
		<form action="" method="post">
			<table>
				<tr><td colspan="2"><h2>Formularz zgłoszeniowy</h2></td></tr>
				<tr>
					<td>Imię:</td>
					<td><input type="text" name="imie"></td>
				</tr>
				<tr>
					<td>Nazwisko:</td>
					<td><input type="text" name="nazwisko"></td>
				</tr>
				<tr>
					<td>Wykrztałcenie:</td>
					<td><select name="wiedza">
						<option disabled selected>wykształcenie</option>
						<option>wyższe</option>
						<option>średnie</option>
						<option>podstawowe</option>
					</select></td>
				</tr>
				<tr>
					<td>Adres e-mail:</td>
					<td><input type="email" name="mail"></td>
				</tr>
				<tr style="text-align: center;">
					<td colspan="2"><input type="submit" value="Zapisz uczestnika"></td>
				</tr>
			</table>
		</form>
	</div>
	<div id=wynik>
		<?php
			if(!empty($_POST['imie']) && !empty($_POST['nazwisko']) && !empty($_POST['wiedza']) && !empty($_POST['mail'])){
				$imie=$_POST['imie'];
				$nazwisko=$_POST['nazwisko'];
				$wiedza=$_POST['wiedza'];
				$mail=$_POST['mail'];
				echo "<p>Zapisaliśmy użytkownika o następujących danych:</p>";
				echo "<h3>$imie $nazwisko</h3>";
				echo "<h4>Wykształcenie: $wiedza</h4>";
				echo "<h4>E-mail: $mail</h4>";
			}
			else{
				echo "<br/><br/><br/><br/><br/>Tutaj wyświetlimy twoje dane!";
			}
		?>
	</div>
</body>
</html>