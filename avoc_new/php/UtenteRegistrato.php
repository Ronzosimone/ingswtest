<?php

    class UtenteRegistrato extends Utente{

        public $nickName;
        public $password;
        public $idCliente;

        function __construct($nickName, $password, $idCliente) {
            $this->nickName = $nickName;
            $this->password = $password;
            $this->idCliente = $idCliente;
        }

    }

?>