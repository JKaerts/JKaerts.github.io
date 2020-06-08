<?php 
$title="Energie, explosies en eten";
include("header.php");
?>

<?= topic($title) ?>

<p>Op 30 oktober 1961, tijdens de Koude Oorlog, bracht de Sovjetunie een kernwapen tot ontploffing op een testsite in Nova Zembla.
Deze bom kreeg de bijnaam ‘Tsar Bomba’ ofwel tsarenbom.
Met een energie van 50 megaton was de Tsar Bomba krachtiger dan alle explosieven samen die tijdens de Tweede Wereldoorlog gebruikt werden (inclusief de twee atoombommen op Hiroshima en Nagasaki).
Maar hoe groot is 50 megaton eigenlijk?
Wat stelt deze waarde voor?
Om deze vragen te beantwoorden, moet ik het eerst hebben over energie maar energie kan niet ingevoerd worden zonder het eerst te hebben over krachten.
</p>

<h2>Energie en krachten</h2>
<p>
In de mechanica spreekt men over krachten als waarneembare fenomenen die de snelheid van objecten kunnen veranderen.
De tweede wet van Newton zegt dat als een kracht op een object inwerkt dit object zal versnellen of vertragen.
Als je een baksteen omhoog houdt en loslaat, zal de zwaartekracht ervoor zorgen dat de baksteen steeds sneller naar beneden zal vallen.
Als je diezelfde baksteen omhoog gooit zal de zwaartekracht eerst zijn snelheid verminderen totdat hij even stilhang op de top van zijn traject.
Vervolgens zal de baksteen terug naar beneden vallen.
</p>
<p>
Aangezien een snelheid wordt uitgedrukt in meter per seconde (\(m/s\)) zal een versnelling uitgedrukt worden in meter per seconde per seconde of in meter per seconde kwadraat (\(m/s^2\)).
Stel dat ik een auto versnel met een constante versnelling van \(5m/s^2\).
Dit wilt zeggen dat na iedere seconde de auto \(5m/s\) sneller zal rijden.
Als mijn auto vertrekt uit stilstand zal hij dus na één seconde een snelheid van \(5m/s\) hebben.
Na twee seconden heeft mijn auto een snelheid van \(10m/s\) en na drie seconden een snelheid van \(15m/s\).
</p>
<p>
De fysische eenheid van kracht is de Newton (\(N\)).
Een Newton kan je het best begrijpen door het te bekijken als een massa (in \(kg\)) maal een versnelling (in \(m/s^2\)).
Als ik een kracht van \(1N\) uitoefen wilt dat zeggen dat ik met deze kracht een object van \(1kg\) een constante versnelling kan geven van \(1m/s^2\).
Ook kan ik met dezelfde kracht een object van \(500g\) een constante versnelling geven van \(2m/s^2\) want \(500g\) is gelijk aan \(0,5kg\) en het product van de massa en de versnelling is gelijk aan één.
Deze redenering kan je ook omgekeerd maken.
Als ik weet dat een bepaalde kracht een object van \(10kg\) een versnelling kan meegeven van \(7m/s^2\) dan zal die kracht een sterkte hebben van \(7\times 10 N\) ofwel \(70N\).
</p>
<p>
Experimenteel heeft men vastgesteld dat de zwaartekracht van de aarde aan een object een versnelling kan meegeven van \(9,81m/s^2\).
Deze versnelling noemt men ook wel eens de <em>valversnelling</em> en noteert men vaak met \(g\).
Als je dus van een toren een baksteen laat vallen weet je dat na één seconde de baksteen een snelheid heeft van \(9,81m/s\) en na twee seconden een snelheid van \(19,62m/s\).
Valt het je op dat ik hier niets zei over de massa van de baksteen?
Door van verschillende objecten de invloed van de zwaartekracht te bepalen, kwam men tot de conclusie dat je met volgende formule de invloed van de zwaartekracht kan berekenen
\[(\text{zwaartekracht}) = (\text{massa})\times(\text{valversnelling}).\]
Als we dit compacter willen opschrijven, kunnen we de zwaartekracht noteren met \(F_z\), de massa van het object met \(m\) en de valversnelling zoals hierboven met \(g\).
De formule wordt dan degene die veel scholieren herkennen als
\[F_z = m\times g.\]
</p>
<!-- filmpje met hamer en veer: https://www.youtube.com/watch?v=5C5_dOEyAfk -->

<?php 
include("footer.php");
?>