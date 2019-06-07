<?php
require 'konto.class.php';

    function abbuchen(int $Betrag) {
        if ($this->Kontostand - $Betrag <0) {
            echo "Abzubuchender Betrag überschreitet Kontostand, Buchung wurde nicht ausgeführt!";
        }
                else {
                    $this->Kontostand = $this->Kontostand - $Betrag;
                    echo "Betrag: $Betrag wurde abgehoben. Neuer Kontostand: $this->Kontostand";
                }
    }
    function einzahlen(int $Betrag) {
        $this->Kontostand = $this->Kontostand + $Betrag;
        echo "Betrag: $Betrag wurde eingezahlt. Neuer Kontostand: $this->Kontostand";
    }

$Konto1 = new Konto(123,5000,'Lina Petzold');
$Konto2 = new Konto(456,1250,'Karsten Schlütter');

var_dump($Kontostand);

abbuchen(500)->$Konto1;
einzahlen(1000)->$Konto2;
einzahlen(250)->$Konto1;
abbuchen(10000)->$Konto2;

    
?>
