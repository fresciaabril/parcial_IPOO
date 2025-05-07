<?php
    class Financiera{
        private $denominacionInst;
        private $direccionInst;
        private $colPrestamosInst;


        public function __construct($denominacion,$direccion){
            $this->denominacionInst = $denominacion;
            $this->direccionInst = $direccion;
            $this->colPrestamosInst = [];
        }


        public function getDenominacionInst()
        {
                return $this->denominacionInst;
        }

         
        public function getDireccionInst()
        {
                return $this->direccionInst;
        }

     
        public function getColPrestamosInst()
        {
                return $this->colPrestamosInst;
        }

         
        public function setDenominacionInst($denominacion)
        {
                $this->denominacionInst = $denominacion;
        }

       
        public function setDireccionInst($direc)
        {
                $this->direccionInst = $direc;
        }

        
        public function setColPrestamosInst($colPrestamos)
        {
                $this->colPrestamosInst = $colPrestamos;
        }


        public function otorgarPrestamoSiCalifica(){


        }




        public function informarCuotaPagar($idPrestamo) {

        }


        public function __toString()
        {
            $respuesta= ("Denominacion: " . $this->getDenominacionInst() . "Direccion: " . $this->getDireccionInst() . "Prestamos: " . $this->getColPrestamosInst());
            return $respuesta;
        }
    }