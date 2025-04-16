<?php

    class aerolinea{
        private $identificacion;
        private $nombre;
        private $colVuelosProgramados;

        public function __construct($id, $nom){
            $this->identificacion = $id;
            $this->nombre = $nom;
            $this->colVuelosProgramados = [];
        }


        public function getIdentificacion(){
            return $this->identificacion;
        }

     
        public function getNombre(){
            return $this->nombre;
        }


        public function getColVuelosProgramados(){
            return $this->colVuelosProgramados;
        }

    
        public function setIdentificacion($identificacion){
        $this->identificacion = $identificacion;
        }

        
        public function setNombre($nombre){
        $this->nombre = $nombre;
        }

        public function setColVuelosProgramados($colVuelo){
            $this->colVuelosProgramados = $colVuelo;
            }


        public function darVueloADestino ($destino, $cantAsientos){ 
            $colVuelos=array(); 
            $colVuelosAerolinea = $this -> getColVuelosProgramados(); 
            foreach ($colVuelosAerolinea as $unObjVuelo) { 
            $elDestino = $this->getDestino(); 
            $cant_Disponible = $this->getCantAsientosDisponibles(); 
            if($elDestino==$destino && $cant_Disponible >= $cantAsientos ) 
            array_push($colVuelos, $unObjVuelo); 
            } 
            return $colVuelos; 
            }

            public function incorporarVuelo($vuelo){
                $respuesta= false;
                if($primDestino != $segDestino && $fecha != $segFecha && $hora != $horaPartida){
                    $respuesta= true;
                }
                return $respuesta;
            }

            public function venderVueloADestino($cantAsientos, $destino, $fecha){
                $compra= false;
                if( $destino == $destinoBuscado && $cantAsientos < $cantPasajeros && $fecha == $fechaDeseada){
                    $compra= true;
                }
                return $compra;
            }
    }