<?php

/////////////////////////////////////////////
// Neues Tutorialsystem f�r ETS 14
// Nicht abbrechbar !!!!!!
// Medaillen f�rs Tutorial
// Das Tutorial spielt das Spiel im Schnelldurchlauf durch
// Erster Login, erste Erkl�rungen, erste Geb�ude, Forschungen, Flugzeuge, Verteidigung, Angriffe, Kolonie, Takeabwehr, Takedurchf�hrung 
// Danach alles auf Anfang setzen!
/////////////////////////////////////////////
// Zur neuen Runde immer auf 1 setzen bei allen !!!!!!!
/////////////////////////////////////////////
// Durchnummerierung des Tutorials:
// 1 = Start des Tutorials auf allen Seiten
// 2 = Zweite Seite des Tutorials - Was ist ETS?
// 3 = Dritte Seite - Erkl�rung Rohstoffe/Geb�ude
// 4 = Vierte Seite - Erkl�rung Geb�ude Fortsetzung
// 5 = F�nfte Seite - Erkl�rung Technologien
// 6 = Sechste Seite - Erkl�rung Hauptansicht
// 7 = Global - Erkl�rung Noobschutz / Bauzentrum erste Bauaufgabe
// 8 = Bauzentrum - Technologiezentrum bauen
// 9 = Global / Technologiezentrum - erste Technologien (BBT / WK)
// 10 = Verteidigungsanlagen bauen
// 11 = Settler bauen
// 12 = Kolo gr�nden
// 13 = Settler gestartet



// 14 = Kolo Verteidigen
// 15 = Flugtimer verwenden
// 16 = Kolo zur�ckerobern
// 17 = Ende des Tutorials - Verweis auf Allianzwichtigkeit, Kommunikation mit anderen Spielern etc. weiter #998


