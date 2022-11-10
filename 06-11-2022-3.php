<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" type="image/x-icon" href="https://224dnidomatury.neocities.org/zdjecia/triskalion.ico">
        <title>224</title>
        <link href="06-11-2022-2.css" rel="stylesheet" type="text/css" media="all">
    </head>
<body>
    <div id="fleksik">
        
    </div>
    <hr>
    <div id="man">
        <div class="baner">
            <h2>Bum.</h2>
        </div>
    </div>
    
    <div id="sekcja"><br>
    Tutaj znajduje się zapytanko z bazy danych o nazwie "wędkowanie"<br><br>
    Oto i rybki spokojnego łowu(poniżej znajduje się wynik zapytania)!!<br><br>
    <?php 
			$conn=mysqli_connect('localhost','root','','wedkowanie');
			if (!$conn) {
				echo "";
			}
			else {
				$pyt=mysqli_query($conn, 'select id, nazwa, wystepowanie from ryby where styl_zycia=2;');
							$il_wierszy=mysqli_num_rows($pyt);
						for($i=0;$i<$il_wierszy;$i++)
						{
							$result=mysqli_fetch_array($pyt);

							echo $result['id'].".".$result['nazwa'].", występuje w: ".$result['wystepowanie']."<br><br>";
						}
					}
				mysqli_close($conn);
			?>
            <img src="1618961058590.jpg">
    </div>

    <div id="podstopka">
        wykonał Maksymilian
    </div>

</body>
</html>
