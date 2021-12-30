<?php

    class Riepilogo {

        public $tipo;
        public $mesi;
        public $targa;
        public $prezzo;
        public $chilometraggio;
        public $anticipo;
        public $riscatto;
        public $fissaKm;
        public $prezzoVeicolo;

        public $tanFisso;
        public $taeg;
        public $tanMensile;

        public $costiFissi;
        public $marchiatura;
        public $speseIstruttoria;
        public $bolli;
        public $pneumatici;
        public $speseRendiconto;
        public $sepa;

        public $totDaFinanziare;
        public $rataMensile;
        public $totDaRimborsare;
        public $interessi;

        public $mesiPagati;


        function __construct($tipo, $targa, $mesi, $prezzo, $chilometraggio, $anticipo, $riscatto, $fissaKm, $prezzoVeicolo, $totDaFinanziare, $rataMensile, $totDaRimborsare, $interessi) {
            $this->tipo = $tipo;
            $this->targa = $targa;
            $this->mesi = $mesi;
            $this->prezzo = $prezzo;
            $this->chilometraggio = $chilometraggio;
            $this->anticipo = $anticipo;
            $this->riscatto = $riscatto;
            $this->fissaKm = $fissaKm;
            $this->prezzoVeicolo = $prezzoVeicolo;


            /*Costanti */

            $this->tanFisso = 3.00;
            $this->taeg = 3.00;
            $this->tanMensile = 3.00;

            /* Costi fissi */

            if ($tipo == 'leasing') {
                $this->costiFissi = 0;
                $this->marchiatura = 0;
                $this->speseIstruttoria = 0;
                $this->bolli = 0;
                $this->pneumatici = 0;
                $this->speseRendiconto = 0;
                $this->sepa = 0;
            } else {
                $this->costiFissi = number_format(200 + 300 + 16 + 3 + 3.50 + number_format(($prezzo * 0.0021) , 2, '.', ''), 2, '.', '');
                $this->marchiatura = 200;
                $this->speseIstruttoria = 300;
                $this->bolli = 16;
                $this->speseRendiconto = 3;
                $this->pneumatici = number_format($prezzo * 0.0021, 2, '.', '');
                $this->sepa = 3.50;
            }

            /* Calcoli dati */
            $this->totDaFinanziare = $totDaFinanziare;
            $this->rataMensile = $rataMensile;
            $this->totDaRimborsare = $totDaRimborsare;
            $this->interessi = $interessi;

            $this->mesiPagati = (rand(1, $mesi));
            
        }
        

    }


?>