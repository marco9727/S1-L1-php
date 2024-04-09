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

        $mesi = array(
            1 => "Gennaio",
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
        );

        $data_odierna = getdate();

        $giorno = $data_odierna['mday'];
        $mese = $mesi[$data_odierna['mon']];
        $anno = $data_odierna['year'];

        echo "Oggi è il $giorno $mese $anno";
        ?>
    </p>
    
</body>
</html>