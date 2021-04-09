<?php
	include('server.php');
	include('navbar.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<div class="content">
		<img src="img/elhizas.jpg" class="pic">
		<p>Az elhízás kapcsán gyakori az érintettek hibáztatása, az életmódbeli és étkezési szokásaik elítélése. Pedig az elhízás lehet krónikus, illetve más betegségek előjele is.
		A kóros elhízás többek között a cukorbetegség melegágya is lehet. Az OECD adatai alapján az európai országok közül <strong>Magyarországot kifejezetten érinti ez a probléma: a lakosság kétharmada túlsúlyos vagy elhízott.</strong> 
		<br>
		<br>
		<h2>Az elhízás és a betegségek kapcsolata</h2>
		<br>
		Sajnos, a társadalom többi tagja a túlsúlyos emberekről legtöbbször úgy gondolja, hogy ’csupán’ nem megfelelő az életmódjuk vagy túl sokat esznek és lusták a rendszeres mozgáshoz. Az ilyen előítéletek csak tovább nehezítik az érintettek életét és azt, hogy megtegyék az első lépéseket a testsúlyuk csökkentése felé. Kulcsfontosságú, hogy az elhízás problémájával küzdők merjenek foglalkozni a helyzettel, és megértsék annak okait. Fontos, hogy képesek legyenek csökkenteni az olyan betegségek kialakulásának kockázatát mint például a cukorbetegség vagy a szív- és érrendszeri megbetegedések, melyek a fennmaradó túlsúly nyomán megjelenhetnek.
		<br>
		<br>
		</p>
		<h2>Mit tehetünk az elhízás ellen?</h2>
		<img src="img/what_to_do.png" class="pic">
		<p>
		Amennyiben valakinél már kialakult a betegség utóbbi típusa, az egészséges életmód, a rendszeres mozgás és a fogyás hozzájárulhat az életminőség javításához, valamint a betegség kordában tartásához. Sokaknál azonban nem elég az ilyen jellegű odafigyelés, így a betegek terápiás kezelésre szorulnak az optimális anyagcsere kontroll elérése érdekében. Az injekciós megoldások mellett ma már olyan innovatív készítmények is rendelkezésre állnak a cukorbetegek kezelésére, amiket akár vesebetegek is biztonságosan szedhetnek és elég naponta egyszer szájon át bevenni, nem szükséges napi szintű injekciós alkalmazás.
		<br>
		<br>
		<h2>Hogyan is lehetne megelőzni a bajt?</h2>
		<br>
		A Magyar Elhízástudományi Társaság - MET - öt pontból álló ajánlást fogalmazott meg az elhízás és szövődményes betegségei megelőzése érdekében. Végigolvasva ezeket, egyértelműen kiderül, hogy a megelőzés egyszerűbb, illetve nem mellékesen olcsóbb, mint a már kialakult betegség és a hozzá köthető egyéb terhek kezelése.
		<br>
		<br>
			<ol>
				<li>Étkezz változatosan, de felezd le a fő- és kisétkezések adagját! Minden étkezés tartalmazzon friss zöldségből, gyümölcsből készült ételt, és figyelj a folyadékfogyasztásra!
				</li>
				<li>Fokozatosan növeld a mozgásaktivitásod: ajánlott a legegyszerűbb mozgásforma, a gyaloglás, ennek napi adagja néhány percről 60 percre vagy 10 ezer lépésre növelendő.</li>
				<li>Aludj lehetőleg hét-nyolc órát, ebből lehetőleg éjfél előtt két órát, nem túlfűtött, kiszellőztetett helyiségben, lefekvés előtt két órával pedig már ne egyél, és ne sportolj.
				</li>
				<li>A stresszoldást lehetőleg aktív szabadidős programokkal, sporttal, kirándulással, tánccal, kulturális tevékenységgel biztosítsd.</li>
				<li>Életmódod legyen napi és heti ritmust követő, dohányfüstmentes, és csökkentsd az alkoholfogyasztást. Csak a legszükségesebb vegyszereket, kozmetikumokat használd a háztartásban, és csak a kezelőorvosod által előírt gyógyszereket, illetve táplálék-kiegészítőket szedd!</li>
			</ol>
		</p>
	</div>
	<div class ="logout">		
		<?php if (isset($_SESSION['username'])): ?>
			<p><a href="bmi.php?logout='1'">Kijelentkezés</a></p>
		<?php endif ?>
	</div>
</body>
</html>