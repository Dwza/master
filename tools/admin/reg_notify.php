<?php
	include_once("../session.php");
    require_once("../../database.php");
    require_once("../../functions.php");

 echo "Ein Relikt vergangener Zeit";
/*    
    if($_GET['do'] = "doit") {
    $get_user = sql_query("SELECT * FROM new_user");
    $i = 0;
    while ($mail = sql_fetch_array($get_user)) {
        if(empty($mail[code])) {
            $code = getConfirmCode();
            sql_query("UPDATE new_user SET code='".$code."' WHERE user='".$mail[user]."'");
            $mail[code] = $code;
        }
        $confirm_link = "http://www.escape-to-space.de/page/register.php?new_user=".$mail[user]."&email1=".$mail[email]."&email2=".$mail[email]."&precode=".$mail[code];
        $text = "	Hallo $mail[user], <br /><br />
                    Du wurdest automatisch f�r die neue Runde von ETS vorangemeldet. Du kannst nun
                    deine Registrierung best�tigen, indem du auf den folgenden Link klickst
                    und die noch fehlenden Felder ausf�llst. 
                    <br /><br />
                    <a href=\"$confirm_link\">$confirm_link</a> <br /><br/>

                    Sollte der Link nicht funktionieren, kannst du
                    dich auf der folgenden Seite mit deinem Benutzernamen, der E-Mail-Adresse und dem Code <pre>$mail[code]</pre> anmelden. <br /><br/>
                    <a href='http://www.escape-to-space.de/page/register.php'>http://www.escape-to-space.de/page/register.php</a>
                    <br /><br />
                    <br /><br />

                    Mit freundlichem Gru� <br />
                    Der ETS-Verwaltungsrat";

        smtp_mail($mail[email],
            "Voranmeldung f�r ETS 11 - Aufbruch Richtung Unendlichkeit",
            $text
        );
        echo "$i<br>\n";
        flush();
        $i++;
    }
    }else{
    	echo "Bist du dir sicher das du eine neue Voranmeldemail verschicken m�chtest?<br>
    			<form action='reg_notify.php' method='get'>
    				<input type='hidden' name='do' value='doit'>
    				<input type='submit' value='Voranmeldemail verschicken'>
    			</form>";
    }*/
?>