//
// 998 = Endnummerierung = Tutorial Beendet, Medaille ausgeben
// 999 = Endnummerierung = Tutorial Beendet, Medaille erhalten, alles fertig
/////////////////////////////////////////////
/*
$tut = sql_fetch_array(sql_query("SELECT tutorial FROM new_tutorial WHERE user = '$_SESSION[user]';"));

if($tut['tutorial'] == 1) {
	
	$out = 1;
	  if($_POST['page'] == "to2") {
	  	sql_query("UPDATE new_tutorial SET tutorial = 2 WHERE user = '$_SESSION[user]';");
	  	$tut['tutorial'] = 2;
	  }else{
	
		  $pfuschOutput .= "<br><br><br><br><br><br><br><br>
		  				<table border=1>
								<tr>
									<td>
										<div align='center'>
											<form action='/start.php' method='post'>
												<br><br>Herzlich Willkommen bei Escape to Space. Folge mir und ich erkl�re dir die ersten Schritte.<br>
		  										Doch was ist Escape to Space?
												<input type='hidden' name='page' value='to2'>
												<br><br>
												<div align='right'>
													<input type='submit' value='Weiter'>
												</div><br><br>
											</form>
										</div>
									</td>
								</tr>
							</table><br><br><br><br><br><br><br><br>";  
		  
	  }
}
if($tut['tutorial'] == 2) {

	$out = 1;
	if($_POST['page'] == "to3") {
		sql_query("UPDATE new_tutorial SET tutorial = 3 WHERE user = '$_SESSION[user]';");
		$tut['tutorial'] = 3;
	}else{
	
		$pfuschOutput .= "<br><br><br><br><br><br><br><br><table border=1>
								<tr>
									<td>
										<div align='center'>
											<form action='/start.php' method='post'>
												<br><br>Escape to Space ist ein Browsergame ohne viel Grafik. Doch was ist Escape to Space?
												<br><br>
												<b>Bauen, Forschen, Kontakte kn�pfen</b><br>
												Die alten Spieler spielen schon seit Jahren Escape to Space - wegen der Freundschaften.<br>
												Lern neue Leute kennen, bilde Feindbilder, schlie� Freundschaften.<br><br>
												<b>Krieger, H�ndler, Wirtschaftler</b><br>
												Du entscheidest selbst wie du Escape to Space spielen m�chtest!<br>
												Bist du Krieger? Dann sei Agressiv und zerst�re andere!<br>
												Bist du H�ndler? Dann bring dich und deinen Account voran durch kluge Flugzeugverk�ufe oder Kreditgesch�fte.<br>
												Bist du Wirtschaftler? Dann werde zur gr��ten Wirtschaftsmacht! Besitz eine Produktion wie kein anderer!<br><br>
												<b>Intrigen, Verschw�rungen, Kriege</b><br>
												Wer hintergeht wen? Wo habe ich die gr��ten Vorteile? Verteidige dich und deine Allianz! Oder greif alles und jeden an!<br><br>
												<input type='hidden' name='page' value='to3'>
												<br><br>
												<div align='right'>
													<input type='submit' value='Weiter'>
												</div><br><br>
											</form>
										</div>
									</td>
								</tr>
							</table><br><br><br><br><br><br><br><br>";
	
	}
}
if($tut['tutorial'] == 3) {

	$out = 1;
	if($_POST['page'] == "to4") {
		sql_query("UPDATE new_tutorial SET tutorial = 4 WHERE user = '$_SESSION[user]';");
		$tut['tutorial'] = 4;
	}else{

		$pfuschOutput .= "<br><br><br><br><br><br><br><br><table border=1>
								<tr>
									<td>
										<div align='center'>
											<form action='/start.php' method='post'>
												<br><br><b>Rohstoffe, Geb�ude, Forschungen</b><br><br>
												In Escape to Space gibt es 4 verschiedene Rohstoffarten:<br>
												- Iridium<br>
												- Holzium<br>
												- Wasser<br>
												- Sauerstoff<br><br>
												Iridium wird f�r Geb�ude, Verteidigungsanlagen und Flugzeuge als Hauptrohstoff ben�tigt.<br>
												Holzium wird f�r alles ben�tigt: Geb�ude, Forschungen, Verteidigungsanlagen und Flugzeuge. Es ist der Nebenbestandteil.<br>
												Wasser wird nur zur Produktion von Sauerstoff ben�tigt und ist ansonsten ein Abfallprodukt.<br>
												Sauerstoff hingegen wird vorrangig f�r Forschungen aber auch als Treibstoff f�r Flugzeuge ben�tigt.<br>
												Ist die produzierte Menge Wasser kleiner als die Verbrauchte und ist kein Wasser im Lager vorhanden, wird die Sauerstoffproduktion gedrosselt.<br><br>
												<b>Geb�udearten</b><br><br>
												Die verschiedenen Geb�ude sind eingeteilt in folgende Arten:<br>
												- Rohstoff Geb�ude<br>
												- Lager<br>
												- Flugzeug Geb�ude<br>
												- Zentren<br><br>
												Erstellte Geb�ude wirken jeweils f�r diese Stadt w�hrend Technologien global f�r einen gesamten Account auf allen St�dten wirken.<br>
												Ist die Produktion zu gering, muss zu lange gewartet werden um das n�chste Geb�ude zu bauen. Eine zu hohe Produktion gibt es nicht.<br>
												Mit jeder neuen Geb�udestufe steigt die Bauzeit. Um diese wieder auf die Grundbauzeit zu senken, sollte gen�gend <b>Bauzentrum</b> gebaut werden.<br>
												Die Bauzeit des <b>Bauzentrums</b> l�sst sich hingegen nicht senken. 
												<input type='hidden' name='page' value='to4'>
												<br><br>
												<div align='right'>
													<input type='submit' value='Weiter'>
												</div><br><br>
											</form>
										</div>
									</td>
								</tr>
							</table><br><br><br><br><br><br><br><br>";

	}
}
if($tut['tutorial'] == 4) {

	$out = 1;
	if($_POST['page'] == "to5") {
		sql_query("UPDATE new_tutorial SET tutorial = 5 WHERE user = '$_SESSION[user]';");
		$tut['tutorial'] = 5;
	}else{
		
		$pfuschOutput .= "<br><br><br><br><br><br><br><br><table border=1>
								<tr>
									<td>
										<div align='center'>
											<form action='/start.php' method='post'>
												<br><br><b>Geb�ude</b><br><br>
												Im Geb�ude 'Lager' lagern Iridium, Holzium und Wasser; im 'Depot' Sauerstoff.
												Ist eines der Lager voll kann nichts mehr Produziert werden. Das hei�t, du verlierst Rohstoffe.<br>
												Sorg daf�r, dass du immer genug Platz im Lager und Depot hast. <br><br>
												<b>Zentren</b>
												Es gibt 5 verschiedene Zentren, jeweils mit einer anderen Eigenschaft:<br>
												- Bauzentrum<br>
												- Technologiezentrum<br>
												- Kommunikationszentrum<br>
												- Handelszentrum<br>
												- Verteidigungszentrum<br><br>
												Das Bauzentrum verk�rzt, wie schon beschrieben, die Bauzeit der anderen Geb�ude.<br>
												Das Technologiezentrum ist f�r die Verwaltung und Erforschung von Technologien zust�ndig. 
												�ber das Kommunikationszentrum wird die Kommunikation aller St�dte verwaltet. Die h�he des Kommunikationszentrums<br>
												bestimmt wieviele St�dte du in deinem Account verwalten kannst.<br>
												Das Handelszentrum bietet die M�glichkeit den zentralen Handelsplatz zu betreten. Hier kannst du eine Sorte<br>
												Rohstoffe in eine andere tauschen. Aber auch Flugzeuge lassen sich hier verkaufen oder kaufen.<br>
												Das Verteidigungszentrum ist das Herz des Schutzes deines Stadt. Die H�he des Verteidigungszentrums bestimmt die Anzahl<br>
												an Verteidigungsanlagen.<br><br>
												<b>Verteidigung</b><br><br>
												Hast du auf deiner Stadt nicht gen�gend Verteidigung k�nnen dir deine Rohstoffe geraubt werden.<br>
												Deine Hauptstadt, mit welcher du startest, kann niemand erobern. Deine 'Kolonien', die du sp�ter gr�nden wirst,<br>
												k�nnen dir komplett entwendet werden. Aber auch du kannst dein Imperium vergr��ern mit Kolonien anderer Spieler.
												<input type='hidden' name='page' value='to5'>
												<br><br>
												<div align='right'>
													<input type='submit' value='Weiter'>
												</div><br><br>
											</form>
										</div>
									</td>
								</tr>
							</table><br><br><br><br><br><br><br><br>";

	}
}
if($tut['tutorial'] == 5) {

	$out = 1;
	if($_POST['page'] == "to6") {
		sql_query("UPDATE new_tutorial SET tutorial = 6 WHERE user = '$_SESSION[user]';");
		$tut['tutorial'] = 5;
	}else{
		
		$pfuschOutput .= "<br><br><br><br><br><br><br><br><table border=1>
								<tr>
									<td>
										<div align='center'>
											<form action='/start.php' method='post'>
												<br><br><b>Technologien</b><br><br>
												Technologien wirken sich auf den gesamten Account, sprich jede Stadt, aus.<br><br>
												Wie bei Geb�uden gibt es auch verschiedene Technologien:<br>
												- Geschwindigkeitssteigernde<br>
												- Kampfkraftsteigernde<br>
												- Flugzeug<br>
												- Produktionssteigernde<br><br>
												<b>Bergbautechnik</b> erh�ht die Produktion von Iridium und Holzium um <b>5%</b> pro erforschte Stufe.
												<b>Wasserkompression</b> ist das Gegenst�ck zu Bergbautechnik und erh�ht die Produktion von Sauerstoff um <b>5%</b> pro erforschter Stufe.<br>
												<b>Lagerverwaltung</b> erh�ht die Lagerkapazit�t um 5% pro erforschter Stufe.<br><br>
												Zu beachten gilt das die zuw�chse Exponeniell steigen. Von diesen Forschungen kann niemand genug haben.<br><br>
												<b>Waffentechnologien</b><br><br>
												Elektronen-, Protonen- und Neutronensequenzwaffen hei�en die Waffentechnologien. Zur Freischaltung von Flugzeugen und Verteidigungsanlagen<br>
												brauch sie jeder Spieler. Jede Technologie hat andere Kampfwertzuw�chse und erh�ht f�r eine kleine Anzahl an Flugzeugen<br>
												den Kampfwert. Welches Flugzeug bei welcher Technologie einen Zuwachs erh�lt l�sst sich in der Beschreibung entnehmen.<br><br>
												<b>Antriebstechnologien</b><br><br>
												Oxidations-, Hover- und Antigravitationsantrieb hei�en die Antriebstechnologien. Ebenso wie Waffentechnologien werden diese<br>
												f�r die Freischaltung von Flugzeugen ben�tigt und steigern die Geschwindigkeit deiner Flugzeuge.<br><br>
												Du musst dich fr�h entscheiden was du spielen m�chtest: Welche Technologie und somit welche Flugzeuggattung. Aber auch:<br>
												M�chtest du langsam aber stark oder schw�cher aber schnell sein? Mehr Waffentechnologien und weniger Antriebe? Oder umgekehrt?<br>
												Die Entscheidung liegt bei dir! Das richtige Balancing ist der Schl�ssel zum Erfolg.
												<input type='hidden' name='page' value='to6'>
												<br><br>
												<div align='right'>
													<input type='submit' value='Weiter'>
												</div><br><br>
											</form>
										</div>
									</td>
								</tr>
							</table><br><br><br><br><br><br><br><br>";

	}
}	
if($tut['tutorial'] == 6) {

	if($_POST['page'] == "to7") {
		sql_query("UPDATE new_tutorial SET tutorial = 7 WHERE user = '$_SESSION[user]';");
		$tut['tutorial'] = 7;
	}else{
		
		$out = 1;
		$pfuschOutput .= "<br><br><br><br><br><br><br><br><table border=1>
								<tr>
									<td>
										<div align='center'>
											<form action='/start.php' method='post'>
												<br><br><b>Erste Geb�ude</b><br><br>
												Lass uns beginnen!<br><br>
												Nachfolgend landest du auf der Hauptansicht deiner Hauptstadt. Hier landest du nach jedem Login.<br>
												Die Hauptansicht bietet dir einen �berblick �ber deine Stadt und deinem Account.<br><br>
												Welches Geb�ude baut? Wieviele Rohstoffe besitze ich noch? Wie ist die Auslastung des Hangars/Verteidigungszentrums?<br>
												Gibt es Angriffe auf mich/meinen Account?<br>
												<input type='hidden' name='page' value='to7'>
												<br><br>
												<div align='right'>
													<input type='submit' value='Weiter'>
												</div><br><br>
											</form>
										</div>
									</td>
								</tr>
							</table><br><br><br><br><br><br><br><br>";

	}
}
if($tut['tutorial'] == 7) {
	if($tut_build != 1) {
		$points = sql_fetch_array(sql_query("SELECT points FROM city WHERE ID = '$_SESSION[city]'"));
		if($points['points'] < 50) {
			$pfuschOutput .= "<table border=1><tr><td><div align='center'>
								<br>Bis du 50 Stadtpunkte hast gibt es einen Angriffsschutz. Du brauchst noch nicht direkt in Verteidigung investieren.<br> Daher lass uns mit dem Bauen beginnen.<br><br>
								Klick als erstes auf Bauzentrum um dein erstes Geb�ude zu bauen und keine Bauzeit zu verlieren - denn das ist das kostbarste gut in diesem Spiel!<br><br></div></td></tr></table><br><br>";
		}else{
			$pfuschOutput .= "<table border=1><tr><td><div align='center'>
								<br>Die aktuelle Runde l�uft schon einige Zeit, daher hast du einen Startbonus, den sogenannten Sp�teinsteigerbonus, bekommen.<br>
								Dadurch bist du schon jetzt st�rker wie andere Spieler, aber auch direkt angreifbar!<br>
								Trotzdem entlassen wir dich nicht einfach der b�sen Welt dort drau�en. Du hast von uns eine Verteidigung bekommen.<br>
								Stimmt jedoch das Verh�ltnis Rohstoffe/Verteidigung nicht kannst du angegriffen werden. Du musst klug bauen und dich verteidigen.<br>
								Wir zeigen dir jetzt wie!<br><br>
								Das Wichtigste ist keine Bauzeit zu verlieren, drum klicke schnell auf Bauzentrum um dein erstes eigenes Geb�ude zu bauen.<br><br></div></td></tr></table><br><br>";
		}
	}else{
		$pfuschOutput .= "<table border=1><tr><td><div align='center'>
								<br>Anfangs ist die Produktion das Wichtigste. Und der wichtigste Rohstoff f�r Geb�ude ist Iridium.<br>
								Trotz einer gro�en Menge Rohstoffe zum Beginn hast du schnell Rohstoffmangel - vor allem bei Iridium, daher ist es Wichtig keine unn�tigen Geb�ude zu bauen.<br>
								Hierzu z�hlt Anfangs auch das Bauzentrum, welches die Bauzeit senkt. Zwar hast du schneller eine h�here Produktion wenn das Geb�ude schneller fertig ist, jedoch
								 ist Bauzentrum gerade am Anfang teuer. Als Faustregel gilt: lass die Bauzeit von Produktionsgeb�uden ruhig auf 5 Stunden ansteigen.<br>
								Um die Rohstoffe f�r die n�chste Mine zu sammeln brauchst du l�nger wie die Minen bauen.<br><br>
								Baue als erstes 5 Stufen Iridium-Mine. Wir haben die Bauzeit f�r dich gesenkt.<br><br></div></td></tr></table>";
	}
}
if($tut['tutorial'] == 8) {
	$pfuschOutput .= "<table border=1><tr><td><div align='center'>
								<br>Lass uns ein Technologiezentrum bauen, denn wir wollen Forschen um schneller voranzukommen.<br><br>
								</div></td></tr></table>";
}
if($tut['tutorial'] == 9) {
	if($tut_build != 2) {
		$pfuschOutput .= "<table border=1><tr><td><div align='center'>
							<br>Die ersten Geb�ude sind fertiggestellt. Gratuliere.<br>
							Geb�ude wirken sich jedoch nur auf eine einzelne Stadt aus, Technologien auf den gesamten Account. Boni einzelner Stufen summieren sich.
							5 Stufen BBT bringen 5*5% - also nicht 25% sondern 27,6%. Zinseszins. Je h�her deine Technologien, desto weniger Rohstoffgeb�ude brauchst du. Es kann nie zuviel Bergbautechnik sein.
							Daher lass uns beginnen und forsch 2 Stufen Bergbautechnik und 1 Stufe Wasserkompression.<br><br></div></td></tr></table>";
	}else{
		$pfuschOutput .= "<table border=1><tr><td><div align='center'>
							<br>Willkommen im Technologiezentrum.<br><br>
							Hier hast du einen �berblick �ber alle Forschungen. F�r Flugzeuge, f�r Produktion, f�r deine Lager. Es funktioniert wie das Bauzentrum, nur das du weniger Technologien vormerken kannst.<br><br>
							Forsch f�r den Anfang bitte 2 Stufen Bergbautechnik und danach 1 Stufe Wasserkompression. Wir wollen deine Produktion steigern.<br><br></div></td></tr></table>";
	}
}
if($tut['tutorial'] == 10) {
	$select_def = sql_fetch_array(sql_query("SELECT d_electronwoofer FROM city WHERE user='$_SESSION[user]';"));
	if($select_def['d_electronwoofer'] == 30) {
		$tut['tutorial'] = 11;
		$endit = 1;
		sql_query("UPDATE new_tutorial SET tutorial='11' WHERE user='$_SESSION[user]';");
	}
	if($tut_build != 3 && $endit != 1) {
		$pfuschOutput .= "<table border=1><tr><td><div align='center'>
							<br>Je h�her die Produktion ist, desto gr��er sind die Rohstoffbest�nde und umso attraktiver sind wir f�r Angriffe durch andere Spieler.<br>
							Daher brauchen wir Verteidigung! Ich habe dir soeben 2 Stufen Verteidigungszentrum gutgeschrieben. <br><br>
							Gehe nun ins Verteidigungszentrum und bau 30 Elektronenwoofer.<br><br></div></td></tr></table>";
	}elseif($endit != 1) {
		$pfuschOutput .= "<table border=1><tr><td><div align='center'>
							<br>Willkommen im Verteidigungszentrum.<br><br>
							Bevor erste Angriffe auf dich stattfinden brauchen wir Verteidigung! Bau 30 Elektronenwoofer um dich zu sch�tzen!<br><br></div></td></tr></table>";
	}
}
if($tut['tutorial'] == 11) {
	if($tut_build != 4) {
		$pfuschOutput .= "<table border=1><tr><td><div align='center'>
							<br>Ein sehr wichtiger Aspekt in Escape to Space ist der Einsatz von Flugzeuge. Ob f�r Rohstofftransport, zum Handeln oder um andere Spieler anzugreifen.<br><br>
							Oder auch um Kolonien zu gr�nden. Mit einem 'Settler' lassen sich unbewohnte Flecke unserer Welt besiedeln. Bau bitte einen Settler.<br><br></div></td></tr></table>";
	}else{
		$pfuschOutput .= "<table border=1><tr><td><div align='center'>
							<br>Willkommen im Hangar.<br><br>
							Hier kannst du Flugzeuge verschiedenster Kategorien bauen. Ob f�r Angriffe, zur Verteidigung, zum Rohstofftransport oder auch um Kolonien gr�nden (Settler) oder kriegerisch �bernehmen zu k�nnen (Scarecrow).<br><br>
							Es wird Zeit dein Imperium zu vergr��ern. Je mehr St�dte du besitzst, desto gr��er ist deine Produktion und deine Macht.<br>
							Bau einen Settler um eine Kolonie zu gr�nden.<br><br></div></td></tr></table>";
	}
}
if($tut['tutorial'] == 12) {
	if($tut_build != 5) {
		$pfuschOutput .= "<table border=1><tr><td><div align='center'>
							<br>Gratuliere, dein Settler ist fertig!<br><br>
							Nun such dir eine passende leere Stelle auf der Weltkarte aus, merke dir die Koordinaten in folgendem Format:<br>
							Kontinent:Land:Stadt<br><br>
							Wenn du passende Koordinaten gefunden hast klicke auf den Flughafen und gib sie dort als Ziel ein. W�hl danach den nun vorhandenen
							Settler aus und klick weiter unten das Feld vor 'Kolonisieren/Erobern' an. Mit einem Klick auf 'Flotte starten' fliegt deine Flotte los - endlich vergr��ert sich dein Imperium.<br><br></div></td></tr></table>";
	}else{
		$pfuschOutput .= "<table border=1><tr><td><div align='center'>
							<br>Erweiter dein Imperium!<br><br>
							W�hl als erstes deinen Settler aus, trag danach deine Wunschkoordinaten ein und w�hl weiter unten 'Kolonisieren/Erobern' aus.<br><br></div></td></tr></table>";
	}
}
if($tut['tutorial'] == 13) {
	
}





if($out == 1) {
	// define phptal template
	require_once("PHPTAL.php");
	require_once("include/PHPTAL_EtsTranslator.php");
	$template = new PHPTAL('tutorial.html');
	$template->setTranslator(new PHPTAL_EtsTranslator());
	$template->setEncoding('ISO-8859-1');
	
	// set page title
	$template->set('pageTitle', 'Der erste Schritt - Willkommen bei Escape to Space');
	
	$template->set('pfuschOutput',$pfuschOutput);
	// include common template settings
	require_once("include/JavaScriptCommon.php");
	require_once("include/TemplateSettingsCommon.php");
		
	// save resource changes (ToDo: Is this necessary on every page?)
	$timefixed_depot->save();
		
	// create html page
	try {
		echo $template->execute();
	}
	catch (Exception $e) { echo $e->getMessage(); }
	die();
}

*/

?>