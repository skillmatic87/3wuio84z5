<?php
declare(strict_types=1);
class Konto {
    private $Kontonummer;
    private $Kontostand;
    private $Kontoinhaber;
    
    public function __construct(int $Kontonummer, int $Kontostand, string $Kontoinhaber) {
        $this->Kontonummer = $Kontonummer;
        $this->Kontostand = $Kontostand;
        $this->Kontoinhaber = $Kontoinhaber;
        
        echo "<p>Konto: $this->Kontonummer wurde angelegt.</p>";
        echo "<p>Kontoinhaber: $this->Kontoinhaber";
        echo "<p>Kontostand: $this->Kontostand</p>";
    }
   
    public function getKontonummer($Kontonummer){
        return $this->$Kontonummer;
    }
    public function getKontostand($Kontostand){
        return $this->$Kontostand;
    }
    public function getKontoinhaber($Kontoinhaber){
        return $this->$Kontoinhaber;
    }
    
}
?>
