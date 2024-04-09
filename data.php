<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S1-L1</title>
</head>
<body>
    <h1>Data Odierna</h1>
    
    <p>
        <?php
        date_default_timezone_set('Europe/Rome');


//Qui definiamo un array associativo che mappa i numeri dei mesi ai loro
// nomi in italiano.
        $mesi = 
          [  1 => "Gennaio",
            2 => "Febbraio",
            3 => "Marzo",
            4 => "Aprile",
            5 => "Maggio",
            6 => "Giugno",
            7 => "Luglio",
            8 => "Agosto",
            9 => "Settembre",
            10 => "Ottobre",
            11 => "Novembre",
            12 => "Dicembre"
];
//La funzione getdate() restituisce un array associativo contenente 
//informazioni sulla data e l'ora corrente.
        $data_odierna = getdate();
//Estraiamo il giorno (mday), il mese (mon) e l'anno (year) dall'array 
//restituito da getdate(). Per il mese, utilizziamo l'array $mesi definito 
//in precedenza per ottenere il nome del mese corrispondente al numero del 
//mese.
        $giorno = $data_odierna['mday'];
        $mese = $mesi[$data_odierna['mon']];
        $anno = $data_odierna['year'];
//echo sarebbe il console log in js 
        echo "Oggi è il $giorno $mese $anno";
        ?>
    </p>
    
</body>
</html>