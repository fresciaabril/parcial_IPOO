<?php

    class persona{
        private $pNombre;
        private $pApellido;
        private $pDireccion;
        private $pMail;
        private $pNumero;
    
        public function __construct($nombre, $apellido, $direccion, $mail, $numero){
            $this->pNombre = $nombre;
            $this->pApellido = $apellido;
            $this->pDireccion = $direccion;
            $this->pMail = $mail;
            $this->pNumero = $numero;
        }


        public function getPNombre(){
            return $this->pNombre;
        }

        
        public function getPApellido(){
            return $this->pApellido;
        }

       
        public function getPDireccion(){
            return $this->pDireccion;
        }

        
        public function getPMail(){
           return $this->pMail;
        }

       
        public function getPNumero(){
            return $this->pNumero;
        }


        public function setPNombre($nom){
            $this->pNombre = $nom;
        }


        public function setPApellido($apell){
            $this->pApellido = $apell;
        }


        public function setPDireccion($direc){
                $this->pDireccion = $direc;
        }


        public function setPMail($gmail) {
            $this->pMail = $gmail;
        }


        public function setPNumero($num){
            $this->pNumero = $num;
        }


        public function __toString(){
            return 
            "Nombre: ". $this->getPNombre() ."\n ".
            "Apellido: ". $this->getPApellido() ."\n ".
            "Direccion: ". $this->getPDireccion() ."\n ".
            "Mail: ". $this->getPMail() ."\n ".
            "Numero: ". $this->getPNumero();

        }


    }