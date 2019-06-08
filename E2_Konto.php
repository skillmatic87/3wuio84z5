<?php
require 'konto.class.php';

function abbuchen(int $Betrag, Konto $konto) {
    if ($konto->Kontostand - $Betrag <0) {
        echo "Abzubuchender Betrag überschreitet Kontostand, Buchung wurde nicht ausgeführt!";
    } else {
        $konto->Kontostand = $konto->Kontostand - $Betrag;
        echo "Betrag: $Betrag wurde abgehoben. Neuer Kontostand: $konto->Kontostand";
    }
}
function einzahlen(int $Betrag, Konto $konto) {
    $konto->Kontostand = $konto->Kontostand + $Betrag;
    echo "Betrag: $Betrag wurde eingezahlt. Neuer Kontostand: $konto->Kontostand";
}

$Konto1 = new Konto(123,5000,'Lina Petzold');
$Konto2 = new Konto(456,1250,'Karsten Schlütter');

abbuchen(500, $Konto1);
einzahlen(1000, $Konto2);
einzahlen(250, $Konto1);
abbuchen(10000, $Konto2);

    
?>
