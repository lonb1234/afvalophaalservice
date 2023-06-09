<?php
include 'db.php';

$stmt = $pdo->prepare("SELECT * FROM afvalsoort;");
$stmt->execute();
$afvalData = $stmt->fetchAll();

// print_r ($afvalData[1]['soort']);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="calculator.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Arvo:wght@400;700&display=swap" rel="stylesheet">


    <title>Document</title>

</head>

<body>
    <div class="afvallijst">
        <?php
        foreach ($afvalData as $afval) {
            $afvalsoort = str_replace(' ', '', $afval['soort']);
            echo '<div class="afvalsoort">';
            echo '<h2>' . $afval['soort'] . '</h2>';
            echo '<section class="button-section">';
            echo '<button class="quantity-button ' . $afvalsoort . 'plus" onclick=changeAmountItems("' . $afvalsoort . '","plus")> + </button>';
            echo '<button class="quantity-button ' . $afvalsoort . 'min" onclick=changeAmountItems("' . $afvalsoort . '","min")> - </button>';
            echo '</section>';
            echo '<p id="' . $afvalsoort . '">0</p>';
            echo '</div>';
        }
        ?>
    </div>
</body>

</html>

Welkom bij Afvalophaaldienst, een bedrijf gevestigd in Bergen en gespecialiseerd in het opruimen en verwijderen van afval bij mensen thuis en het helpen bij het leegruimen van huizen.

Bij Afvalophaaldienst geloven we in de kracht van een opgeruimde en schone omgeving. Daarom bieden wij onze diensten aan voor het opruimen en verwijderen van diverse soorten afval, waaronder banken, stoelen, afvalzakken, koelkasten, diepvriezen en overige meubels.

Onze team van professionele en ervaren medewerkers zijn uitgerust met de juiste middelen en apparatuur om snel en efficiënt afval op te halen. Wij zorgen ervoor dat alle opgehaalde spullen op een verantwoorde en milieuvriendelijke manier worden verwerkt.

Of u nu verhuist, opruimt of gewoon meer ruimte nodig heeft, Afvalophaaldienst is hier om u te helpen. Onze diensten zijn beschikbaar voor particulieren, bedrijven en overheid.

Aarzel niet om contact met ons op te nemen voor meer informatie over onze diensten of om een afspraak te maken. Wij staan altijd klaar om u te helpen bij het opruimen en verwijderen van uw afval!