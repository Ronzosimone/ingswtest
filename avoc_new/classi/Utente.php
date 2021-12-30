<?php

    class abstract Utente{

        public $cognome;
        public $nome;
        public $dataNascita;
        public $CF;
        public $mail;

        function __construct($cognome, $nome, $dataNascita, $CF, $mail ) {
            
            if(strlen($cognome) == 0){
                throw new Exception("Cognome non valido");
            }

            if(strlen($nome) == 0){
                throw new Exception("Nome non valido");
            }

            if(Utente::validateDate($dataNascita) == false){
                throw new Exception("Data di nascita non valida");
            }

            if(strlen($CF) != 16){
                throw new Exception("Codice fiscale non valido");
            }

            if(strlen($mail) == 0){
                throw new Exception("Mail non valida");
            }

            $this->cognome = $cognome;
            $this->nome = $nome;
            $this->dataNascita = $dataNascita;
            $this->CF = $CF;
            $this->mail = $mail;
        }


        private static function validateDate($date, $format = 'Y-m-d'){
            $d = DateTime::createFromFormat($format, $date);
            // The Y ( 4 digits year ) returns TRUE for any integer with any number of digits so changing the comparison from == to === fixes the issue.
            return $d && $d->format($format) === $date;
        }

        function generaNick($Nick){
            $TemptoCheck = "avoc-".rand(0,9).rand(0,9).rand(0,9).rand(0,9).rand(0,9);
            $conn = mysqli_connect('localhost','avoc','','my_avoc');
            $stmt = $conn->prepare("SELECT count(idUtente) as Esiste from Login where Nickname=?");
            $stmt->bind_param('s',$Nick);
            $stmt->execute();
            $result=$stmt->get_result();
            while($row = $result->fetch_assoc())
            {
              if($row['Esiste']<1){
                $Nick = $TemptoCheck;
              }
            }
              $conn->close();
              return $Nick;
          }


    }

?>