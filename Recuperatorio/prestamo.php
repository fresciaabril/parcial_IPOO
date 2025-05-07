<?php
    class Prestamos{
        //atributos
        private $identificacionInst;
        private $codigoElectrodomesticoInst;
        private $fechaOtorgamientoInst;
        private $montoInst; 
        private $cantidadCuotasInst;
        private $tazaInteresInst;
        private $coleccionCuotasInst;
        private $referenciaClienteInst;
        
        
        public function __construct($identificacion,$codElectro,$fechaOtorgamiento,$montoInst,$cantCuotas,$tazaInteres,$refCliente){ 
            $cont=0;
            $this->identificacionInst = $cont++; 
            $this->codigoElectrodomesticoInst = $codElectro; 
            $this->fechaOtorgamientoInst = $fechaOtorgamiento; 
            $this->montoInst = $montoInst; 
            $this->cantidadCuotasInst = $cantCuotas; 
            $this->tazaInteresInst = $tazaInteres; 
            $this->coleccionCuotasInst = []; 
            $this->referenciaClienteInst = $refCliente; 
            }

        //Metodos de acceso
        public function getIdentificacionInst()
        {
            return $this->identificacionInst;
        }
    
            
        public function getcodigoElectrodomesticoInst()
        {
            return $this->codigoElectrodomesticoInst;
        }
    
            
        public function getFechaOtorgamientoInst()
        {
           return $this->fechaOtorgamientoInst;
        }
    
            
        public function getMontoInst()
        {
            return $this->montoInst;
        }
    
             
        public function getCantidadCuotasInst()
        {
            return $this->cantidadCuotasInst;
        }
    
            
        public function getTazaInteresInst()
        {
            return $this->tazaInteresInst;
        }
    
             
        public function getColeccionCuotasInst()
        {
            return $this->coleccionCuotasInst;
        }


        public function getReferenciaClienteInst()
        {
            return $this->referenciaClienteInst;
        }
    
        //Metodos de modificacion
        public function setIdentificacionInst($id)
        {
            $this->identificacionInst = $id;
        }

         
        public function setCodigoElectrodomesticoInst($codElectro)
        {
            $this->codigoElectrodomesticoInst = $codElectro;
        }

           
        public function setFechaOtorgamientoInst($fechaOtorga)
        {
            $this->fechaOtorgamientoInst = $fechaOtorga;
        }

  
        public function setMontoInst($monto)
        {
            $this->montoInst = $monto;
        }

          
        public function setCantidadCuotasInst($cantidadCuotas)
        {
            $this->cantidadCuotasInst = $cantidadCuotas;
        }

           
        public function setTazaInteresInst($tazaInte)
        {
            $this->tazaInteresInst = $tazaInte;
        }

            
        public function setColeccionCuotasInst($colecCuotas)
        {
            $this->coleccionCuotasInst = $colecCuotas;
        }

            
        public function setReferenciaClienteInst($refeCliente)
        {
            $this->referenciaClienteInst = $refeCliente;
        }
           

        private function calcularInteresPrestamo($numCuota){
            $cantCuotas=$this->getCantidadCuotasInst();
            $monto=$this->getMontoInst();
            $tasaInteres = $this->getTazaInteresInst(); //0.01 para 1%

            if ($numCuota < 1 || $numCuota > $this->getCantidadCuotasInst()) {
                $importeInteres=("Número de cuota inválido");
            }else{
                $importeInteres = ($monto - (($monto / $cantCuotas) * ($numCuota - 1))) * ($tasaInteres / 0.01);
            }
            return $importeInteres;
        }

        public function otorgarPrestamo(){
            //setea la fecha
            $monto=$this->getMontoInst();
            $cantidadCuotas=$this->getCantidadCuotasInst();
            $interes=$this->calcularInteresPrestamo(1);
            $fechaActual= getdate();
            $this->setFechaOtorgamientoInst($fechaActual);
            $montoTotal= $monto + $interes;
            $montoXCuota =($monto/ $cantidadCuotas);
            for ($i = 0; $i < $cantidadCuotas; $i++) {
                //calcula fecha venc de cuta
                $fechaCuota = date("Y-m-d");
                $cuotas[] = [
                    "numCuota" => $i + 1,
                    "fechaVencimiento" => $fechaCuota,
                    "monto"=> $montoXCuota,
                    "interes" => $interes,
                    "monto_total" => $montoTotal
                ];
            }
        }

        public function darSiguienteCuotaPagar(){
            $cuotas= $this->getColeccionCuotasInst();
                foreach ($cuotas as $cuota) {
                    if (!$cuota->estaCancelada()) {
                         $resp=null;
                    }else {
                        $resp=$this->getReferenciaClienteInst();
                    }
            
                }
            return $resp;
        }


        
}