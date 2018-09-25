<?php
    use models\Eventos;
    use validacoes\Validacoes;

    class PainelController {
        
        /* 
            Controller para a página painel.php 
        */
        
        private $model;
        private $validacoes;
        
        public function __construct() {
            $this->model = new Eventos();
            $this->validacoes = new Validacoes();
        }
        
        public function mostrarTodosEventos() { //Retorna todos os eventos
            
            $Eventos = $this->model->consultar();
            
            return $Eventos;
        }
        
        
        // Requests
        
        public function requestCadastro($fk_usuario, $titulo, $status, $descricao, $data, $imagem) {
            
            $dataHora = $this->validacoes->validarDataHora($data); //Validando data
            
               $executou = $this->model->adicionar($Descricao, 
                                                    $Local, 
                                                    $Data, 
                                                    $Qtd_Mesas);
                
        }
        
    }

?>
