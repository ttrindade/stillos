<?php
    
    class EventoEntity {
        
        //Atributos
        private $id;
        private $Nome;
        private $CPF;
        private $Endereco;
        private $CEP;

        function __construct($id, $Nome, $CPF, $Endereco, $CEP) {
            $this->id = $id;
            $this->Nome = $Nome;
            $this->CPF = $CPF;
            $this->Endereco = $Endereco;
            $this->CEP = $CEP;
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
