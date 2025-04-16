<?php

    class aeropuerto{
        private $denominacion;
        private $direccion;
        private $coleccAerolineas;


        public function __construct($denominacion, $direccion, $coleccAerolineas){
          $this->denominacion = $denominacion;
          $this->direccion = $direccion;
          $this->coleccAerolineas = $coleccAerolineas;  
        }


        public function getDenominacion()
        {
            return $this->denominacion;
        }


        public function getDireccion()
        {
            return $this->direccion;
        }

        
        public function getColeccAerolineas()
        {
            return $this->coleccAerolineas;
        }

 
        public function setDenominacion($denominacion)
        {
                $this->denominacion = $denominacion;
        }

       
        public function setDireccion($direccion)
        {
                $this->direccion = $direccion;
        }

    
        public function setColeccAerolineas($coleccAerolineas)
        {
                $this->coleccAerolineas = $coleccAerolineas;
        }

        public function __toString(){
            return 
            "Denominacion: ". $this-> getDenominacion() ."\n ".
            "Direccion: ". $this-> getDireccion() ."\n ".
            "coleccion de aerolineas: ". $this-> getColeccAerolineas();
        }
        public function retornarVuelosAerolinea($aerolinea){

        }


        public function ventaAutomatica($cantAsientos,$fecha,$destino){

        }


        public function promedioRecaudadoXAerolinea($idAerolinea){
          $prom = "";
            return $prom;
        }











    }