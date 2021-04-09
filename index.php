<?php 
	include('server.php');
	include('navbar.php');
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Célunk</title>
</head>
<body>
	<div class="content">
		<div class="introduction">
			<p>A honlap témája és célja, hogy egészségesebb táplálkozásra ösztönözze azokat, akik eddig nem sokat tettek ezért. A weboldal látogatói könnyű és egészséges reggelikhez, vacsorákhoz, valamint munkába dobozban magukkal vihető ételek receptjeihez juthatnak hozzá. Ezenfelül <strong>a regisztrált felhasználók egy kalkulátor segítségével kiszámolhatják a testtömegindexüket</strong>.<br><br>
			A súly nemcsak esztétikai kérdés. Igen, mondhatod, hogy nem érdekel, hány kiló vagy, mekkora méretű ruhát hordasz, és milyen nehézkesen mozogsz, mert ezek mind külsőségek. Csakhogy sajnos a túlsúly az egészséged rovására mehet. Ezzel kapcsolatban az <a href="articles.php">Egészség a kilók tükrében</a> menüpont alatt olvashatsz cikkeket, tanulmányokat szakemberektől.<br><br>
			Egyszerű matematika: akkor tartjuk a súlyunkat, ha nem veszünk több kalóriát magunkhoz, mint amennyit elégetünk. Ebből következik, hogy ha fogyni akarunk, akkor vagy kevesebb kalóriát kell az étellel elfogyasztanunk, mint amennyit felhasználunk, vagy pedig mozgással több kalóriát „ledolgozni”, mint amennyit megeszünk. Ez utóbbihoz a mozgással, sporttal foglalkozó weboldalak nyújtanak segítséget:<br>
				<ul>
					<li><a href="https://www.fitvideo.hu/">Fitvideo</a></li>
					<img src="img/fitvideo.png" class="link-pic">			
					<li><a href="http://edzesonline.hu/">Edzésonline</a></li>
					<img src="img/edzesonline.png" class="link-pic">
					<li><a href="http://green-fitness.hu/">Green-Fitness</a></li>
					<img src="img/greenfitness.png" class="link-pic">
				</ul>
			Mi viszont most azokhoz szólunk, akik nem tudnak vagy nem szeretnének drasztikusan változtatni a táplálkozásukon, ám elindulnának az egészséges, könnyű táplálkozás és egyben a súlyfelesleg leadásának az útján. Lehet, hogy a munkahelyi menzán esznek, ahol nem nagyon szólhatnak bele a menübe, vagy nagyobb családra főznek, így a táplálkozás új útjait másokkal is el kell fogadtatniuk, ami bonyolítja a helyzetet.
			<strong>Mi az apró lépések taktikájával segítünk.</strong> Azt javasoljuk, hogy változtassunk először egy kisebb étkezésen, a reggelin vagy a vacsorán, vagy néha próbáljunk meg saját készítésű ebédet vinni magunkkal.
			A <a href="food.php">Kipróbálok valami újat</a> menüpont alatt egészséges és könnyű reggelik/vacsorák receptjét nyújtjuk.
			</p>
		</div>
	</div>
	<div class ="logout">		
		<?php if (isset($_SESSION['username'])): ?>
			<p><a href="bmi.php?logout='1'">Kijelentkezés</a></p>
		<?php endif ?>
	</div>
</body>
</html>