<?php
    
    class EventoEntity {
        
        //Atributos
        private $id;
        private $Descricao;
        private $Local;
        private $Data;
        private $Qtd_Mesas;
        
        function __construct($id, $Descricao, $Local, $Data, $Qtd_Mesas) {
            $this->id = $id;
            $this->Descricao = $Descricao;
            $this->Local = $Local;
            $this->Data = $Data;
            $this->Qtd_Mesas = $Qtd_Mesas;
           }
        
        //Getters
        
        public function __get($property) {
            if (property_exists($this, $property)) {
                return $this->$property;
            }
        }
        
        //Setters

        public function __set($property, $value) {
            if (property_exists($this, $property)) {
                $this->$property = $value;
            }

            return $this;
        }
        
    }
?>
