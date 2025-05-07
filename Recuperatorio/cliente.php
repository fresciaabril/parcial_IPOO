<?php
    class Cliente{
        private $nombreInst;
        private $apellidoInst;
        private $dniInst;
        private $direccionInst;
        private $mailInst;
        private $telefonoInst;
        private $netoInst;



        public function __construct($nombre, $apellido, $dni, $direccion, $mail, $telefono, $neto){ 
            $this->nombreInst = $nombre; 
            $this->apellidoInst = $apellido; 
            $this->dniInst = $dni; 
            $this->direccionInst = $direccion; 
            $this->mailInst = $mail; 
            $this->telefonoInst = $telefono; 
            $this->netoInst = $neto; 
            }


        public function getNombreInst()
        {
                return $this->nombreInst;
        }

        
        public function getApellidoInst()
        {
                return $this->apellidoInst;
        }

        
        public function getDniInst()
        {
                return $this->dniInst;
        }

        
        public function getDireccionInst()
        {
                return $this->direccionInst;
        }

         
        public function getMailInst()
        {
                return $this->mailInst;
        }

        
        public function getTelefonoInst()
        {
                return $this->telefonoInst;
        }

         
        public function getNetoInst()
        {
                return $this->netoInst;
        }

         
        public function setNombreInst($nombreInst)
        {
                $this->nombreInst = $nombreInst;
        }

       
        public function setApellidoInst($apellidoInst)
        {
                $this->apellidoInst = $apellidoInst;
        }


        public function setDniInst($dniInst)
        {
                $this->dniInst = $dniInst;

        }


        public function setDireccionInst($direccionInst)
        {
                $this->direccionInst = $direccionInst;


        }


        public function setMailInst($mailInst)
        {
                $this->mailInst = $mailInst;
        }

 
        public function setTelefonoInst($telefonoInst)
        {
                $this->telefonoInst = $telefonoInst;
        }

  
        public function setNetoInst($netoInst)
        {
                $this->netoInst = $netoInst;
        }




        
    }
