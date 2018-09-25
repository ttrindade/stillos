<?php

    use models\Conexao;
    use entity\EventoEntity;

    class Eventos extends Conexao {
        
        /* 
            Classe para a manipulação da camada model dos eventos
        */
        
        private $conexao;
        
        function __construct() {
            /* Estabelecendo conexão com o banco de dados */
            $this->conexao = $this->conectar();
        }
        
        
        public function adicionar($Descricao, $Local, $Data, $Qtd_Mesas) {
            try {
               
                //Preparando a query SQL 
                $stmt = $this->conexao->prepare("INSERT INTO Eventos 
                            (Descricao, Local, Data, Qtd_Mesas) VALUES (?, ?, ?, ?, ?, ?)");
                $stmt->bind_param("isssss", $Descricao, $Local, $Data, $Qtd_Mesas);
    
                return $stmt->execute();    
                
            } catch(Exception $e) {
                echo 'Ops...Erro ao cadastrar evento!!!'.PHP_EOL.$e->getMessage();
            }
        }
        
            
        public function excluir($id) {
            try {
                //Preparando a query SQL
                $stmt = $this->conexao->prepare("DELETE FROM Eventos WHERE id = ?");
                $stmt->bind_param("i", $id);
                
                return $stmt->execute();
                
            } catch(Exception $e) {
                echo 'Ops...Erro ao excluir evento!!!'.PHP_EOL.$e->getMessage();
            }
        }
        
        
        public function consultar() {
            try{
                //Preparando a query SQL
                $query = "SELECT * FROM Eventos ORDER BY Data ASC" ;
                
                $Eventos = array(); //Armazena os objetos eventos
                
                if ($result = $this->conexao->query($query)) {
                    while ($row = $result->fetch_row()) { //Percorrendo os resultados
                        array_push($Eventos, new EventoEntity(
                            $row[0], //id
                            $row[1], //Descricao
                            $row[2], //Local
                            $row[3], //Data
                            $row[4] //Qtd_Mesas
                        ));
                    }
                    
                    $result->close();
                }
                
                return $Eventos;
                
            } catch(Exception $e) {
                echo 'Ops...Erro ao consultar eventos!!!'.PHP_EOL.$e->getMessage();
            }
        }
        
    
    }

?>
