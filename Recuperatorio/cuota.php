<?php
    class Cuota{
        private $numeroInst;
        private $monto_cuotaInst;
        private $monto_interesInst;
        private $canceladaInst; //Almacena true si la cuota esta pagada o false en caso contrario


        public function __construct($numero, $monto_cuota, $monto_interes){ 
            $this->numeroInst = $numero; 
            $this->monto_cuotaInst = $monto_cuota; 
            $this->monto_interesInst = $monto_interes; 
            $this->canceladaInst = false; 
            }


        public function getNumeroInst()
        {
                return $this->numeroInst;
        }

      
        public function getMonto_cuotaInst()
        {
                return $this->monto_cuotaInst;
        }

         
        public function getMonto_interesInst()
        {
                return $this->monto_interesInst;
        }

         
        public function getCanceladaInst()
        {
                return $this->canceladaInst;
        }

         
        public function setNumeroInst($numero)
        {
                $this->numeroInst = $numero;
        }

        
        public function setMonto_cuotaInst($monto_cuota)
        {
                $this->monto_cuotaInst = $monto_cuota;
        }

 
        public function setMonto_interesInst($monto_interes)
        {
                $this->monto_interesInst = $monto_interes;
        }


        public function setCanceladaInst($cancelada)
        {
                $this->canceladaInst = $cancelada;
        }

        
        public function darMontoFinalCuota() {
            $cuota= $this->getMonto_cuotaInst();
            $interes= $this->getMonto_interesInst();
            $importe= ($cuota + $interes);
            return $importe;
        }


    }