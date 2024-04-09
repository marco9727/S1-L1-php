<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Serie A - Formazioni</title>
</head>
<body>
    <h1>Serie A - Formazioni</h1>
    <?php
    // Array delle squadre di Serie A e delle relative formazioni
    $serieA = array(
        "Juventus" => array("Portiere" => "Szczesny", "Difensori" => ["Danilo", "De Ligt", "Bonucci", "Alex Sandro"], "Centrocampisti" => ["Bentancur", "McKennie", "Rabiot"], "Attaccanti" => ["Chiesa", "Dybala", "Morata"]),
        "Inter" => array("Portiere" => "Handanovic", "Difensori" => ["Skriniar", "De Vrij", "Bastoni"], "Centrocampisti" => ["Barella", "Brozovic", "Vidal"], "Attaccanti" => ["Perisic", "Lautaro", "Martinez"]),
        "Milan" => array("Portiere" => "Donnarumma", "Difensori" => ["Calabria", "Kjaer", "Tomori", "Hernandez"], "Centrocampisti" => ["Kessie", "Bennacer", "Saelemaekers"], "Attaccanti" => ["Castillejo", "Ibrahimovic", "Leao"]),
        "Napoli" => array("Portiere" => "Ospina", "Difensori" => ["Di Lorenzo", "Manolas", "Koulibaly", "Mario Rui"], "Centrocampisti" => ["Fabian", "Demme", "Zielinski"], "Attaccanti" => ["Lozano", "Osimhen", "Insigne"]),
        "Atalanta" => array("Portiere" => "Gollini", "Difensori" => ["Toloi", "Romero", "Djimsiti"], "Centrocampisti" => ["De Roon", "Freuler", "Gosens"], "Attaccanti" => ["Malinovskyi", "Muriel", "Zapata"]),
        "Lazio" => array("Portiere" => "Reina", "Difensori" => ["Patric", "Acerbi", "Radu"], "Centrocampisti" => ["Milinkovic-Savic", "Lucas Leiva", "Luis Alberto"], "Attaccanti" => ["Lazzari", "Correa", "Immobile"]),
        "Roma" => array("Portiere" => "Mirante", "Difensori" => ["Mancini", "Ibanez", "Kumbulla"], "Centrocampisti" => ["Veretout", "Pellegrini", "Mkhitaryan"], "Attaccanti" => ["Pedro", "Dzeko", "Mkhitaryan"]),
        "Sassuolo" => array("Portiere" => "Consigli", "Difensori" => ["Toljan", "Marlon", "Ferrari", "Rogerio"], "Centrocampisti" => ["Locatelli", "Bourabia", "Duncan"], "Attaccanti" => ["Boga", "Berardi", "Defrel"]),
        "Fiorentina" => array("Portiere" => "Dragowski", "Difensori" => ["Caceres", "Pezzella", "Milenkovic", "Biraghi"], "Centrocampisti" => ["Amrabat", "Pulgar", "Castrovilli"], "Attaccanti" => ["Ribery", "Vlahovic", "Callejon"]),
        "Verona" => array("Portiere" => "Silvestri", "Difensori" => ["Ceccherini", "Magnani", "Dimarco", "Faraoni"], "Centrocampisti" => ["Veloso", "Tameze", "Zaccagni"], "Attaccanti" => ["Barak", "Lasagna", "Zaccagni"]),
        "Torino" => array("Portiere" => "Sirigu", "Difensori" => ["Izzo", "Bremer", "Buongiorno", "Vojvoda"], "Centrocampisti" => ["Rincon", "Linetty", "Mandragora"], "Attaccanti" => ["Zaza", "Belotti", "Sanabria"]),
        "Bologna" => array("Portiere" => "Skorupski", "Difensori" => ["De Silvestri", "Tomiyasu", "Soumaoro", "Dijks"], "Centrocampisti" => ["Svanberg", "Soriano", "Schouten"], "Attaccanti" => ["Orsolini", "Barrow", "Vignato"]),
        "Udinese" => array("Portiere" => "Musso", "Difensori" => ["Becao", "Nuytinck", "Samir", "Zeegelaar"], "Centrocampisti" => ["Walace", "Arslan", "De Paul"], "Attaccanti" => ["Llorente", "Okaka", "Forestieri"]),
        "Spezia" => array("Portiere" => "Zoet", "Difensori" => ["Vignali", "Erlic", "Chabot", "Marchizza"], "Centrocampisti" => ["Maggiore", "Ricci", "Acampora"], "Attaccanti" => ["Gyasi", "Galabinov", "Verde"]),
        "Cagliari" => array("Portiere" => "Cragno", "Difensori" => ["Pisacane", "Walgner", "Carboni", "Lykogiannis"], "Centrocampisti" => ["Nandez", "Marin", "Duncan"], "Attaccanti" => ["Joao Pedro", "Simeone", "Pavoletti"])
    );

    // Ciclo per stampare le squadre e le relative formazioni
    foreach ($serieA as $squadra => $formazione) {
        echo "<h2>$squadra</h2>";
        echo "<h3>Formazione:</h3>";
        echo "<ul>";
        foreach ($formazione as $ruolo => $giocatori) {
            echo "<li><strong>$ruolo:</strong> ";
            if (is_array($giocatori)) {
                echo implode(", ", $giocatori);
            } else {
                echo $giocatori;
            }
            echo "</li>";
        }
        echo "</ul>";
    }
    ?>
</body>
</html>