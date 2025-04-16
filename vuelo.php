<?php

    class vuelo{
        private $numero;
        private $importe;
        private $fecha;
        private $destino;
        private $horaArribo;
        private $horaPartida;
        private $cantidadAsientosTotales;
        private $cantidadAsientosDisponibles;
        private $referencia;

    
        public function __construct($num, $import, $fechas, $destino, $arribo, $partida, $asientosTotales, $asientosDisponibles, $refe){
            $this->numero = $num;
            $this->importe = $import;
            $this->fecha = $fechas;
            $this->destino = $destino;
            $this->horaArribo = $arribo;
            $this->horaPartida = $partida;
            $this->cantidadAsientosTotales = $asientosTotales;
            $this->cantidadAsientosDisponibles = $asientosDisponibles;
            $this->referencia = $refe;
        }


        public function getNumero(){
            return $this->numero;
        }

        public function getImporte(){
            return $this->importe;
        }


        public function getFecha(){
            return $this->fecha;
        }


        public function getDestino(){
            return $this->destino;
        }


        public function getHoraArribo(){
            return $this->horaArribo;
        }


        public function getHoraPartida(){
            return $this->horaPartida;
        }


        public function getCantidadAsientosTotales(){
            return $this->cantidadAsientosTotales;
        }


        public function getCantidadAsientosDisponibles(){
            return $this->cantidadAsientosDisponibles;
        }


        public function getReferencia(){
            return $this->referencia;
        }


        public function setNumero($numero){
         $this->numero = $numero;
        }

        public function setImporte($importe){
        $this->importe = $importe;
        }

        
        public function setFecha($fecha){
        $this->fecha = $fecha;
        }


        public function setDestino($destino){
        $this->destino = $destino;
        }

  
        public function setHoraArribo($horaArribo){
        $this->horaArribo = $horaArribo;
        }

       

        public function setHoraPartida($horaPartida){
        $this->horaPartida = $horaPartida;
        }


        public function setCantidadAsientosTotales($cantidadAsientosTotales){
        $this->cantidadAsientosTotales = $cantidadAsientosTotales;
        }


        public function setCantidadAsientosDisponibles($cantidadAsientosDisponibles){
        $this->cantidadAsientosDisponibles = $cantidadAsientosDisponibles;
        }


        public function setReferencia($referencia){
        $this->referencia = $referencia;
        }
        public function asignarAsientosDisponibles ($cant_pasajeros){ 
            $respuesta = false; 
            $cantDisp = $this->getCantidadAsientosDisponibles(); 
            if($cant_pasajeros <= $cantDisp){ 
            $respuesta = true; 
            } 
            return $respuesta; 
            }

            


        public function __toString(){
            return 
            "Numero: ". $this-> getNumero()."\n ".
            "Importe: ". $this->getImporte() ."\n ".
            "Fecha: ". $this->getFecha() ."\n ".
            "Destino: ". $this->getDestino()."\n ".
            "Hora de arribo: ". $this->getHoraArribo()."\n ".
            "Hora de partida: ". $this->getHoraPartida()."\n ".
            "Cantidad de asientos totales: ". $this->getCantidadAsientosTotales()."\n ".
            "Cantidad de asientos disponibles: ". $this->getCantidadAsientosDisponibles()."\n ".
            "Referencia: ". $this->getReferencia();

        }
    }