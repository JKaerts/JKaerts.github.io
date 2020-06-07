<?php 
$title="Min maal min is plus";
include("header.php");
?>

<h3 class="topic"><?= $title ?></h3>
<p>
Rekenen blijft de logica zelve zolang we ons beperken tot de natuurlijke getallen.
Twee getallen bij elkaar optellen is dan voldoende keren de operatie \(+1\) uitvoeren en twee getallen vermenigvuldigen is dan eigenlijk herhaalde optelling.
</p>
<p>
De dingen worden ingewikkelder zodra we ook naar negatieve getallen kijken.
Door een slimme analogie met geld en schuld te maken, kunnen we inzien dat de optelling tussen positieve en negatieve getallen logisch in elkaar zit.
Het probleem zit hem echter in de vermenigvuldiging, want wat in godsnaam is het getal \((-1)\times(-1)\)?</p><p>Tegenwoordig krijgen leerlingen aangeleerd dat het antwoord \(1\) is.
Dit blijkt inderdaad de goede keuze te zijn, maar waarom?
Deze vraag hield wiskundigen gedurende een lange tijd bezig maar men vond geen bewijs dat de negatieve getallen zich zo moesten gedragen.
Vaak kwam men dan met vage argumenten op de proppen.
Zo zei Euler dat het antwoord ofwel \(1\) of \(-1\) moest zijn maar dat \(-1\) niet kon want dat was al \(1\times(-1)\).
Erg overtuigend klinkt dat niet.
</p>
<p>
Het antwoord bleek uit een lichtjes andere hoek te komen.
In plaats van een hoop rekenregels die in steen gebeiteld staan, zijn we vrij deze zelf te kiezen.
Het feit dat we ervoor kiezen om \((-1)\times(-1)\) gelijk te stellen aan \(1\) is een gevolg van het feit dat we met gehele getallen even makkelijk willen kunnen rekenen als met natuurlijke getallen.
De bewerkingen op natuurlijke getallen zitten namelijk zo in elkaar dat volgende drie eigenschappen altijd waar zijn:
</p>
<ul>
  <li>Commutativiteit: voor iedere twee natuurlijke getallen \(a\) en \(b\) zal \(a+b\) gelijk zijn aan \(b+a\) en zal \(a\times b\) gelijk zijn aan \(b\times a\).</li>
  <li>Associativiteit: voor iedere drie natuurlijke getallen \(a\), \(b\) en \(c\) zal \(a+(b+c)\) gelijk zijn aan \((a+b) +c\) en zal \(a\times (b\times c)\) gelijk zijn aan \((a\times b)\times c\).</li>
  <li>Distributiviteit: voor iedere drie natuurlijke getallen \(a\), \(b\) en \(c\) zal \(a\times(b+c)\) gelijk zijn aan \(a\times b + a\times c\).</li>
</ul>
<p>
Het moderne standpunt is dat we deze eigenschappen willen behouden en de rekenregels errond willen opbouwen.
Stel nu dus even dat we deze drie eigenschappen als wetmatigheid aannemen.
We beginnen met het feit dat \(-1\) en \(1\) elkaars tegengestelden zijn:
\[(-1) + 1 = 0.\]
Omdat een getal maal nul opnieuw nul is, zal dan
\[(-1)\times ((-1) + 1) = (-1)\times 0 = 0.\]
Maar op het linkerlid kunnen we de distributieve eigenschap toepassen.
\[\begin{align}
0 &amp;= (-1)\times ((-1) + 1)\\
  &amp;= (-1)\times(-1) + (-1)\times 1\\
  &amp;= (-1)\times(-1) + (-1).
\end{align}\]
Dus eigenlijk zijn \((-1)\times(-1)\) en \(-1\) elkaars tegengestelden.
Maar het tegengestelde van \(-1\) was \(1\).
Dus moeten \((-1)\times(-1)\) en \(1\) hetzelfde getal zijn!
</p>

<?php 
include("footer.php");
?>
