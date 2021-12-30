<?php

    class Veicolo{
        public $targaVeicolo;
        public $marca;
        public $modello;
        public $versione;
        public $annoImmatricolazione;
        public $prezzo;
        public $peso;
        public $lunghezza;
        public $larghezza;
        public $numPosti;

        function __construct($marca, $modello, $versione, $annoImmatricolazione, $prezzo, $peso, $lunghezza, $larghezza, $numPosti) {

            if(Veicolo::validateDate($annoImmatricolazione) == false){
                throw new Exception("Data di immatricolazione del veicolo non è valida");
            }

            if(strlen($marca) == 0 || strlen($modello) == 0 || strlen($versione) == 0 || $prezzo < 0 || $lunghezza < 0 || $larghezza < 0 || $numPosti < 0 ){
                throw new Exception("Errore inserimento dettagli veicolo");
            }

            $this->marca = $marca;
            $this->modello = $modello;
            $this->versione = $versione;
            $this->annoImmatricolazione = $annoImmatricolazione;
            $this->prezzo = $prezzo;
            $this->peso = $peso;
            $this->lunghezza = $lunghezza;
            $this->larghezza = $larghezza;
            $this->numPosti = $numPosti;
        }


        private static function validateDate($date, $format = 'Y-m-d'){
            $d = DateTime::createFromFormat($format, $date);
            // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
            return $d && $d->format($format) === $date;
        }


        public function inserisciVeicolo(){
            $conn = mysqli_connect('localhost','avoc','','my_avoc');
            if($stmt = $conn->prepare("INSERT INTO Veicolo ( marca, modello, versione, annoImmatricolazione, prezzo, peso, lunghezza, larghezza, numPosti) VALUES(?,?,?,?,?,?,?,?,?)")){
                $stmt->bind_param("ssssddddi", $this->marca, $this->modello, $this->versione, $this->annoImmatricolazione, $this->prezzo, $this->peso, $this->lunghezza, $this->larghezza, $this->numPosti);
                $stmt->execute();
            }
            $conn->close();
        }


        // esistono ma sono implementati altrove
        public static function eliminaVeicolo(){
        }

        // esistono ma sono implementati altrove
        public static function modificaVeicolo(){
        }

        public static function getTarga($marca, $modello, $versione, $prezzoVeicolo){
            $targa = NULL;
            $conn = mysqli_connect('localhost','avoc','','my_avoc');
            if ($stmt = $conn->prepare("SELECT TargaVeicolo FROM Veicolo WHERE marca=? AND modello=? AND versione=? AND prezzo=?")) {
                $stmt->bind_param("sssd", $marca, $modello, $versione, $prezzoVeicolo);
                $stmt->execute();
                $stmt->bind_result($targa);
                $stmt->fetch();
            }
            $conn->close();
            return $targa;
        }

        public static function getPrezzoByTarga($targa){
            $prezzo = NULL;
            $conn = mysqli_connect('localhost','avoc','','my_avoc');
            if ($stmt = $conn->prepare("SELECT prezzo FROM Veicolo WHERE TargaVeicolo = ?")) {
                $stmt->bind_param("s", $targa);
                $stmt->execute();
                $stmt->bind_result($prezzo);
                $stmt->fetch();
                $stmt->close();
                }
            return $prezzo;
        }

    }

?>